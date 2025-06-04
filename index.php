<?php
// Simulación de un array de frutas
$list_fruits = [
    ['id' => '1', 'name' => 'Apple'],
    ['id' => '2', 'name' => 'Banana'],
    ['id' => '3', 'name' => 'Cherry'],
    ['id' => '4', 'name' => 'Dragon Fruit'],
    ['id' => '5', 'name' => 'Elderberry']
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Capturar el valor de una lista select HTML con HTMX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/htmx.org@1.9.5"></script>
</head>

<body class="bg-light p-5">

    <div class="container">
        <h2 class="mb-4">Seleccione una Fruta 🍎</h2>

        <div class="row">
            <div class="col-md-4">
                <label for="fruit_select" class="form-label">Frutas</label>
                <select class="form-select"
                    id="fruit_select"
                    name="fruit_id"
                    hx-get="get_fruit.php"
                    hx-target="#fruit_result"
                    hx-trigger="change"
                    hx-swap="innerHTML"
                    hx-include="[name='fruit_id']">
                    <option value="">Selecciona tu fruta favorita</option>
                    <?php foreach ($list_fruits as $fruit): ?>
                        <option value="<?= $fruit['id'] ?>"><?= $fruit['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-md-8 border" id="fruit_result" style="margin-top: 2rem;">
                <!-- Aquí aparecerá el resultado -->
            </div>
        </div>
    </div>

</body>

</html>