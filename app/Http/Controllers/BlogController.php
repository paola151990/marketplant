<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\User;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('blog.index',compact('blog'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
       $blog  = new Blog();
       $User = user::all();
       foreach ($User as $user)
       if (auth()->user()->id==$user->id) {
       $blog->user_id= $user->id;
      };
      
      $file=$request->file("imagen_blog");
      $nombreArchivo = "img_".time().".".$file->guessExtension();
      $request->file('imagen_blog')->storeAs('public/blogs', $nombreArchivo );
      $blog->imagen_blog = $nombreArchivo;

       $blog->titulo = $request->titulo;
       $blog->descripcion = $request->descripcion;
       $blog->save();
       return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs= Blog::find($id);
        return view('blog.show',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::findOrFail($id);
        return view('blogs.edit', compact('blogs'));
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
             

    $blogs = Blog::findOrFail($id);
    $blogs->nombre =$request->nombre;
    $blogs->descripcion= $request->descripcion;

    $file=$request->file("imagen");
    $nombreArchivo = "img_".time().".".$file->guessExtension();
    $request->file('imagen')->storeAs('public/productos', $nombreArchivo );
    $blogs->imagen = $nombreArchivo;
    
    $blogs->cantidad= $request->cantidad;
    $blogs-> precio= $request-> precio;
    $blogs-> cantidad= $request-> cantidad;
    
    
    $blogs->user_id= auth()->user()->id;

    $blogs->save();
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
        $blogs = Blog::findOrFail($id);
        $blogs->delete();

        return redirect()->Route('perfil_us.index', $blogs);
    }
}
