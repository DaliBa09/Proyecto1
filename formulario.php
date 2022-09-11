<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div class="nav">
        <a href="index.html" class="link">Inicio de la pagina</a>
        <a href="formulario.php" class="link">Formulario</a>
    </div>
    <div class="card">
        <h2 class="titulo">Contacto</h2>
        <form name="form" action="/Progra/mostrar.php" method="POST">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre"  placeholder="Ingresa el nombre completo"><br>
            <label for="correo">Correo</label><br>
            <input type="email" name="correo"  placeholder="Ingresa tu correo electronico"><br>
            <label>Genero</label><br>
            <input type="radio" name="genero1">Hombre
            <input type="radio" name="genero2">Mujer
            <br>
            <label for="password">Contraseña</label><br>
            <input type="password" name="password" ><br>
            <label for="comentario">Comentario</label><br>
            <textarea name="comentario" cols="30" rows="5"></textarea><br>
            <label for="ciudad">Ciudad</label>
            <select name="ciudad">
                <option value="nulo">Seleccione una Opcion</option>
                <option value="gdl">Guadalajara</option>
                <option value="Zpn">Zapopan</option>
                <option value="Tnl">Tonala</option>
                <option value="other">Otra</option>
            </select> <br>
            <label for="contrato">Me interesa contratarte</label>
            <input type="checkbox" name="contrato" ><br>
            <input type="submit" value="ENVIAR">
        </form>
    </div>
</body>
</html>