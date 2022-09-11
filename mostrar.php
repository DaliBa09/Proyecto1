<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>

<?php
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $comentario=$_POST['comentario'];
?>

<body>
    <div class="nav">
        <a href="index.html" class="link">Inicio de la pagina</a>
        <a href="formulario.php" class="link">Formulario</a>
    </div>
    <div class="card">
        <h2 class="titulo">Contacto</h2>
        <form method="POST" action="formulario.php">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" id="" placeholder="Ingresa el nombre completo" value="<?php echo $nombre ?>"><br>
            <label for="correo">Correo</label><br>
            <input type="email" name="correo" id="" placeholder="Ingresa tu correo electronico" value="<?php echo $correo ?>"><br>
            <label for="genero">Genero</label><br>
            <input type="radio" name="genero1" id="hombre">Hombre
            <input type="radio" name="genero2" id="mujer">Mujer
            <br>
            <label for="password">Contraseña</label><br>
            <input type="password" name="password" id="" value="<?php echo $password ?>"><br>
            <label for="comentario">Comentario</label><br>
            <textarea name="comentario" id="" cols="30" rows="5" value="<?php echo $comentario ?>"></textarea><br>
            <label for="ciudad">Ciudad</label>
            <select name="ciudad" id="">
                <option value="nulo">Seleccione una Opcion</option>
                <option value="gdl">Guadalajara</option>
                <option value="Zpn">Zapopan</option>
                <option value="Tnl">Tonala</option>
                <option value="other">Otra</option>
            </select> <br>
            <label for="contrato">Me interesa contratarte</label>
            <input type="checkbox" name="contrato" id=""><br>
            <input type="button" value="Enviar" class="boton">
        </form>
    </div>
</body>
</html>