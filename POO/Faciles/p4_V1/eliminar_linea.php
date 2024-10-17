<?php
require_once 'Factura.php';
session_start();

// Verificar si hay una factura guardada en la sesión
if (isset($_SESSION['factura'])) {
    $factura = $_SESSION['factura'];
    $indice = $_POST['indice'];

    // Eliminar la línea de la factura
    $factura->eliminarLineaFactura($indice);

    // Guardar la factura actualizada en la sesión
    $_SESSION['factura'] = $factura;

    // Mostrar la factura actualizada
    echo $factura;
} else {
    echo "No hay factura disponible para eliminar líneas.";
}
?>