<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function qrCode()
    {
        return view('qr-code');
    }
}
