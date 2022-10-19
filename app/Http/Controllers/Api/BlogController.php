<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blog=Blog::included()
                            ->filter()
                            ->sort()
                            ->get();
      return$blog;

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
            'titulo'=> 'required|max:255', 
            'descripcion'=> 'required|max:255',  
            'imagen'=> 'required|max:255', 
   
        ]);

        $blog=Blog::create($request->all());

        return $blog;
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
       $blog = Blog::included()->findOrFail($id);
       //$category = Category::included(); para probar los returns
        return $blog;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'titulo'=> 'required|max:255', 
            'descripcion'=> 'required|max:255',  
            'imagen'=> 'required|max:255', 
            
   
        ]);

        $blog->update($request->all());

        return $blog;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return$blog;
    }
}
