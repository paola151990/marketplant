<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\categoria;
use Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
class SemillasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
     
       
        $semilla = Product::all();
        return view('semillas.index',compact('semilla'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        return view('semillas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $semilla  = new Product();

        $file=$request->file("imagen");
        $nombreArchivo = "img_".time().".".$file->guessExtension();
        $request->file('imagen')->storeAs('public/productos', $nombreArchivo );
        $semilla->imagen = $nombreArchivo;
       
        $User = user::all();
        foreach ($User as $user)
        if (auth()->user()->id==$user->id) {
        $semilla->user_id= $user->id;
        };
       
        $semilla->nombre = $request->nombre;
        $semilla->descripcion = $request->descripcion;
        $semilla->cuidados = $request->cuidados; 
        $semilla->tiempo_germinacion = $request->tiempo_germinacion;
        $semilla->categoria_id = $request->categoria_id="3";
        $semilla->cantidad = $request->cantidad;   
        $semilla->precio = $request->precio;
        $semilla->ubicacion = $request->ubicacion;
        $semilla->save();
        return redirect()->route('semillas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $semilla = Product::find($id);
        return view('semillas.show',compact('semilla'));
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
