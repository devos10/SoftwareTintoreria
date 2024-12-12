<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Orden</title>
    <link rel="stylesheet" href="css/pedidos.css">
</head>
<body id=body>
    <h1 id=TituloRegistrodeOrden>Registro de Orden</h1>
    <div id=imgRegistroOrden>
        <img src="imagenes/RegistroOrden.png" 
                width="90"
                height="90"/>

    </div>
    <a href="index.php" class="enlace">
        <img id=imgReturn src="imagenes/return.png"
                width="40"
                height="40"
        />

    </a>
    
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

    <!---Formulario para el pedido-->
    <form action="guardar_pedido.php" method="post">
        <div id=formulario>
            <div id=NumerodePrendas>
                <label id=etiquetaNumerodePrendas>Numero de prendas:</label> 
                <input type="number" id="inputnumerodeprendas" name="numerodeprendas">

            </div>
            
            <div id=Prenda>
                <p>
                    <label id=etiquetaPrenda for="prenda">Prenda</label>
                    <input type="text" id="inputprenda" name="prenda" required>
                </p>
            </div>
            <div id=PrecioUnitario>

                    <label id=etiquetaPrecioUnitario for="precio_unitario">Precio Unitario</label>
                    <input type="number" id="inputprecio_unitario" name="precio_unitario" step="0.01" required>

            </div>

            <div id=Precio>

                <label id=etiquetaPrecio for="precio">Precio</label>
                <input type="number" id="inputprecio" name="precio">
            </div>

            <div id=Tipos>
                <label id=etiquetaTipodePrenda for="TiposdePrenda">Tipo de prenda</label>
                <input type="number" id="inputtipodeprenda" name="cantidad" required>

            </div>

            <div id=Total>
                <label id=etiquetaTotal for="total">TOTAL</label>
                <input type="number" id="inputtotal" name="total" step="0.01" readonly>

            </div>

            <div id=Fecha>
                <label id=etiquetaFechaEstimadadeEntrega for="fecha_entrega">Fecha Estimada de Entrega</label>
                <input type="date" id="inputfecha_entrega" name="fecha_entrega" required>

            </div>
            

                <button id="BtnRegistrarPedido" type="submit">Registrar Pedido</button>


        </div>
        
        
    </form>
    
        <hr/>


    
</body>
</html>
=======
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Orden</title>
    <link rel="stylesheet" href="css/pedidos.css">
</head>
<body id=body>
    <h1 id=TituloRegistrodeOrden>Registro de Orden</h1>
    <div id=imgRegistroOrden>
        <img src="imagenes/RegistroOrden.png" 
                width="90"
                height="90"/>

    </div>
    <a href="index.php" class="enlace">
        <img id=imgReturn src="imagenes/return.png"
                width="40"
                height="40"
        />

    </a>
    
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

    <!---Formulario para el pedido-->
    <form action="guardar_pedido.php" method="post">
        <div id=formulario>
            <div id=NumerodePrendas>
                <label id=etiquetaNumerodePrendas>Numero de prendas:</label> 
                <input type="number" id="inputnumerodeprendas" name="numerodeprendas">

            </div>
            
            <div id=Prenda>
                <p>
                    <label id=etiquetaPrenda for="prenda">Prenda</label>
                    <input type="text" id="inputprenda" name="prenda" required>
                </p>
            </div>
            <div id=PrecioUnitario>

                    <label id=etiquetaPrecioUnitario for="precio_unitario">Precio Unitario</label>
                    <input type="number" id="inputprecio_unitario" name="precio_unitario" step="0.01" required>

            </div>

            <div id=Precio>

                <label id=etiquetaPrecio for="precio">Precio</label>
                <input type="number" id="inputprecio" name="precio">
            </div>

            <div id=Tipos>
                <label id=etiquetaTipodePrenda for="TiposdePrenda">Tipo de prenda</label>
                <input type="number" id="inputtipodeprenda" name="cantidad" required>

            </div>

            <div id=Total>
                <label id=etiquetaTotal for="total">TOTAL</label>
                <input type="number" id="inputtotal" name="total" step="0.01" readonly>

            </div>

            <div id=Fecha>
                <label id=etiquetaFechaEstimadadeEntrega for="fecha_entrega">Fecha Estimada de Entrega</label>
                <input type="date" id="inputfecha_entrega" name="fecha_entrega" required>

            </div>
            

                <button id="BtnRegistrarPedido" type="submit">Registrar Pedido</button>


        </div>
        
        
    </form>
    
        <hr/>


    
</body>
</html>
>>>>>>> fa5ffa37e03aee8eb18402c3c909c1d42bfd39d7
