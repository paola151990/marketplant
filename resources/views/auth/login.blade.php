@extends('layouts.app')
<br>
<br>
<br>

@section('title', 'Login')

@section('content')


@endsection
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<header>

    <div class="overlay"></div>

    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="{{ asset('video/video2.mp4') }}" type="video/mp4">
    </video>

    <!-- The header content -->
    <div class="container h-100">
        <div class="d-flex h-100 text-center align-items-center">
            <div class="w-100 text-dark">

                <div
                    class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
        rounded-lg shadow-lg">

                    <h1 class="text-3xl text-center text-dark font-bold">INICIAR SESION</h1>

                    <form class="mt-4" method="POST" action="">
                        @csrf

                        <input type="email"
                            class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                            placeholder="Email" id="email" name="email">

                        <input type="password"
                            class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
                            placeholder="Password" id="password" name="password">

                        @error('message')
                            <p
                                class="border border-red-500 rounded-md bg-red-100 w-full
              text-red-600 p-2 my-2">
                                * {{ $message }}</p>
                        @enderror
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script src="{{asset ('js/script.js')}}" ></script>
                        <button onclick="swal1()" type="submit"
                            class="rounded-md bg-indigo-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-indigo-600">INGRESAR</button>


                    </form>


                </div>
                <h1 class="display-3"></h1>
                <p class="lead mb-0"></p>
            </div>
        </div>
    </div>
</header> 
