<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewLectorRegister;

use Illuminate\Http\Request;

class OtherController extends Controller{


	public function show_register_lector_form(){
		return view('lectores.register');
	}

    public function registrar_lector(NewLectorRegister $req){
    	return $req;
    }

}
