<?php
require 'includes/funciones.php';
//echo "desde servicios";

$servicios = obtenerServicios();

echo json_encode($servicios);