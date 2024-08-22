<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiPenjualanController extends Controller
{
    public function index(){
        $data=DB::table('t_penjualan')->get();
        return view('Transaksi',['data'=>$data]);
    }
}

