@extends('dashboard.layout')
@section('content')
<h1>Actualizar Menu</h1>
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


    <form action="{{ route('menu.update', $menu->id)}}" method="post" class="w-full">
        @csrf
        @method("PUT")
        <div class="flex flex-wrap mb-2">
            <label for="">Dia</label>
            <input name="dia" value="{{ old('dia', $menu->dia) }}" disabled="disabled">
            <label for="">Guisado</label>
            <input name="guisado" value="{{ old('guisado', $menu->guisado) }}">
            <label for="">Sopa</label>
            <input name="sopa_guarnicion" value="{{ old('sopa_guarnicion', $menu->sopa_guarnicion) }}">
            <label for="">Agua</label>
            <input name="agua" value="{{ old('agua', $menu->agua) }}">
            <label for="">Postre</label>
            <input name="postre" value="{{ old('postre', $menu->postre) }}">
        </div>
        <button type="submit">Enviar</button>
    </form>
@endsection