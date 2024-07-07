<?php
$servername = getenv('MYSQL_HOST') ?: "db";
$username =getenv('MYSQL_USER') ?: "testuser";
$password = getenv('MYSQL_PASSWORD') ?:"testpassword";
$dbname =getenv('MYSQL_DATABASE') ?: "testdb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo en PHP</title>
    <style>
        /* Estilo CSS básico */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            margin-top: 100px;
        }
        .mensaje {
            font-size: 24px;
            color: #333;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="mensaje">
        <?php
        // Código PHP para imprimir "Hola Mundo"
        echo "¡Hola Mundo!";
        ?>
    </div>
</body>
</html>
