<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function cadastro(Request $request) {
        if($request->isMethod('GET')){
            return view('cadastroUsuario');
        }

    }
}
