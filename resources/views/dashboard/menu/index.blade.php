@extends('dashboard.layout')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>
                    Dia
                </th>
                <th>
                    Guisado
                </th>
                <th>
                    Sopa
                </th>
                <th>
                    Agua
                </th>
                <th>
                    Postre
                </th>
                <th>
                    
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menus as $m)
                <tr>
                    <td>
                        {{ $m->dia }}
                    </td>
                    <td>
                        {{ $m->guisado }}
                    </td>
                    <td>
                        {{ $m->sopa_guarnicion }} 
                    </td>
                    <td>
                        {{ $m->agua }} 
                    </td>
                    <td>
                        {{ $m->postre }} 
                    </td>
                    <td>
                        <a class="btn-azul" href="{{ route("menu.edit", $m)}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $menus->links()}}
@endsection