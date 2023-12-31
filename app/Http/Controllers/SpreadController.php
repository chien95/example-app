<?php

namespace App\Http\Controllers;

use Google\Service\Transcoder\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Revolution\Google\Sheets\Facades\Sheets;

class SpreadController extends Controller
{
    public function index($code = null)
    {
        $query = $this->loadSpread('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY');
        if($code) $query = $query->where('qr_code', $code);
        $row = $query->first();
        abort_if(!$row, 404);
        return view('landing', ['row' => $row]);
    }

    public function qrCode()
    {
        $rows = $this->loadSpread('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY');
        $url = config('app.url') . '/' . data_get($rows->random(), 'qr_code');
        return view('qr-code', ['url' => $url]);
    }

    public function loadSpread($spreadId) 
    {
        return Cache::remember('sheets', 60,function () use ($spreadId) {
            $rows = Sheets::spreadsheet($spreadId)->sheet('Serial Numbers')->get();
            $spacesWithUnder = array_map(fn($item) => str_replace(' ', '_', $item), $rows->pull(0));
            return Sheets::collection(header: array_map('strtolower', $spacesWithUnder), rows: $rows);
        });
       
    }

    public function createQrCode($code = null)
    {
      
        $query = $this->loadSpread('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY');
        if($code) $query = $query->where('qr_code', $code);
        $first = $query->first();
        return view('qr-code', ['url' => config('app.url') . '/' . data_get($first , 'qr_code')]);
    }

    public function select2(Request $request)
    {
       

        if (!$request->q) return response()->json(['rows' => []]);
        $rows = $this->loadSpread('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY')
            ->filter(fn ($item) => false !== stripos( data_get($item, 'prefix'). "-" . data_get($item, 'suffix'), $request->q))
            ->splice(($request->page ?? 0) * 10, 10)
            ->values()
            ->toArray();
        return response()->json(['rows' => $rows, 'pagination' => count($rows) > 0]);
    }
}
