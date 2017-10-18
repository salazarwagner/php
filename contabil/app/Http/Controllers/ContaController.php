<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Conta;

class ContaController extends Controller
{
    public function index() 
    {
        $contas = Conta::all();
        return response()->json($contas);
    }

    public function show($id)
    {
        $conta = Conta::find($id);

        if(!$conta) {
            return response()->json([
                'message'   => 'Conta não encontrada.',
            ], 404);
        }

        return response()->json($conta);
    }    

  
}
