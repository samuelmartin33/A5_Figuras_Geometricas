<?php
session_start();
require_once '../clases/FiguraGeometrica.php';
require_once '../clases/Triangulo.php';
require_once '../clases/Cuadrado.php'; 
require_once '../clases/Rectangulo.php'; 


$figura = $_SESSION['figura'] ?? null;

// Si no hay figura seleccionada, redirigimos al index
if (!$figura) {
    header('Location: index.php');
    exit;
}


if ($figura === 'triangulo') {
    
    $lado1 = ($_POST['lado1'] ?? 0);
    $lado2 = ($_POST['lado2'] ?? 0);
    $lado3 = ($_POST['lado3'] ?? 0);
    

    $triangulo = new Triangulo($lado1, $lado2, $lado3);
    

    echo "<h2>Resultado del Triángulo:</h2>";
    echo "<p>" . $triangulo . "</p>";

}elseif ($figura === 'cuadrado') {
    
    $lado = ($_POST['lado1'] ?? 0);
    
    $cuadrado = new Cuadrado($lado);
    
    echo "<h2>Resultado del Cuadrado:</h2>";
    echo "<p>" . $cuadrado . "</p>";

}elseif ($figura === 'rectangulo') {
    
    $lado1 = ($_POST['lado1'] ?? 0);
    $lado2 = ($_POST['lado2'] ?? 0);

    
    $rectangulo = new Rectangulo($lado1, $lado2);
    
    echo "<h2>Resultado del Rectangulo:</h2>";
    echo "<p>" . $rectangulo . "</p>";

}
?>


<p><a href="formulario.php">Volver a calcular</a></p>