<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataBarangController extends Controller
{
    public function index(){
        $data=DB::table('m_barang')->get();
        return view('DataBarang',['data'=>$data]);
    }
}
