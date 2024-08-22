<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokBarangController extends Controller
{
    public function index(){
        $data=DB::table('t_stok')->get();
        return view('StokBarang',['data'=>$data]);
    }
}

