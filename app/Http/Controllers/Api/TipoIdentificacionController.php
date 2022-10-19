<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TipoIdentificacion;
use Illuminate\Http\Request;

class TipoIdentificacionController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tipoidentificacion=TipoIdentificacion::included()
                            ->filter()
                            ->sort()
                            ->get();
      return $tipoidentificacion;

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
   
        ]);

        $tipoidentificacion=TipoIdentificacion::create($request->all());

        return$tipoidentificacion;
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
       $tipoidentificacion = TipoIdentificacion::included()->findOrFail($id);
       //$category = Category::included(); para probar los returns
        return $tipoidentificacion;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoIdentificacion $tipoidentificacion)
    {
        $request->validate([
            'nombre'=> 'required|max:255', 
            
        ]);

        $tipoidentificacion->update($request->all());

        return $tipoidentificacion;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoIdentificacion $tipoidentificacion)
    {
        $tipoidentificacion->delete();
        return $tipoidentificacion;
    }
}
