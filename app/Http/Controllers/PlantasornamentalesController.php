<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class PlantasornamentalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ornamental = Product::all();
        return view('plantasornamentales.index',compact('ornamental'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('plantasornamentales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ornamental  = new Product();

        $file=$request->file("imagen");
        $nombreArchivo = "img_".time().".".$file->guessExtension();
        $request->file('imagen')->storeAs('public/productos', $nombreArchivo );
        $ornamental->imagen = $nombreArchivo;
       
        $User = user::all();
        foreach ($User as $user)
            if (auth()->user()->id==$user->id) {
                $ornamental->user_id= $user->id;
            };
       
        
 

        $ornamental->descripcion = $request->descripcion;
        $ornamental->nombre = $request->nombre;
        $ornamental->categoria_id = $request->categoria_id="2";
        $ornamental->cuidados = $request->cuidados;
        $ornamental->precio = $request->precio;
        $ornamental->cantidad = $request->cantidad;
        $ornamental->ubicacion = $request->ubicacion;
        $ornamental->save();
        return redirect()->route('plantasornamentales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ornamental = Product::find($id);
        return view('plantasornamentales.show',compact('ornamental'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
