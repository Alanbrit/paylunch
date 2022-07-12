@extends('dashboard.layout')
@section('content')
    <a href="{{ route("mensaje.create")}}">Crear</a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Contenido
                </th>
                <th>
                    Emisor
                </th>
                <th>
                    Receptor
                </th>
                <th>
                    
                </th>
                <th>
                    
                </th>
                <th>
                    
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensajes as $m)
                <tr>
                    <td>
                        {{ $m->contenido }}
                    </td>
                    <td>
                        {{ $m->emisor->name }} {{ $m->emisor->apellidos }}
                    </td>
                    <td>
                        {{ $m->receptor->name }} {{ $m->receptor->apellidos }}
                    </td>
                    <td>
                        <a href="{{ route("mensaje.edit", $m)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route("mensaje.show", $m)}}">Ver</a>
                    </td>
                    <td>
                        <form action="{{ route("mensaje.destroy", $m)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $mensajes->links()}}
@endsection