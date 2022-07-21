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

    <div class="w-full max-w-xs mx-auto">
    <form action="{{ route('menu.update', $menu->id)}}" method="post">
        @csrf
        @method("PUT")
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Dia
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="dia" value="{{ old('dia', $menu->dia) }}" disabled="disabled">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Guisado
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="guisado" value="{{ old('guisado', $menu->guisado) }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Sopa
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="sopa_guarnicion" value="{{ old('sopa_guarnicion', $menu->sopa_guarnicion) }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Agua
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="agua" value="{{ old('agua', $menu->agua) }}">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="">
                Postre
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="postre" value="{{ old('postre', $menu->postre) }}">
        </div>
        <button class="button" type="submit">Enviar</button>
    </form>
    </div>
    
@endsection