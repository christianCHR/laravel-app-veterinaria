<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$mensaje}}</h1>
    @foreach ($citas as $cita)
    <p>Cita {{ $cita->descripcion }} fecha {{$cita->fecha}}</p>
@endforeach
</body>
</html>