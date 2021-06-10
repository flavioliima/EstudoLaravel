<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Auth;

class LoginController extends Controller {

	public function form(){
		return view('formLogin');
	}

	public function login(){
		$credenciais = Request::only('email', 'password');

		if(Auth::attempt($credenciais)){
			return 'usuario está logado com sucesso';
		}

		return 'usuario não existe';
		//return redirect('/produtos')->withInput();
	}
}
