@extends('layouts.app')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <br>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading h3"> {{ $ornamental->nombre }}</h1>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">

        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Image -->
        <div class="col-12 col-lg-6">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <a href="" data-toggle="modal" data-target="#productModal">
                        <img class="img-fluid"
                            src="{{ 'http://localhost/marketplant/public/storage/productos/' . $ornamental->imagen }}" />

                    </a>
                </div>
            </div>
        </div>

        <!-- Add to cart -->
        <div class="col-12 col-lg-6 add_to_cart_block">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <p class="price">Precio: ${{ $ornamental->precio }}</p>
                    <form action="{{ route('cart.store') }}" method="POST">
                        {{ csrf_field() }}
                        {{-- <form method="get" action="cart.html"> --}}
                        <div class="form-group">
                            <input type="hidden" value="{{ $ornamental->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $ornamental->nombre }}" id="name" name="name">
                            <input type="hidden" value="{{ $ornamental->precio }}" id="price" name="price">
                            <input type="hidden" value="1" id="quantity" name="quantity">
                        </div>
                        <div class="form-group">
                            <label>Unidades Disponibles: {{ $ornamental->cantidad }}</label>

                        </div>
                        <button class=" btn btn-success btn-lg btn-block text-uppercase  " title="add to cart">
                            <i class="fa fa-shopping-cart"></i> agregar al carrito
                        </button>
                    </form>
                    <div class="product_rassurance">
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="fa fa-truck fa-2x"></i><br />Rapido Envio</li>
                            <li class="list-inline-item"><i class="fa fa-credit-card fa-2x"></i><br />Pago Seguro</li>
                            <li class="list-inline-item"><i class="fa fa-phone fa-2x"></i><br />+57 310 520 7734</li>
                            <li class="list-inline-item"><i
                                    class="fa fa-map-marker fa-2x"></i><br />{{ $ornamental->ubicacion }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Description -->
        <div class="col-12">
            <div class="card border-light mb-3">
                <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-check"></i> Descripcion</div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $ornamental->descripcion }}
                    </p>
                </div>

                <div class="card-header bg-dark text-white text-uppercase"><i class="fa fa-check"></i> Usos</div>
                <div class="card-body">
                    <p class="card-text">
                        {{ $ornamental->cuidados }}
                    </p>
                </div>


            </div>
        </div>
    </div>


</div>
</div>
