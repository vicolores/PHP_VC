<?php
require_once 'factura.php';
session_start();

// Verificar si hay una factura guardada en la sesión
if (isset($_SESSION['factura'])) {
    $factura = $_SESSION['factura'];
    // Mostrar la factura
    echo $factura;
} else {
    echo "No hay factura disponible para mostrar.";
}
?>