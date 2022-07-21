@extends('dashboard.layout')
@section('content')
        <form action="{{route('lista.index')}}" method="get">
            <div class="grid justify-items-end">
                <div>
                    <input type="text" class="block tracking-wide text-gray-700 text-xs font-bold mb-2" name="texto" value="{{$texto}}">
                </div>
                <div>
                    <input class="btn-verde" value="Buscar" type="submit">
                </div>
            </div>
        </form>
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
                        <td class="text-center">
                            {{ $m->grupo->grado }} {{ $m->grupo->grupo}}
                        </td>
                        <td>
                            <form class="md:flex md:justify-center" action="{{ route('lista.store')}}" method="post">
                            @csrf
                                <input type="hidden" name="id_alumno" value="{{ $m->id }}">
                                <input type="hidden" name="id_grupo" value="{{ $m->id_grupo }}">
                                <input type="hidden" name="id_escuela" value="{{ $m->id_escuela }}">
                                <input type="hidden" name="fecha" value="{{ now() }}">
                                <select class="bg-gray-200 border border-gray-200 text-black-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="status">
                                    <option value="presente">Presente</option>
                                    <option value="ausente">Ausente</option>
                                </select>
                                <button class="btn-verde" type="submit">Pasar lista</button>
                            </form>
                        </td>
                    </tr>  
        @endforeach
        </tbody>
    </table>
    <br>
    {{ $listas->links()}}
@endsection