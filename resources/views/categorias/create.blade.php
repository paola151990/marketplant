<h1>categorias</h1>

<form action="{{Route('categorias.store')}}" method="POST">

    @csrf
    <label>
        Nombre
        <br>
        <input type="text" name="nombre" value="{{old('nombre')}}" > 
    
    </label>
    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
   
        <br>
    <button type="submit">Enviar Formulario</button>
    
    
    </form>
    