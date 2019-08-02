<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterialController extends Controller
{

    public function cadastrarMaterial(Request $request){
        $material = new Material();
        $material->tipoMaterial = $request->tipoMaterial;
        $material->save();

        return response()->json(['material' => "Material cadastrado com sucesso!"]);
    }
}
