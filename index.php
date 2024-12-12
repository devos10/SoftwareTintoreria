<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    
    <title>Tintoreria</title>
</head>
<body id=body>
        <div>
            <h1 id=TituloTintoreria>Tintoreria</h1>
            <!--Le indicamos alto y ancho de la imagen-->
            <img id=logo src="imagenes/Logo.png" 
            width="80"
            height="80"/>
            <img id=inicio src="imagenes/inicio.png" 
            width="80"
            height="80"/>
        </div>
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

            <div id=gestion>
            <a href=gestion.php class="enlace">
                    <img id=gestion src="imagenes/gestion.png"
                        width="80"
                        height="80"
                    
                    />
                    <label id=GestiondePrendas>Gestion de Prendas</label>

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
        

        <div id=Servicios>

            <label id=TituloServicios>Servicios</label>

            <div id=Stintoreria>
                <img id=servicio1 src="imagenes/Tintoreria.png"
                width="200"
                height="200"/>
                <label id=Ttitulo>Tintoreria</label>

            </div>

            <div id=Slavado>
                <img id= Servicio2 src="imagenes/lavado.png"
                width="150"
                height="150"
                />
                <label id=Lavadotitulo>Lavado</label>
            </div>

            <div id=Splanchado>
                <img id=Servicio3 src="imagenes/planchado.png"
                width="150"
                height="150"
                />
                <label id=Planchadotitulo>Planchado</label>

            </div>

        </div>
        
    <div id=footer>
        <!-- Incluir el Footer -->
        <?php include 'footer.php'; ?>
    

    </div>
    
    

</body>
</html>
