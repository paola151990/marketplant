<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $category=Categoria::included()
                            ->filter()
                            ->sort()
                            ->get();
      return  $category;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'categorias'=> 'required|max:255', 
           
   
        ]);

        $category=Categoria::create($request->all());

        return $category;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $category = Category::with(['posts'])->findOrFail($id);
       $category = Categoria::included()->findOrFail($id);
       //$category = Category::included(); para probar los returns
        return  $category;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'categorias'=> 'required|max:255', 
   
        ]);

        $categoria->update($request->all());

        return  $categoria;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return  $categoria;
    }
}
