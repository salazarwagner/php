<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class CategoriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show', 'store']);
    }

    public function index() 
    {
        $categorias = Categoria::all();
        return response()->json($categorias);
    }

    
    public function show($id)
    {
        $categoria = Categoria::find($id);

        if(!$categoria) {
            return response()->json([
                'message'   => 'Categoria não encontrada.',
            ], 404);
        }

        return response()->json($categoria);
    }  

    public function store(Request $request)
    {
        $categoria = new Categoria();
        //$categoria->fill($request->all());
        //$categoria->save();

        //return response()->json($categoria, 201);
        return view('welcome')->with('name', 'World');
    }      
    
    
    public function destroy($id)
    {
        return response()->json([
            'message'   => 'Categoria excluída.',
            ], 201);
        
        /*

        $categoria = Categoria::destroy($id);

        if(!$categoria) {
            return response()->json([
                'message'   => 'Categoria não encontrada.',
            ], 404);
        }

        return response()->json([
            'message'   => 'Categoria excluída.',
            ], 201);
        
        */
    } 
}
    
