<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clientes</title>
</head>
<body>
    <!--la etiqueta center nos ayuda a alinear todo al centro de la pagina-->
    <center>
    <h1>Registro de Clientes</h1>
    <hr/>
    <form action="clientes.php" method="POST">

        <p>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre..." 
        required pattern="^[a-zA-Z\s]+$">
        <!--El require patter nos ayuda a validar que solo tenga letras y espacios con ayuda 
            de la expresion regular -->
        </p>

        <p>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" placeholder="Escribe tu numero de telefono..." 
        required pattern="^\d{10}$">
        <!--Estamos diciendo que solo 10 digitos-->
        </p>

        <p>
        <label for="direccion">Dirección:</label>
        <textarea id="direccion" name="direccion" placeholder="Escribe tu direccion..." 
        required minlength="5" maxlength="255"></textarea>
        <!--Con el minlength estamos diciendo que por lo menos 5 caractares y el maxlength para indicar 
            que maximo 255 caracteres-->
        </p>
        
        <button type="submit">Registrar</button>
        <!--Este es el boton para enviar el registro-->
    </form>


    </center>
    
    <?php
    //esto es para la base de datos 
    /*
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];

        $sql = "INSERT INTO clientes (nombre, telefono, direccion) VALUES ('$nombre', '$telefono', '$direccion')";
        if ($conn->query($sql) === TRUE) {
            echo "Cliente registrado con éxito.";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    $conn->close();
    */?>
</body>
</html>
