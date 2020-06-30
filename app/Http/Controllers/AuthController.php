<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
    	return view('register');
    }

    // public function welcome(){
    // 	return view('welcome1');
    // }

    public function welcome_nama(Request $request){
    	$nama_depan = $request["first_name"];
    	$nama_belakang = $request["last_name"];
    	$data = ["nama_depan"=>$nama_depan, "nama_belakang"=>$nama_belakang];
    	return view('welcome1', $data);
    }
}
