@extends('layouts.app')
<br>
<br>
<br>

@section('title', 'Register')

@section('content')


@endsection
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<header>

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{asset('video/video2.mp4')}}" type="video/mp4">
  </video>

  <!-- The header content -->
 
  <div class="container .mb-9">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-dark">

        <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 
        rounded-lg shadow-lg">
        
          <h1 class="text-3xl text-center text-dark font-bold">REGISTRARSE</h1>
        
          <form class="mt-4" method="POST" action="{{Route('register.store')}}">
            @csrf
        
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
            id="name" name="name">
        
            @error('name')        
              <p class="border border-red-500 rounded-md bg-red-100 w-full
              text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
           
          
            <div class="form-group">
              <label for="">Tipo de Documento</label>
              <select class="form-control" name="tipo_identificacion_id" >
           
                @foreach ($tipo as $tipo_identificacion)
                    <option value="{{$tipo_identificacion->id}}">{{$tipo_identificacion->nombre}}</option>
                
                @endforeach
           
              </select>
           
             </div>
               
        
            <input type="identificacion" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Identificacion"
            id="identificacion" name="identificacion">
        
            @error('identificacion')        
            <p class="border border-red-500 rounded-md bg-red-100 w-full
            text-red-600 p-2 my-2">* {{ $message }}</p>
          @enderror
        
        
            <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
            id="email" name="email">
        
            @error('email')        
              <p class="border border-red-500 rounded-md bg-red-100 w-full
              text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
        
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
            id="password" name="password">
        
            @error('password')        
              <p class="border border-red-500 rounded-md bg-red-100 w-full
              text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
        
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 
            w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
            placeholder="Confirma contraseña" id="password_confirmation" 
            name="password_confirmation">
            
            @error('password_confirmation')        
              <p class="border border-red-500 rounded-md bg-red-100 w-full
              text-red-600 p-2 my-2">* {{ $message }}</p>
            @enderror
        
            <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
            text-white font-semibold p-2 my-3 hover:bg-indigo-600">REGISTRARSE</button>
        
        
          </form>
        
        
        </div>
     
      </div>
    </div>
  </div>
</header>

<!-- Page section example for content below the video header -->
