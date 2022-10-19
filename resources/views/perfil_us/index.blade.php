@extends('layouts.app')
<br>
<br>
<br>
<br>

<div class="text-dark text-center  h3">MIS PRODUCTOS</div>
<div class="py-12">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          
      
      <table class="table-fixed w-full">
          <thead>
              <tr class="bg-gray-800 text-white">
                  <th style="display: none;">ID</th>
                  <th class="border px-4 py-2">NOMBRE</th>
                  <th class="border px-4 py-2">DESCRIPCION</th>
                  <th class="border px-4 py-2">PRECIO</th>
                  <th class="border px-4 py-2">CANTIDAD</th>
                  <th class="border px-4 py-2">IMAGEN</th>
                  <th class="border px-4 py-2">ACCIONES</th>
              </tr>  
          </thead>    
          <tbody>
              @foreach ($producto as $producto)
              @if (auth()->user()->id == $producto->user_id)
              <tr>
                
                  <td style="display: none;">{{$producto->id}}</td>
                  <td>{{$producto->nombre}}</td>
                  <td>{{$producto->descripcion}}</td>
                  <td>{{$producto->precio}}</td>
                  <td>{{$producto->cantidad}}</td>
                  <td  class="border px-14 py-1">
                      <img src="{{ 'http://localhost/marketplant/public/storage/productos/' . $producto->imagen }}" width="80%">
                  </td>                        
                  <td class="border px-4 py-1">
                      <div class="d-flex mt-2  justify-center rounded-sm text-sm" role="group">
                            <!-- botón borrar -->
                            <form action="{{ route('perfil_us.destroy', $producto->id) }}" method="POST" class="formEliminar">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="rounded bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-2">Borrar</button>
                          </form>
                        <!-- botón editar -->
                          <a href="{{ route('perfil_us.edit', $producto->id) }}" class="rounded bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-2">Editar</a>

                      </div>
                      </div>
                  </td>
              </tr>
              @endif
              @endforeach   
          </tbody>  
               
      </table>   
     

      </div>
  </div>
</div>


<script>
(function () {
'use strict'
// crear la clase formEliminar dentro del form del boton borrar
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
</script>


