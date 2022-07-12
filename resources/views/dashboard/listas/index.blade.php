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
                        <td>
                            {{ $m->grupo->grado }} {{ $m->grupo->grupo }}
                        </td>
                        <td>
                            {{ $m->status }}
                        </td>
                        <td>
                            {{ $m->fecha }}
                        </td>
                    </tr>  
        @endforeach
        </tbody>
    </table>
    {{ $lista->links()}}
@endsection