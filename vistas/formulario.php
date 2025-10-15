<?php
session_start();

if (isset($_GET['figura'])) {
    $_SESSION['figura'] = $_GET['figura'];
}

$figura = $_SESSION['figura'] ?? null;

// Si no hay figura seleccionada, redirigimos al index
if (!$figura) {
    header('Location: index.php');
    exit;
}

// Recuperamos valores anteriores si el usuario vuelve atrás
$lado1 = $_SESSION['lado1'] ?? '';
$lado2 = $_SESSION['lado2'] ?? '';
$lado3 = $_SESSION['lado3'] ?? '';

// **NOTA IMPORTANTE:**
// Para que se vea bien, la imagen debe llamarse igual que la variable $figura
// (ej. cuadrado.png, triangulo.png) y estar en la carpeta '../img/'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Introduce los datos de la figura</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/validaciones.js" defer></script>
</head>
<body>
    <div class="contenedor-pagina"> 

        <div class="header-figura-container">
            <img src="../img/<?= htmlspecialchars($figura) ?>.png" 
                 alt="Imagen de <?= htmlspecialchars($figura) ?>" 
                 class="imagen-figura">
            
            <div class="titulo-figura">
                <h1>Figura seleccionada:</h1>
                <h2><?= htmlspecialchars($figura) ?></h2>
            </div>
        </div>
        <form action="resultado.php" method="post" id="form-figura">

            <?php if ($figura === 'triangulo'): ?>
                <h3>El triangulo que pongas solo puedes ser isósceles o rectángulo</h3>
                <p> 
                    Un triangulo isósceles es un triangulo con dos lados iguales y uno diferente.<br>
                    Un triangulo rectángulo es un triangulo con un lado recto (90º).<br>
                    Un triangulo equilatero es un triangulo que tiene todos los lados iguales<br>
                </p>
                <div class="formulario-grupo">
                    <label>Lado 1:</label>
                    <input type="number" name="lado1" id="lado1" value="<?= $lado1 ?>" step="0.01" required>
                </div>

                <div class="formulario-grupo">
                    <label>Lado 2:</label>
                    <input type="number" name="lado2" id="lado2" value="<?= $lado2 ?>" step="0.01" required>
                </div>

                <div class="formulario-grupo">
                    <label>Lado 3:</label>
                    <input type="number" name="lado3" id="lado3" value="<?= $lado3 ?>" step="0.01" required>
                </div>

            <?php elseif ($figura === 'rectangulo'): ?>
                <div class="formulario-grupo">
                    <label>Lado 1:</label>
                    <input type="number" name="lado1" id="lado1" value="<?= $lado1 ?>" step="0.01" required>
                </div>

                <div class="formulario-grupo">
                    <label>Lado 2:</label>
                    <input type="number" name="lado2" id="lado2" value="<?= $lado2 ?>" step="0.01" required>
                </div>

            <?php elseif ($figura === 'cuadrado'): ?>
                <div class="formulario-grupo">
                    <label>Lado:</label>
                    <input type="number" name="lado1" id="lado1" value="<?= $lado1 ?>" step="0.01" required>
                </div>

            <?php elseif ($figura === 'circulo'): ?>
                <div class="formulario-grupo">
                    <label>Radio:</label>
                    <input type="number" name="lado1" id="lado1" value="<?= $lado1 ?>" step="0.01" required>
                </div>
            <?php endif; ?>

            <br>
            <button type="submit">Calcular</button>
            <a href="./index.php">Vuelta al Index</a>
        </form>
    </div>
</body>
</html>