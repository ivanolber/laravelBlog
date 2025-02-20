<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<h1>Nuevo Post</h1>
<form action="{{ route('posts.store') }}" method="POST">
@csrf
<div class="row mb-3">
<div class="form-group">
<label for="titulo">Título:</label>
<input type="text" class="form-control" name="titulo"id="titulo">
</div>
<div class="form-group">
<label for="editorial">Contenido</label>
<input type="text" class="form-control" name="contenido"id="
contenido">
</div>
<div class="form-group">
<!--<select class="form-control" name="usuario_id" id="usuario_id">
@foreach ($usuarios as $usuario)
<option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
@endforeach
</select>
-->
</div>
<input type="submit" name="enviar" value="Enviar" class="btn btn-dark
btn-block">
</div>
</form>


