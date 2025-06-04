<?php
// Simulación de un array de frutas
$list_fruits = [
    ['id' => '1', 'name' => 'Apple'],
    ['id' => '2', 'name' => 'Banana'],
    ['id' => '3', 'name' => 'Cherry'],
    ['id' => '4', 'name' => 'Dragon Fruit'],
    ['id' => '5', 'name' => 'Elderberry']
];

// Verificar si es una petición HTMX y si viene el fruit_id
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['fruit_id'])) {
    $fruit_id = $_GET['fruit_id'];
    $selected = array_filter($list_fruits, fn($f) => $f['id'] === $fruit_id);
    
    if ($selected) {
        $fruit = array_values($selected)[0];
        echo "<p>La fruta seleccionada: <strong>{$fruit['name']}</strong></p>";
    } else {
        echo "<p>Debes seleccionar una fruta</p>";
    }
    exit;
} 