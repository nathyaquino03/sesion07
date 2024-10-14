<?php 
class Triangulo {
    public static function areaTrianguloRecursivo($base, $altura, $veces, $acumulado = 0) {
        if ($veces == 0) {
            return $acumulado;
        } else {
            $areaActual = ($base * $altura) / 2;
            return self::areaTrianguloRecursivo($base, $altura, $veces - 1, $acumulado + $areaActual);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Formulario area areaTrianguloRecursivo</title>
</head>
<body>
<h1>Calculadora del Área de un Triángulo</h1>
    
    <form action="calcular_area.php" method="POST">
        <label for="base">Base del triángulo:</label>
        <input type="number" id="base" name="base" required><br><br>
        
        <label for="altura">Altura del triángulo:</label>
        <input type="number" id="altura" name="altura" required><br><br>

        <input type="submit" value="Calcular Área">
    </form>
</body>
</html>
  