<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
</head>
<body>
    <h1>Introducir datos para la factura</h1>
    <form action="procesarFactura.php" method="post">
        <label for="precioUnidad">Precio por unidad (€):</label>
        <input type="number" step="0.01" id="precioUnidad" name="precioUnidad" required><br><br>

        <label for="numUnidades">Número de unidades:</label>
        <input type="number" id="numUnidades" name="numUnidades" required><br><br>

        <label for="iva">IVA (%):</label>
        <input type="number" id="iva" name="iva" value="21" required><br><br>

        <label for="descuento">Descuento (%):</label>
        <input type="number" id="descuento" name="descuento" value="0" required><br><br>

        <button type="submit">Agregar a la factura</button>
    </form>
</body>
</html>