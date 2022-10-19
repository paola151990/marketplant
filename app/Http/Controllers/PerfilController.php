<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $producto = Product::all();
        return view('perfil_us.index')->withTitle('MarketPlant | PERFIL')->with(['producto' => $producto,'blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
     
        $product = Product::findOrFail($id);
        return view('perfil_us.edit', compact('product'));
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
    
        

    $product = Product::findOrFail($id);
    $product->nombre =$request->nombre;
    $product->descripcion= $request->descripcion;

    $file=$request->file("imagen");
    $nombreArchivo = "img_".time().".".$file->guessExtension();
    $request->file('imagen')->storeAs('public/productos', $nombreArchivo );
    $product->imagen = $nombreArchivo;

    $product->cantidad= $request->cantidad;
    $product-> precio= $request-> precio;
    $product-> cantidad= $request-> cantidad;
    
    
    $product->user_id= auth()->user()->id;

    $product->save();
    return redirect()->Route('perfil_us.index');
    
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->Route('perfil_us.index', $product);
    }
}
