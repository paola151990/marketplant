<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $produc=Product::included()
                            ->filter()
                            ->sort()
                            ->get();
      return $produc;

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
        'nombre'=> 'required|max:255',
        'descripcion'=> 'required|max:255',
        'price'=> 'required|max:255',
        'categoria_id'=> 'required|max:255',
        'cantidad'=> 'required|max:255',
        'usos'=> 'required|max:255',
        'preparacion'=> 'required|max:255',
        'beneficios'=> 'required|max:255',
        'cuidados'=> 'required|max:255',
        'ubicacion'=> 'required|max:255',
        'imagen '=> 'required|max:255',
            
   
        ]);

        $produc=Product::create($request->all());

        return $produc;
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
       $produc= Product::included()->findOrFail($id);
       //$category = Category::included(); para probar los returns
        return $produc;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $produc)
    {
        $request->validate([
            'nombre'=> 'required|max:255',
        'descripcion'=> 'required|max:255',
        'price'=> 'required|max:255',
        'categoria_id'=> 'required|max:255',
        'cantidad'=> 'required|max:255',
        'usos'=> 'required|max:255',
        'preparacion'=> 'required|max:255',
        'beneficios'=> 'required|max:255',
        'cuidados'=> 'required|max:255',
        'ubicacion'=> 'required|max:255',
        'imagen '=> 'required|max:255',
   
        ]);

        $produc->update($request->all());

        return $produc;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $produc)
    {
        $produc->delete();
        return $produc;
    }
}
