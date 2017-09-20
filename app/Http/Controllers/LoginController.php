<?php

namespace 
    mambo\Http\Controllers;
    
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Requests;
use Validator;
use mambo\Projeto;
use mambo\Categoria;
use mambo\Http\Requests\ProjetoRequest;
use mambo\Http\Controllers\Controller;

use Request;
use Auth;

class LoginController extends Controller
{
    public function form(){
    	return view('form_login');
    }

    public function login(){
    	
    	$credenciais = Request::only('email', 'password');
    	
    	if(Auth::attempt($credenciais)) {
    		return  redirect('/')->with("Usuário ". Auth::user()->name ." logado com sucesso");

    	}

    	return redirect('/login')->with ('usuário não existe');
    }
}
