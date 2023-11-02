<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Revolution\Google\Sheets\Facades\Sheets;

class SpreadController extends Controller
{
    public function index($code = null)
    {
        $row = $this->loadSpread('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY')->where('qr_code', $code)->first();
        abort_if(!$row || !$code, 404);
        return view('landing', ['row' => $row]);
    }

    public function qrCode()
    {
        $rows = $this->loadSpread('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY');
        $url = config('app.url') . '/' . data_get($rows->random(), 'qr_code');
        return view('qr-code', ['url' => $url]);
    }

    public function loadSpread() 
    {
        $rows = Sheets::spreadsheet('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY')->sheet('Serial Numbers')->get();
        $spacesWithUnder = array_map(fn($item) => str_replace(' ', '_', $item), $rows->pull(0));
        return Sheets::collection(header: array_map('strtolower', $spacesWithUnder), rows: $rows);
    }
}
