<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class CekMemberController extends Controller
{
    public function index(){
        return view('depan.index');
    }
    public function cekdata(Request $request){
        $id_member = $request->id_member;
        $penjualan = Penjualan::select()->where('id_member','=',$id_member)->get();
        return view('depan.hasil', compact('penjualan'));
    }
}
