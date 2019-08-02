<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function cadastrarEmpresa(Request $request){
        $empresa = new Empresa();
        $empresa->nome = $request->nome;
        $empresa->endereco = $request->endereco;
        $empresa->numero = $request->numero;
        $empresa->complemento = $request->complemento;
        $empresa->cep = $request->cep;
        $empresa->bairro = $request->bairro;
        $empresa->complemento = $request->complemento;
        $empresa->estado = $request->estado;
        $empresa->telefone = $request->telefone;
        $empresa->complemento = $request->complemento;
        $empresa->latitude = $request->latitude;
        $empresa->longitude = $request->longitude;
        $empresa->save();

        return response()->json(['empresa' => "Empresa cadastrada com sucesso!"]);
    }
}
