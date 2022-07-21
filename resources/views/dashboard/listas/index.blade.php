@extends('dashboard.layout')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>
                    Alumno
                </th>
                <th>
                    Grupo
                </th>
                <th>
                    Status
                </th>
                <th>
                    Fecha
                </th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach ($lista as $m)
                    <tr>
                        <td>
                            {{ $m->alumno->name }} {{ $m->alumno->apellidos }}
                        </td>
                        <td class="text-center">
                            {{ $m->grupo->grado }} {{ $m->grupo->grupo }}
                        </td>
                        <td class="text-center">
                            {{ $m->status }}
                        </td>
                        <td class="text-center">
                            {{ $m->fecha }}
                        </td>
                    </tr>  
        @endforeach
        </tbody>
    </table>
    <br>
    {{ $lista->links()}}
@endsection