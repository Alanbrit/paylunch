@extends('dashboard.layout')
@section('content')
    <div class="justify-left">
        <a class="btn-azul" href="{{ route("user.create")}}">Crear</a>
    </div>

        <form action="{{route('user.index')}}" method="get">
            <div class="grid justify-items-end">
                <div>
                    <input type="text" class="block tracking-wide text-gray-700 text-xs font-bold mb-2" name="texto" value="{{$texto}}">
                </div>
                <div>
                    <input class="btn-verde" value="Buscar" type="submit">
                </div>
            </div>
        </form>
    <br>
    <br>
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
                    <td class="text-center">
                        {{ $m->grupo->grado }} {{ $m->grupo->grupo}}
                    </td>
                    <td class="text-center">
                        @if($m->saldo > 0)
                            <a class="text-green-900 font-bold"> {{ $m->saldo }} <a>
                            @else
                            <a class="text-red-900 font-bold"> {{ $m->saldo }} <a>
                        @endif
                         
                    </td>
                    <td>
                        <a class="btn-azul" href="{{ route("user.edit", $m)}}">Editar</a>
                    </td>
                    <td>
                        <a class="btn-verde" href="{{ route("user.show", $m)}}">Ver</a>
                    </td>
                    <td>
                        <form action="{{ route("user.destroy", $m)}}" method="POST">
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
    {{ $users->links()}}
@endsection