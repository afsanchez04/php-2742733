<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sesión finalizada</h1>
    <a href="./user.php">User Page</a>
    <a href="./index.php">Iniciar sesión</a>
</body>
</html>