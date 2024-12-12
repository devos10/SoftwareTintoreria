<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clientes</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body id=body >

    <h1 id=TituloRegistro>Registro de Clientes</h1>
    <img id=imgRegistro src="imagenes/Registro.png"
        width="80"
        height="80"
    />
    <a href=index.php>
        <img id=imgReturn src="imagenes/return.png"
            width="40"
            height="40"

    </a>
    
    />

                <!--Vista del menu-->
    <div id=menu>
        <label id=tituloMenu>Menú</label>
            <div id= registro>
                <a href="registro.php" class="enlace">
                <img id=registro src="imagenes/Registro.png"
                    width="80"
                    height="80"/>
                <label id=RCtitulo>Registro Cliente</label>
                </a>
            </div>

            <div id=registroOrden>
                <a href="pedidos.php" class="enlace">
                    <img id=registroorden src="imagenes/RegistroOrden.png"
                        width="80"
                        height="80"
                        />
                    <label id=ROtitulo>Registro Orden</label>
                </a>
            </div>

            <div id=ticket>
                <a href=ticket.php class="enlace">
                    <img id=ticket src="imagenes/ticket.png"
                        width="80"
                        height="80"
                    />
                <label id=ITtitulo>Impresion Ticket</label>
                </a>
            </div>
            <div id=reporte>
                <a href=reportes.php class="enlace">
                    <img id=reporte src="imagenes/reporte.png"
                        width="70"
                        height="80"
                    
                    />
                    <label id=Reportestitulo>Reportes</label>

                </a>

            </div>
    </div>




<!--Formulario-->

    <form action="clientes.php" method="POST">


        <div id=Nombre>
            <img src="imagenes/registro/nombre.png"

            width="80"
            height="80"
            />
            <label id=etiquetaNombre for="nombre">Nombre:</label>
            <input type="text" id="inputnombre" name="nombre" placeholder="Escribe tu nombre..." 
            required pattern="^[a-zA-Z\s]+$">
            <!--El require patter nos ayuda a validar que solo tenga letras y espacios con ayuda 
                de la expresion regular -->
        </div>

        <div id=Telefono>
            <img src="imagenes/registro/telefono.png"
            width="80"
            height="80"
            />
            <label id=etiquetaTelefono for="telefono">Teléfono:</label>
            <input type="text" id="inputtelefono" name="telefono" placeholder="Escribe tu numero de telefono..." 
            required pattern="^\d{10}$">
            <!--Estamos diciendo que solo 10 digitos-->

        </div>
        
        <div id=Direccion>
            <img src="imagenes/registro/direccion.png"
            width="80"
            height="80"
            />
            <label id=etiquetaDireccion for="direccion">Dirección:</label>
            <input type="textarea" id="inputdireccion" name="direccion" placeholder="Escribe tu direccion..." 
            required minlength="5" maxlength="255"></textarea>
            <!--Con el minlength estamos diciendo que por lo menos 5 caractares y el maxlength para indicar 
                que maximo 255 caracteres-->

        </div>
        
        
        <button id="BtnRegistrar" type="submit">Registrar</button>
        <!--Este es el boton para enviar el registro-->
    </form>

    
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
