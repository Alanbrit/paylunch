@extends('dashboard.layout')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
</head>
<body>
    <div class="w-full max-w-xs mx-auto">
    <p class="mt-2 flex items-center text-sky-800">Contenido</p>
    <div class="mt-2 flex items-center text-sky-600">{{$mensaje->contenido}}</div>
    <br>
    <p class="mt-2 flex items-center text-sky-800">Emisor</p>
    <p class="mt-2 flex items-center text-sky-600">{{ $mensaje->emisor->name }} {{ $mensaje->emisor->apellidos }}</p>
    <br>
    <p class="mt-2 flex items-center text-sky-800">Receptor</p>
    <p class="mt-2 flex items-center text-sky-600">{{ $mensaje->receptor->name }} {{ $mensaje->receptor->apellidos }}</p>
    </div>
@endsection