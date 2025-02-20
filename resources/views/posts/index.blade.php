
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <a href="{{route ('login')}}">Login</a>
    @if(auth()->check())
    <a href="{{route('posts.create')}}">Crear</a>
<li class="nav-item">
<a class="" href="{{ route('logout') }}">Logout</a>
</li>
@endif


<div class="container">
    <h1>Lista de Posts</h1>
    @if (auth()->check())
    Bienvenido/a {{ auth()->user()->name }}    
    @endif
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
    @if ($posts->isNotEmpty())  
        @foreach ($posts as $post)
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
        @endforeach
    @else
        <tr>
            <td colspan="5" class="text-center">No hay posts disponibles</td>
        </tr>
    @endif
</tbody>

    </table>
</div>


