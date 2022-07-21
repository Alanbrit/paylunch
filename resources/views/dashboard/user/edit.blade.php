@extends('dashboard.layout')
@section('content')
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


    <form action="{{ route('user.update', $user->id)}}" method="post">
        @csrf
        @method("PUT")
        <div class="flex flex-wrap mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nombre</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="name" value="{{ old('name', $user->name) }}">
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Apellidos</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="apellidos" value="{{ old('apellidos', $user->apellidos) }}">
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Numero telefonico</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="numero" value="{{ old('numero', $user->numero) }}">
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Segundo numero telefonico</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="numero_2" value="{{ old('numero_2', $user->numero_2) }}">
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Saldo</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="saldo" value="{{ old('saldo', $user->saldo) }}">
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Username</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="email" value="{{ old('email', $user->email) }}">
            </div>

            

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Escuela</label>
                <input type="hidden" name="id_escuela" value="{{ Auth::user()->id_escuela }}">
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" disabled="disabled" value="{{ Auth::user()->school->nombre }}">
            </div>
        
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-1">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Grupo</label>
                <select class="bg-gray-200 border border-gray-200 text-black-700 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="id_grupo">
                    <option></option>
                    @foreach ($grupo as $u)
                        <option {{ $user->id_grupo == $u->id ? 'selected' : '' }} value="{{ $u->id }}"> {{ $u->grado }} {{ $u->grupo }} </option>
                    @endforeach
                </select>
            </div>
        
        </div>
        <button class="btn-verde" type="submit">Enviar</button>
    </form>
@endsection