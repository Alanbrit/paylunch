@extends('dashboard.layout')
@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
</head>
<body>
    <h1>Detalle del mensaje</h1>
    <p>Contenido</p>
    <div>{{$mensaje->contenido}}</div>
    <p>Emisor</p>
    <p>{{ $mensaje->emisor->name }} {{ $mensaje->emisor->apellidos }}</p>
    <p>Receptor</p>
    <p>{{ $mensaje->receptor->name }} {{ $mensaje->receptor->apellidos }}</p>
@endsection