<?php
/*session_start(); //Inicializa una sesión

 $_SESSION['nombre'] = 'Josefina';
$_SESSION['pais'] = 'Colombia'; */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Página de inicio</h1>

    <form action="registro.php" method="POST">
        <label for="user">User</label>
        <input type="text" placeholder="User" name="user">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Registro</button>
    </form>

    <a href="./user.php">User Page</a>
    <a href="./cerrar.php">Cerrar</a>

</body>

</html>