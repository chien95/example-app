<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Revolution\Google\Sheets\Facades\Sheets;

class SpreadController extends Controller
{
    public function index()
    {
        $rows = Sheets::spreadsheet('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY')->sheet('Serial Numbers')->get();
        $values = Sheets::collection(header: array_map('strtolower', $rows->pull(0)), rows: $rows)->random();
        return view('welcome', ['rows' => $values]);
    }

    public function landing()
    {
        $rows = Sheets::spreadsheet('1zsFYBrzDKkXdp4FGdxKM1e0DrK1jyaNAyTEAu8cY_EY')->sheet('Serial Numbers')->get();
        $values = Sheets::collection(header: array_map('strtolower', $rows->pull(0)), rows: $rows)->random();
        return view('landing', ['rows' => $values]);
    }

    public function qrCode()
    {
        return view('qr-code');
    }

    public function media($media=null)
    {
        $path = public_path ("image/$media");
        abort_if(!$media || !File::exists($path), 404);
    
        $file = File::get($path);
        $type = File::mimeType($path);
    
        $response =  response()->make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
}
