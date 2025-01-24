<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KabupController extends Controller
{
    public function showKabupaten(){
       $kabupaten = DB::table('kabupaten')->get();
       return view('kabupaten', ['kabupaten' => $kabupaten]);

    }
}
