<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <a href="{{route('posts.create')}}">crear</a>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container">
    <h1>Lista de Posts</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Contenido</th>
                <th>Autor</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
    @if ($posts)  
        
            <tr>
                <td>{{ $post->titulo }}</td>
                <td>{{ $post->contenido }}</td>
                <td>{{ $post->usuario->name }}</td>
                <td>{{ $post->created_at->format('d-m-Y H:i') }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar este post?')">Eliminar</button>
                    </form>
                </td>
            </tr>
    @else
        <tr>
            <td colspan="5" class="text-center">No hay posts disponibles</td>
        </tr>
    @endif
</tbody>

    </table>
</div>
