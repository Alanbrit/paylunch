@extends('dashboard.layout')
@section('content')
<h1>Crear usuario</h1>
    @if ($errors->any())
    <div class="font-medium text-red-600">
            <p style="color:red;">{{ __('¡Vaya! Algo salió mal.') }}</p>
    </div>

    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
        @foreach ($errors->all() as $e)
            <li style="color:red;">{{ $e }}</li>
        @endforeach 
    </ul>
    @endif


    <form action="{{ route('user.store')}}" method="post">
        @csrf
        <label for="">Nombre</label>
        <input name="name" value="{{ old("name","") }}">

        <label for="">Apellidos</label>
        <input name="apellidos" value="{{ old("apellidos","") }}">

        <label for="">Numero telefonico</label>
        <input name="numero" value="{{ old("numero","") }}">
        
        <label for="">Segundo numero telefonico</label>
        <input name="numero_2" value="{{ old("numero_2","") }}">

        <label for="">Saldo</label>
        <input name="saldo" value="{{ old("saldo","") }}">

        <label for="">Username</label>
        <input name="email" value="{{ old("email","") }}">

        <label for="">Contraseña</label>
        <input name="password" value="{{ old("password","") }}">

        <label for="">Escuela</label>
        <input type="hidden" name="id_escuela" value="{{ Auth::user()->id_escuela }}">
        <input type="text" disabled="disabled" value="{{ Auth::user()->school->nombre }}">

        <label for="">Grupo</label>
        <select name="id_grupo">
            <option></option>
            @foreach ($grupo as $u)
                <option {{ old("id_grupo","") == $u->id ? "selected" : "" }} value="{{ $u->id }}"> {{ $u->grado }} {{ $u->grupo }}</option>
            @endforeach
        </select>
        
        
        <button type="submit">Enviar</button>
    </form>
@endsection