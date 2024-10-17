<?php
require_once 'factura.php';
session_start();

// Obtener los valores del formulario
$precioUnidad = $_POST['precioUnidad'];
$numUnidades = $_POST['numUnidades'];
$iva = $_POST['iva'];
$descuento = $_POST['descuento'];

// Crear o recuperar la factura de la sesión
if (!isset($_SESSION['factura'])) {
    $_SESSION['factura'] = new Factura($iva, $descuento);
}
$factura = $_SESSION['factura'];

// Agregar la línea proporcionada por el usuario
$factura->agregarLineaFactura($precioUnidad, $numUnidades);

// Guardar la factura en la sesión
$_SESSION['factura'] = $factura;

// Mostrar la factura
echo $factura;
