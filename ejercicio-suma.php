<?php
// Incluye la librería donde se define la función suma
include("libreria.php");

// Variables de inicialización
$n1 = 0;
$n2 = 0;
$suma = 0;  // Inicializamos la variable $suma

// Verificar si se presionó el botón de calcular
if (isset($_REQUEST['btnCalcular'])) {
    $n1 = $_REQUEST['n1'];
    $n2 = $_REQUEST['n2'];
    
    // OPERACIÓN: Usamos la función suma() correctamente
    $suma = suma($n1, $n2);  // Aquí llamamos la función suma con ambos parámetros
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario de Suma</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Formulario para Sumar dos Números</h2>
        <form action="php_009.php" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="n1" class="form-label">Número 1</label>
                <input type="number" id="n1" name="n1" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="n2" class="form-label">Número 2</label>
                <input type="number" id="n2" name="n2" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="suma" class="form-label">Suma</label>
                <!-- El valor de la suma se mostrará aquí después de presionar el botón -->
                <input type="number" id="suma" name="suma" class="form-control" disabled value="<?php echo $suma; ?>">
            </div>
            
            <button type="submit" class="btn btn-primary" name="btnCalcular">Calcular</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
