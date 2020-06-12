<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Macara;
use App\Mpeserta;

class Utamacontroller extends Controller
{
    public function index(){
    	$acara = Macara::all();

    	return view('utama/home', ['acara' => $acara]);
    }
    public function daftar(Macara $macara){
    	return view('utama/daftar', ['acara' => $macara]);
    }
    public function postdaftar(Request $request){
    	Mpeserta::create([
    		'id_acara' => $request->id_acara,
    		'nama' => $request->nama,
    		'j_kel' => $request->j_kel,
    		'tgl_lahir' => $request->tgl_lahir,
    		'email' => $request->email,
    		'no_hp' => $request->no_hp,
    		'status' => 0
    	]);

    	return redirect('/passdaftar');
    }

    public function passdaftar(){
    	return view('utama/postdaftar');
    }
}
