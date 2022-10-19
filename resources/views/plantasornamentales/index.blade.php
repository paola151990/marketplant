@extends('layouts.app')
<br>
<br>
<br>
<br>
<br>
<div class="text-dark text-center  h3">PLANTAS ORNAMENTALES</div>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<div id="cards_landscape_wrap-2">
    <div class="container ">
        <div class="row">


            @foreach ($ornamental as $product)
                @if ($product->categoria_id == '2')
                    <!-- Topic Cards -->

                    <a href="">
                        <div class="card-flyer col-3">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="{{ 'http://localhost/marketplant/public/storage/productos/' . $product->imagen }}"
                                        alt="" />
                                </div>
                                <form action="{{ route('cart.store') }}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $product->nombre }}" id="name" name="name">
                                    <input type="hidden" value="{{ $product->precio }}" id="price" name="price">
                                    <input type="hidden" value="{{ $product->imagen }}" id="imagen" name="imagen">
                                    <input type="hidden" value="1" id="quantity" name="quantity">

                                    <div class="text-container">
                                        <h6><a href="{{ route('plantasornamentales.show', $product->id) }}">
                                                <h6 class="card-title">{{ $product->nombre }}
                                            </a></h6>
                                        <h4>Precio: ${{ $product->precio }}</h4>
                                        <br>
                                        <button class="btn btn-primary" class="tooltip-test" title="add to cart">
                                            <i class="fa fa-shopping-cart"></i> Agregar al Carrito
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </a>
                @endif
            @endforeach

        </div>
    </div>
</div>
