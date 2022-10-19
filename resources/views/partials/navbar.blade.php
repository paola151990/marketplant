<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{asset('images/logo.png')}}"  width="80" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
               
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      VENDER
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{route('plantasmedicinales.create')}}">PLANTAS MEDICINALES</a>
                      <a class="dropdown-item" href="{{route('plantasornamentales.create')}}">PLANTAS ORNAMENTALES</a>
                      <a class="dropdown-item" href="{{route('semillas.create')}}">SEMILLAS</a>
                      <a class="dropdown-item" href="{{route('herramientas.create')}}">HERRAMIENTAS PARA JARDIN</a>
                    </div>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.index') }}">BLOG</a>
                </li>
        
                @if(auth()->check())
                <li class="mx-8">
                  <p class="nav-link"><b><a class="" href="{{route('perfil_us.index')}}">{{ auth()->user()->name }}</a></b> </p>
             </li>
     
                <li>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
                  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <script src="{{asset ('js/script.js')}}" ></script>
                  <a href="{{ route('login.destroy') }}" class="nav-link" onclick="swal2()">CERRAR SESION</a>
                </li>
              @else
                <li class="mx-6">
                  <a href="{{ route('login.index') }}" class="nav-link">INICIAR SESION</a>
                </li>
                <li>
                  <a href="{{ route('register.index') }}" class="nav-link">REGISTRARSE</a>
                </li>
              @endif
                
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle"
                       href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"
                    >
                        <span class="badge badge-pill badge-dark">
                            <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                        <ul class="list-group" style="margin: 20px;">
                            @include('partials.cart-drop')
                        </ul>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
