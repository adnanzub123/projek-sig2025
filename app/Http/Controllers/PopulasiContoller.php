<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PopulasiContoller extends Controller
{
    public function showPopulasi(){
    $populasi_kota = DB::table('kota')
    ->join('kota_polygon', 'kota.id', '=', 'kota_polygon.kota_id')
    ->select('kota.id', 'kota.nama', 'kota.penduduk', 'kota_polygon.type', 'kota_polygon.polygon')
    ->get()
    ->toArray();

    $populasi_kabupaten = DB::table('kabupaten')
    ->join('kabupaten_polygon', 'kabupaten.id', '=', 'kabupaten_polygon.kabupaten_id')
    ->select('kabupaten.id', 'kabupaten.nama', 'kabupaten.penduduk', 'kabupaten_polygon.type', 'kabupaten_polygon.polygon')
    ->get()
    ->toArray();

    $populasi = array_merge($populasi_kota, $populasi_kabupaten);
    return view('populasi', ['populasi' => $populasi]);
    }
}
