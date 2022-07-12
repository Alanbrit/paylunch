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
                    
                </th>
                
            </tr>
        </thead>
        <tbody>
        
        @foreach ($listas as $m)
                    <tr>
                        <td>
                            {{ $m->name }} {{ $m->apellidos }}
                        </td>
                        <td>
                            {{ $m->grupo->grado }} {{ $m->grupo->grupo}}
                        </td>
                        <td>
                            <form action="{{ route('lista.store')}}" method="post">
                            @csrf
                                <input type="hidden" name="id_alumno" value="{{ $m->id }}">
                                <input type="hidden" name="id_grupo" value="{{ $m->id_grupo }}">
                                <input type="hidden" name="id_escuela" value="{{ $m->id_escuela }}">
                                <input type="hidden" name="fecha" value="{{ now() }}">
                                <select name="status">
                                    <option value="presente">Presente</option>
                                    <option value="ausente">Ausente</option>
                                </select>
                                <button type="submit">Pasar lista</button>
                            </form>
                        </td>
                    </tr>  
        @endforeach
        </tbody>
    </table>
    {{ $listas->links()}}
@endsection