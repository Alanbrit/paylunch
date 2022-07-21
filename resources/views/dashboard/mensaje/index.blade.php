@extends('dashboard.layout')
@section('content')
    <a class="btn-azul" href="{{ route("mensaje.create")}}">Crear</a>
    <br>
    <br>
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
                        <a class="btn-azul" href="{{ route("mensaje.edit", $m)}}">Editar</a>
                    </td>
                    <td>
                        <a class="btn-verde" href="{{ route("mensaje.show", $m)}}">Ver</a>
                    </td>
                    <td>
                        <form action="{{ route("mensaje.destroy", $m)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button class="btn-rojo" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    {{ $mensajes->links()}}
@endsection