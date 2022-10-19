<link rel="stylesheet" href={{ url('css/app.css') }}>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
{{-- <link  href="{{asset('css/style.css')}}" rel="stylesheet"> --}}
<script> type="text/javascript" src="{{asset ('js/script.js')}}"</script>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">    


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

<br>

<br>
<br>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
        
        <table class="table-fixed w-full">
            <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="border px-4 py-2"> ID</th>
                    <th class="border px-4 py-2">NOMBRE</th>
                    <th class="border px-4 py-2">CORREO</th>
              
                    <th class="border px-4 py-2">IDENTIFICACION</th>
                    <th class="border px-4 py-2">FECHA</th>
                    <th class="border px-4 py-2">ACCIONES</th>
                
                </tr>  
            </thead>    
            <tbody>
                @foreach ($user as $users)
                <tr>
                    <td> {{$users->id}}</td>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td>
                  
                    <td>{{$users->identificacion}}</td>
                    <td>{{$users->created_at}}</td>
                    <td class="border px-4 py-2">
                        <div class="flex justify-center rounded-lg text-lg" role="group">
                            <!-- botón editar -->
                         
                            <!-- botón borrar -->
                            <form action="{{ route('admin.destroy', $users->id) }}" method="POST" class="formEliminar">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4">Borrar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach   
            </tbody>  
                 
        </table>   
            <div>
              
            </div>

        </div>
    </div>
</div>

<script>
(function () {
'use strict'
//debemos crear la clase formEliminar dentro del form del boton borrar
//recordar que cada registro a eliminar esta contenido en un form  
var forms = document.querySelectorAll('.formEliminar')
Array.prototype.slice.call(forms)
.forEach(function (form) {
  form.addEventListener('submit', function (event) {        
      event.preventDefault()
      event.stopPropagation()        
      Swal.fire({
            title: '¿Confirma la eliminación del registro?',        
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#20c997',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Confirmar'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
                Swal.fire('¡Eliminado!', 'El registro ha sido eliminado exitosamente.','success');
            }
        })                      
  }, false)
})
})()
</script>   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


