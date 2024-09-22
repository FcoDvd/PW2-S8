<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha_ida = $_POST['fecha_ida'];
    $fecha_vuelta = $_POST['fecha_vuelta'];
    $tipo_viaje = $_POST['tipo_viaje'];

    // Simulamos algunos resultados de búsqueda
    $resultados = [
        [
            "aerolinea" => "AeroMéxico",
            "precio" => "$300",
            "horario" => "10:00 AM - 12:00 PM"
        ],
        [
            "aerolinea" => "Volaris",
            "precio" => "$250",
            "horario" => "2:00 PM - 4:00 PM"
        ],
        [
            "aerolinea" => "Interjet",
            "precio" => "$280",
            "horario" => "6:00 PM - 8:00 PM"
        ]
    ];

    // Devolvemos los resultados como JSON
    header('Content-Type: application/json');
    echo json_encode($resultados);
}
?>