@extends('dashboard.layout')
@section('content')
    <div class="w-full max-w-xs mx-auto">
        <p class="mt-2 flex items-center text-sky-800">Nombre</p>
        <div class="mt-2 flex items-center text-sky-600">{{$user->name}}</div>
        <p class="mt-2 flex items-center text-sky-800">Apellidos</p>
        <div class="mt-2 flex items-center text-sky-600">{{$user->apellidos}}</div>
        <p class="mt-2 flex items-center text-sky-800">Numero</p>
        <div class="mt-2 flex items-center text-sky-600">{{$user->numero}}</div>
        <p class="mt-2 flex items-center text-sky-800">Segundo numero</p>
        <div class="mt-2 flex items-center text-sky-600">{{$user->numero_2}}</div>
        <p class="mt-2 flex items-center text-sky-800">Username</p>
        <div class="mt-2 flex items-center text-sky-600">{{$user->email}}</div>
        <p class="mt-2 flex items-center text-sky-800">Saldo</p>
        <div class="mt-2 flex items-center text-sky-600">{{$user->saldo}}</div>
        <p class="mt-2 flex items-center text-sky-800">Grupo</p>
        <div class="mt-2 flex items-center text-sky-600">{{$user->grupo->grado}} {{$user->grupo->grupo}}</div>
    </div>
@endsection