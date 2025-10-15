<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selecciona una figura geométrica</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src=./codigo.js></script>
</head>
<body>
    <h1> Elige una Figura Geométrica</h1>

    <form action="formulario.php" method="GET">
        <label for="figura">Elige una figura:</label>
        <select name="figura" id="figura" required>
            <option value="">Selecciona la Figura </option>
            <option value="triangulo">Triángulo</option>
            <option value="rectangulo">Rectángulo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="circulo">Círculo</option>
        </select>

        <br><br>
         
        <h3>Figuras Disponibles:</h3>
        <div class="galeria-figuras">
            <img src="../img/triangulo.png" alt="Triángulo" title="Triángulo">
            <img src="../img/rectangulo.png" alt="Rectángulo" title="Rectángulo">
            <img src="../img/cuadrado.png" alt="Cuadrado" title="Cuadrado">
            <img src="../img/circulo.png" alt="Círculo" title="Círculo">
        </div>
        <button type="submit">Continuar</button>
    </form>
</body>
</html>