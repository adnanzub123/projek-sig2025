<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JumpenController extends Controller
{
    public function showJumpen(){
        $jumpen_kota = DB::table('kota')
        ->join('kota_polygon', 'kota.id', '=', 'kota_polygon.kota_id')
        ->select('kota.id', 'kota.nama', 'kota.pensiunan', 'kota_polygon.type', 'kota_polygon.polygon')
        ->get()
        ->toArray();
    
        $jumpen_kabupaten = DB::table('kabupaten')
        ->join('kabupaten_polygon', 'kabupaten.id', '=', 'kabupaten_polygon.kabupaten_id')
        ->select('kabupaten.id', 'kabupaten.nama', 'kabupaten.pensiunan', 'kabupaten_polygon.type', 'kabupaten_polygon.polygon')
        ->get()
        ->toArray();
    
        $jumpen = array_merge($jumpen_kota, $jumpen_kabupaten);
        return view('pensiunan', ['jumpen' => $jumpen]);
    }
}
