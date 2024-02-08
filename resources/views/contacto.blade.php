<!DOCTYPE html>
<html lang="es">
<head>
    <!-- <link rel="stylesheet" href="etilo.css"> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!-- <div class="nav">
        <ul class="nave">
            <li class="nave"><a href="/index.html">Inicio</a></li>
            <li class="nave"><a href="/formulario.html">Contacto</a></li>
        </ul>
    </div> -->
</head>
<body>
    <a href="/informacion">Información</a>
    <section>
        <form method="post" action="/recibe-contacto">
            @csrf 
            <!-- Este es un meto de hace un input oculto con token de validacion de origen de peticion -->
            <!-- Este hace un token para que podmaso pasar el perimetro de seguridad -->
            <label for="nombre">Nombre:</label><input name='nombre' type="text">
            <label for="correo">Correo:</label><input name='correo'  type="email">

            <p><b>Genero:</b></p>
            <label for="hombre">Hombre:</label><input name="genero" type="radio">
            <label for="mujer">Mujer:</label><input name="genero" type="radio"><br><br>

            <label for="contraseña">Contraseña:</label><input type="password"><br>
            <label for="comentario">Comentario:</label><br>
            <textarea name='comentario' id="comentario" rows="2" cols="30"></textarea><br>

            <label for="ciudad">Ciudad:</label>
            <select name="ciudad" id="ciudades">
                <option value="Guadalajara">Guadalajara</option>
                <option value="Zapopan">Zapopan</option>
                <option value="Tonala">Tonalá</option>
                <option value="Otro">Otra</option>
            </select>

            <label for="contratarme">Me interesa contratarte:</label><input type="checkbox"><br><br>
            <button type="submit" value="enviar" id="submit">Enviar</button>
        </form>
    </section>

</body>
</html>