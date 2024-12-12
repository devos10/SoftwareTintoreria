<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pedido</title>
</head>
<body>
    <h1>Registro de Pedido</h1>
    <form action="guardar_pedido.php" method="post">

        <label>Numero de prendas</label> 
        <input type="number" id="numerodeprendas" name="numerodeprendas">
        <p>
            <label for="prenda">Prenda</label>
            <input type="text" id="prenda" name="prenda" required>

            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" id="precio_unitario" name="precio_unitario" step="0.01" required>
        </p>

        <p>
            <label for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" required>

            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio">

        </p>
        

        <p>
            <label for="total">Total</label>
            <input type="number" id="total" name="total" step="0.01" readonly>
        </p>
        

        <label for="fecha_entrega">Fecha Estimada de Entrega</label>
        <input type="date" id="fecha_entrega" name="fecha_entrega" required>

        <button type="submit">Registrar Pedido</button>
    </form>
</body>
</html>
