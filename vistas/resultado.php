<?php
session_start();
require_once '../clases/FiguraGeometrica.php';
require_once '../clases/Triangulo.php';
require_once '../clases/Cuadrado.php'; 
require_once '../clases/Rectangulo.php'; 
require_once '../clases/Circulo.php'; 


$figura = $_SESSION['figura'];

// Si no hay figura seleccionada, redirigimos al index
if (!$figura) {
    header('Location: index.php');
    exit;
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Cálculo</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <div id="resultado-final" class="contenedor-pagina">

        <h1>Resultado del Cálculo de la Figura</h1>
        
        <div class="tarjeta-resultado">

<?php


$clase_instanciada = null; 

if ($figura === 'triangulo') {
    $lado1 = ($_POST['lado1'] ?? 0);
    $lado2 = ($_POST['lado2'] ?? 0);
    $lado3 = ($_POST['lado3'] ?? 0);
    $clase_instanciada = new Triangulo($lado1, $lado2, $lado3);
    echo "<h2>Resultado del Triángulo:</h2>";

} elseif ($figura === 'cuadrado') {
    $lado = ($_POST['lado1'] ?? 0);
    $clase_instanciada = new Cuadrado($lado);
    echo "<h2>Resultado del Cuadrado:</h2>";

} elseif ($figura === 'rectangulo') {
    $lado1 = ($_POST['lado1'] ?? 0);
    $lado2 = ($_POST['lado2'] ?? 0);
    $clase_instanciada = new Rectangulo($lado1, $lado2);
    echo "<h2>Resultado del Rectángulo:</h2>";

} elseif ($figura === 'circulo') {
    $radio = ($_POST['lado1'] ?? 0); 
    $clase_instanciada = new Circulo($radio);
    echo "<h2>Resultado del Círculo:</h2>";
} 

if ($clase_instanciada) {
    echo "<div class='info-detalle'>";
    echo "<p>" . $clase_instanciada . "</p>";
    echo "</div>";
} else {
    echo "<div class='error-mensaje'>";
    echo "<h2>Error: Figura no válida.</h2>";
    echo "</div>";
}
?>

        </div> 
        <a href="formulario.php" class="btn-volver">Volver a calcular</a>
        <a href="./index.php">Vuelta al Index</a>
    </div> 
</body>
</html>