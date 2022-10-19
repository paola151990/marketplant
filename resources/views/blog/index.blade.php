@extends('layouts.app')
<br>
<br>
<br>
<br>


<div class="text-dark text-center  h3">BIENVENIDO A NUESTRO BLOG</div>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div id="cards_landscape_wrap-2">
  <div class="container ">
      <div class="row">
@foreach ($blog as $blogs)
    

<a href="">
  <div class="card-flyer col-3">
      <div class="text-box">
          <div class="image-box">
              <img src="{{ 'http://localhost/marketplant/public/storage/blogs/' . $blogs->imagen_blog }}"
                  alt="" />
          </div>
        
              <div class="text-container">
                  <h6><a href="{{ route('blog.show', $blogs->id) }}">
                          <h6 class="card-title">{{ $blogs->titulo }}
                      </a></h6>
                 
                  <br>
                  <a class="btn btn-primary"  href="{{ route('blog.show', $blogs->id) }}" role="button">Ver Mas</a>

              </div>
         
      </div>
  </div>
</a>
  @endforeach
</div>
</div>
</div>

