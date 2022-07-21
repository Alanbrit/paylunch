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

    <form class="w-full" action="{{ route('mensaje.store')}}" method="post">
        @csrf
        <div class="flex flex-wrap mb-2">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Contenido</label>
                <textarea name="contenido" class="form-textarea mt-1 block w-full" rows="3">{{ old("contenido","") }}</textarea>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Receptor</label>
                <select name="id_receptor" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                <option></option>
                @foreach ($users as $u)
                <option {{ old("id_receptor","") == $u->id ? "selected" : "" }} value="{{ $u->id }}"> {{ $u->name }} {{ $u->apellidos }} </option>
                @endforeach
                </select>
            </div>
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">            
                <label for="" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Emisor</label>
                <input type="hidden" name="id_emisor" value="{{ Auth::user()->id }}">
                <input type="text" disabled="disabled" value="{{ Auth::user()->name }}  {{ Auth::user()->apellidos }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
        </div>
            <br>
            <button class="btn-verde" type="submit">Enviar</button>
    </form>
@endsection