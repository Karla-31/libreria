<?php
// Simular datos de ventas por mes
$labels = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio"];
$values = [1000, 1500, 1200, 1800, 2000, 1600];

// Convertir los datos a formato JSON
$data = [
    'labels' => $labels,
    'values' => $values
];

// Devolver los datos como JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
