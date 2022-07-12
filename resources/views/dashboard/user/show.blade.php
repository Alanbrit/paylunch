@extends('dashboard.layout')
@section('content')
    <h1>Detalle del usuario</h1>
    <p>Nombre</p>
    <div>{{$user->name}}</div>
    <p>Apellidos</p>
    <div>{{$user->apellidos}}</div>
    <p>Numero</p>
    <div>{{$user->numero}}</div>
    <p>Segundo numero</p>
    <div>{{$user->numero_2}}</div>
    <p>Username</p>
    <div>{{$user->email}}</div>
    <p>Saldo</p>
    <div>{{$user->saldo}}</div>
    <p>Grupo</p>
    <div>{{$user->grupo->grado}} {{$user->grupo->grupo}}</div>
@endsection