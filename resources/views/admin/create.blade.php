<link rel="stylesheet" href={{ url('css/app.css') }}>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link  href="{{asset('css/style.css')}}" rel="stylesheet">

 
   <!-- Styles -->

<script> type="text/javascript" src="{{asset ('js/script.js')}}"</script>
@extends('admin.sidebar')

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('images/logo.png')}}"  width="100" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                @if(auth()->check())
                <li class="mx-8">
                  <p class="nav-link"><b>{{ auth()->user()->name }}</b></p>
                </li>
                <li>
                  <a href="{{ route('login.destroy') }}" class="nav-link">CERRAR SESION</a>
                </li>
              @else
                <li class="mx-6">
                  <a href="{{ route('login.index') }}" class="nav-link">INICIAR SESION</a>
                </li>
                <li>
                  <a href="{{ route('register.index') }}" class="nav-link">REGISTRARSE</a>
                </li>
              @endif
             
            </ul>
        </div>
    </div>
</nav>

@section('content')

@endsection
