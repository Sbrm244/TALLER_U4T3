<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos Recibidos</title>

    <style>

        body{
            font-family:Arial;
            background:#eef4ff;
            text-align:center;
            padding:40px;
        }

        .contenedor{
            background:white;
            width:500px;
            margin:auto;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h1{
            color:#0b3d91;
        }

        p{
            font-size:18px;
        }

        a{
            display:inline-block;
            margin-top:20px;
            background:#0b3d91;
            color:white;
            padding:10px 20px;
            text-decoration:none;
            border-radius:5px;
        }

    </style>

</head>

<body>

<div class="contenedor">

<?php

$nombre = htmlspecialchars($_POST["nombre"]);
$correo = htmlspecialchars($_POST["correo"]);
$tema = htmlspecialchars($_POST["tema"]);
$comentario = htmlspecialchars($_POST["comentario"]);

echo "<h1>¡Formulario recibido!</h1>";

echo "<p><strong>Nombre:</strong> $nombre</p>";
echo "<p><strong>Correo:</strong> $correo</p>";
echo "<p><strong>Tema favorito:</strong> $tema</p>";
echo "<p><strong>Comentario:</strong> $comentario</p>";

?>

<a href="index.html">Volver</a>

</div>

</body>
</html>