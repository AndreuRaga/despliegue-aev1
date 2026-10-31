<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victoria</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>¡Enhorabuena! Has ganado :)</h1>
    <p>La palabra era: <?php echo $_SESSION['palabra']; ?></p>
    <a href="index.php">Jugar de nuevo</a>
</body>
</html>

<?php
session_destroy();
?>