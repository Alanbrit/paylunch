@extends('dashboard.layout')
@section('content')
    <a href="{{ route("user.create")}}">Crear</a>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Apellido
                </th>
                <th>
                    Grupo
                </th>
                <th>
                    Saldo
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
            @foreach ($users as $m)
                <tr>
                    <td>
                        {{ $m->name }}
                    </td>
                    <td>
                        {{ $m->apellidos }}
                    </td>
                    <td>
                        {{ $m->grupo->grado }} {{ $m->grupo->grupo}}
                    </td>
                    <td>
                        {{ $m->saldo }} 
                    </td>
                    <td>
                        <a href="{{ route("user.edit", $m)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{ route("user.show", $m)}}">Ver</a>
                    </td>
                    <td>
                        <form action="{{ route("user.destroy", $m)}}" method="POST">
                            @method("DELETE")
                            @csrf
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links()}}
@endsection