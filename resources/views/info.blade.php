<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
</head>
<body>
    <a href="/contacto">Contacto</a> 
    <hr>

    {{$tipo}}

    <hr>
    @if($tipo == 'alumno')

        <h1>Alumno</h1>
        <p>Info alumno</p>

    @elseif($tipo == 'empresa')
        <h1>Empresa</h1>
        <p>Info empresa</p>
    @else
        <h1>Invitado</h1>
        <p>Info invitado</p>
    @endif

    
</body>
</html>