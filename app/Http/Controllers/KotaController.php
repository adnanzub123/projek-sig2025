<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaController extends Controller
{
    public function showKota(){
        $kota = DB::table('kota')->get();
        return view('kota', ['kota' => $kota]);
    }
}
