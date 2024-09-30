<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $destino_hotel = $_POST['destino_hotel'] ?? 'No especificado';
    $fecha_inicio = $_POST['fecha_inicio'] ?? 'No especificada';
    $fecha_fin = $_POST['fecha_fin'] ?? 'No especificada';

    // Simulamos algunos resultados de búsqueda de hoteles
    $resultados_hoteles = [
        [
            "nombre" => "Hotel Plaza",
            "ubicacion" => "Centro de la ciudad",
            "habitaciones_disponibles" => 5,
            "precio" => "$100 por noche"
        ],
        [
            "nombre" => "Hotel Sol",
            "ubicacion" => "Cerca de la playa",
            "habitaciones_disponibles" => 3,
            "precio" => "$150 por noche"
        ],
        [
            "nombre" => "Hotel Luna",
            "ubicacion" => "Barrio histórico",
            "habitaciones_disponibles" => 2,
            "precio" => "$120 por noche"
        ]
    ];

    echo "<h1>Resultados de la búsqueda de hoteles</h1>";
    echo "<p>Hoteles en $destino_hotel</p>";
    echo "<p>Fecha de inicio: $fecha_inicio</p>";
    echo "<p>Fecha de fin: $fecha_fin</p>";

    echo "<h2>Hoteles disponibles:</h2>";
    foreach ($resultados_hoteles as $hotel) {
        echo "<div style='border: 1px solid #ccc; margin-bottom: 10px; padding: 10px;'>";
        echo "<p><strong>Nombre:</strong> {$hotel['nombre']}</p>";
        echo "<p><strong>Ubicación:</strong> {$hotel['ubicacion']}</p>";
        echo "<p><strong>Habitaciones disponibles:</strong> {$hotel['habitaciones_disponibles']}</p>";
        echo "<p><strong>Precio:</strong> {$hotel['precio']}</p>";
        echo "</div>";
    }
} else {
    echo "<p>Por favor, envía el formulario.</p>";
}
?>
