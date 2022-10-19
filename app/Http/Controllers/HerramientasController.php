<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $herramienta = Product::all();
        return view ('herramientas.index', compact('herramienta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    return view('herramientas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $herramienta  = new Product();
      
        $file=$request->file("imagen");
        $nombreArchivo = "img_".time().".".$file->guessExtension();
        $request->file('imagen')->storeAs('public/productos', $nombreArchivo );
        $herramienta->imagen = $nombreArchivo;
       

         $User = user::all();
         foreach ($User as $user)
         if (auth()->user()->id==$user->id) {
         $herramienta->user_id= $user->id;
        };
        $herramienta->categoria_id = $request->categoria_id="4";
        $herramienta->nombre = $request->nombre;
        $herramienta->descripcion = $request->descripcion;
        $herramienta->usos = $request->usos;
        $herramienta->cantidad = $request->cantidad;
        $herramienta->precio = $request->precio;
        $herramienta->ubicacion = $request->ubicacion;
        $herramienta->save();
        return redirect()->route('herramientas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $herramienta = Product::find($id);
        return view('herramientas.show',compact('herramienta'));
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
