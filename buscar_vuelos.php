<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'] ?? 'No especificado';
    $destino = $_POST['destino'] ?? 'No especificado';
    $fecha_ida = $_POST['fecha_ida'] ?? 'No especificada';
    $fecha_vuelta = $_POST['fecha_vuelta'] ?? 'No especificada';
    $tipo_viaje = $_POST['tipo_viaje'] ?? 'No especificado';

    // Simulamos algunos resultados de búsqueda
    $resultados = [
        [
            "aerolinea" => "AeroMéxico",
            "precio" => "$300",
            "horario_salida" => "10:00 AM",
            "horario_llegada" => "12:00 PM",
            "duracion" => "2h 00m"
        ],
        [
            "aerolinea" => "Volaris",
            "precio" => "$250",
            "horario_salida" => "2:00 PM",
            "horario_llegada" => "4:30 PM",
            "duracion" => "2h 30m"
        ],
        [
            "aerolinea" => "Interjet",
            "precio" => "$280",
            "horario_salida" => "6:00 PM",
            "horario_llegada" => "8:15 PM",
            "duracion" => "2h 15m"
        ]
    ];

    echo "<h1>Resultados de la búsqueda</h1>";
    echo "<p>Vuelos de $origen a $destino</p>";
    echo "<p>Fecha de ida: $fecha_ida</p>";
    if ($fecha_vuelta != 'No especificada') {
        echo "<p>Fecha de vuelta: $fecha_vuelta</p>";
    }
    echo "<p>Tipo de viaje: $tipo_viaje</p>";

    echo "<h2>Vuelos disponibles:</h2>";
    foreach ($resultados as $vuelo) {
        echo "<div style='border: 1px solid #ccc; margin-bottom: 10px; padding: 10px;'>";
        echo "<p><strong>Aerolínea:</strong> {$vuelo['aerolinea']}</p>";
        echo "<p><strong>Precio:</strong> {$vuelo['precio']}</p>";
        echo "<p><strong>Salida:</strong> {$vuelo['horario_salida']}</p>";
        echo "<p><strong>Llegada:</strong> {$vuelo['horario_llegada']}</p>";
        echo "<p><strong>Duración:</strong> {$vuelo['duracion']}</p>";
        echo "</div>";
    }
} else {
    echo "<p>Por favor, envía el formulario.</p>";
}
?>