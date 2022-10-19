 @extends('layouts.app')
 <br>
 <br>
 <br>
 <br>
 <br>

 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
 <div class="container mb80">
     <div class="page-timeline">

            <div class="vtimeline-content">
                <a href="#"><img src="{{ 'http://localhost/marketplant/public/storage/blogs/' . $blogs->imagen_blog }}" width="1000" height="200" class=" "></a>
                 <a href="#">
                 <h3>{{ $blogs->titulo }}</h3>
                </a>
                <ul class="post-meta list-inline">
                 <li class="list-inline-item">
                     <i class="fa fa-user-circle-o"></i> <a href="#">{{ auth()->user()->name }}</a>
                 </li>
                 <li class="list-inline-item">
                     <i class="fa fa-calendar-o"></i> <a href="#">{{ $blogs->updated_at }}</a>
                 </li>
                 <li class="list-inline-item">

                  </li>
               </ul>
               <p>
                {{ $blogs->descripcion }}
             </p><br>
            </div>

        </div>
 </div>


 <!-- source: https://www.bootdey.com/snippets/view/bs4-blog-timeline -->
