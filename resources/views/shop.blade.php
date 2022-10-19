@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 100px">
        <nav aria-label="breadcrumb">
          {{-- BARRA DE NAV --}}
          <link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
          <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="mask flex">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-md-7 col-12 order-md-1 order-2">
                        <h4>Presenta Tu <br>
                         Producto</h4>
                        <p>Muestra, expande y distribuye tus productos con la ayuda de Marketplant somos tienda online.<br>
                          </p>
                        <a href="#">INICIO</a> </div>
                      <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{asset('images/planta1.jpg')}}"  class="mx-auto" alt="slide"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="mask flex-center">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-md-7 col-12 order-md-1 order-2">
                        <h4>Nuestros<br>
                          Productos</h4>
                        <p>Encontraras diversidad en plantas medicinales, ornamentales, semillas y herramientas de jardin<br>
                          ¡tu decides! </p>
                        <a href="#">VER</a> </div>
                      <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{asset('images/semilla.jpg')}}" class="mx-auto" alt="slide"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="mask flex-center">
                  <div class="container">
                    <div class="row align-items-center">
                      <div class="col-md-7 col-12 order-md-1 order-2">
                        <h4>Blog <br>
                          </h4>
                        <p>Quieres compartir tus conocimientos, curiosidades y demas experiencias<br>
                          Este espacio es creado para ti.</p>
                        <a href="{{route('blog.create')}}">SUBIR</a> </div>
                      <div class="col-md-5 col-12 order-md-2 order-1"><img src="{{asset('images/vivero.jpg')}}" class="mx-auto" alt="slide"></div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
            <!--slide end--> 
        </nav>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet">
<section>
    <link href="{{ asset('css/boton.css') }}" rel="stylesheet">
        <body class="bg-default">
            <div class="main-content">
                <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
                    <div class="container-fluid">
                        <div class="text-dark   h5">NUESTROS PRODUCTOS</div>
                        <div class="header-body">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6">
                                    
                                    <div class="card card-stats mb-4 mb-xl-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col sm-7">
                                                    <a href="{{ route('plantasmedicinales.index') }}">
                                                        <span class="h6 font-weight-bold mb-0">PLANTAS MEDICINALES</span>
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-muted text-sm">


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="card card-stats mb-4 mb-xl-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col sm-7">
                                                    <a href="{{ route('semillas.index') }}">
                                                        <span class="h5 font-weight-bold mb-0 ">SEMILLAS</span>
                                                    </a>
                                                </div>
                                                <div class="col-auto">
                                                    <div
                                                        class="icon icon-shape bg-warning text-white rounded-circle shadow">

                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-muted text-sm">


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="card card-stats mb-4 mb-xl-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col sm-7">
                                                    <a href="{{ route('plantasornamentales.index') }}">
                                                        <span class="h6 font-weight-bold mb-0">PLANTAS ORNAMENTALES</span>
                                                    </a>
                                                </div>
                                                <div class="col-auto">

                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-muted text-sm">


                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="card card-stats mb-4 mb-xl-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col sm-7">
                                                    <a href="{{ route('herramientas.index') }}">
                                                        <span class="h5 font-weight-bold mb-0">HERRAMIENTAS</span>
                                                    </a>
                                                </div>
                                                <div class="col-auto">



                                                </div>
                                            </div>
                                            <p class="mt-3 mb-0 text-muted text-sm">


                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <!-- Page content -->
            </div>
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">

                </div>
            </footer>
        </body>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-12">  
                        <br>
                        <div class="text-dark h5">PRODUCTOS MAS POPULARES</div>
                        <hr>
                    </div>
                </div>
                
                <link href="{{ asset('css/style.css') }}" rel="stylesheet">
                <div id="cards_landscape_wrap-2">
                    <div class="container ">
                        <div class="row">
                            {{-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"> --}}

                            @foreach ($products as $pro)
                                <!-- Topic Cards -->

                                <a href="">
                                    <div class="card-flyer col-3">
                                        <div class="text-box">
                                            <div class="image-box">
                                                <img src="{{ 'http://localhost/marketplant/public/storage/productos/' . $pro->imagen }}"
                                                    alt="" />
                                            </div>
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $pro->id }}" id="id"
                                                    name="id">
                                                <input type="hidden" value="{{ $pro->nombre }}" id="name"
                                                    name="name">
                                                <input type="hidden" value="{{ $pro->precio }}" id="price"
                                                    name="price">
                                                <input type="hidden" value="{{ $pro->imagen }}" id="imagen"
                                                    name="imagen">
                                                <input type="hidden" value="1" id="quantity" name="quantity">

                                                <div class="text-container">
                                                    <h6><a href="{{ route('plantasmedicinales.show', $pro->id) }}">
                                                            <h6 class="card-title">{{ $pro->nombre }}
                                                        </a></h6>
                                                    <h4>Precio: ${{ $pro->precio }}</h4>
                                                    <br>
                                                    <button class="btn btn-primary" class="tooltip-test"
                                                        title="add to cart">
                                                        <i class="fa fa-shopping-cart"></i> Agregar al Carrito
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>




                <div class="container my-5">
                    <hr>
                    <div class="border-bottom pb-3 px-2 d-flex justify-content-between">
                        <div class="d-flex align-items-center">

                            <a href="{{ route('blog.create') }}" style="color: #9B5DE5; font-size: 20px;"
                                class="text-capitalize font-weight-bold mb-0">Nuevo Blog</a>
                        </div>
                        <a href="{{ route('blog.index') }}" class="text-dark">VER TODO</a>
                    </div>
                    <div id="cards_landscape_wrap-2">
                        <div class="container ">
                            <div class="row">
                      @foreach ($blog as $blogs)
                          
                      
                      <a href="{{ route('blog.show', $blogs->id) }}">
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
                </div>


            </div>
        </div>
    </div>

    </div>
    </div>
@endsection
