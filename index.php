<?php

include("conexion.php");

if(isset($_POST['guardar']))
{
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];

    $guardar = "INSERT INTO datos_proveedor
    (nombre,direccion,telefono_residencial,celular,email)

    VALUES

    ('$nombre','$direccion','$telefono','$celular','$email')";

    $ejecutar = mysqli_query($conexion,$guardar);

    if($ejecutar)
    {
        echo "<script>alert('Datos guardados correctamente')</script>";
    }
    else
    {
        echo "<script>alert('Error al guardar')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del proveedor</title>

    <style>

        body{
            font-family: Arial;
            background:#f2f2f2;
        }

        .contenedor{
            width:400px;
            margin:auto;
            margin-top:50px;
            background:white;
            border:1px solid #ccc;
        }

        .titulo{
            background:#333;
            color:white;
            padding:15px;
            font-size:24px;
        }

        .contenido{
            padding:15px;
        }

        input{
            width:100%;
            padding:8px;
            margin-top:5px;
            margin-bottom:10px;
        }

        .fila{
            display:flex;
            gap:10px;
        }

        .fila div{
            width:100%;
        }

        button{
            background:#555;
            color:white;
            border:none;
            padding:10px 20px;
            cursor:pointer;
        }

    </style>

</head>

<body>

<div class="contenedor">

    <div class="titulo">
        Datos del proveedor
    </div>

    <div class="contenido">

        <form method="POST">

            <label>Nombre</label>
            <input type="text" name="nombre">

            <label>Dirección</label>
            <input type="text" name="direccion">

            <div class="fila">

                <div>
                    <label>Teléfono residencial</label>
                    <input type="text" name="telefono">
                </div>

                <div>
                    <label>Celular</label>
                    <input type="text" name="celular">
                </div>

            </div>

            <label>Email</label>
            <input type="email" name="email">

            <button type="submit" name="guardar">
                Guardar
            </button>

        </form>

    </div>

</div>

</body>
</html>