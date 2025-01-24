<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JumdesController extends Controller
{
    public function showJumdes(){
        $jumdes_kota = DB::table('kota')
        ->join('kota_polygon', 'kota.id', '=', 'kota_polygon.kota_id')
        ->select('kota.id', 'kota.nama', 'kota.desa', 'kota_polygon.type', 'kota_polygon.polygon')
        ->get()
        ->toArray();
    
        $jumdes_kabupaten = DB::table('kabupaten')
        ->join('kabupaten_polygon', 'kabupaten.id', '=', 'kabupaten_polygon.kabupaten_id')
        ->select('kabupaten.id', 'kabupaten.nama', 'kabupaten.desa', 'kabupaten_polygon.type', 'kabupaten_polygon.polygon')
        ->get()
        ->toArray();
    
        $jumdes = array_merge($jumdes_kota, $jumdes_kabupaten);
        return view('desa', ['jumdes' => $jumdes]);
    }
}