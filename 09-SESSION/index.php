<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

    //Para verificar que se envíen todos los datos
    if (empty($usuario) or empty($password)) {
        echo 'Rellene completo el formulario';
    } else {

        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "Conexión OK";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        $statement = $conexion->prepare("SELECT * FROM `usersapp` WHERE username = :user AND password = :pass");

        $statement->execute(array(':user' => $usuario, ':pass' => $password));

        $result = $statement->fetch();

        if ($result) {
            echo 'true';
            $_SESSION['userRegister'] = $usuario;
            $_SESSION['passRegister'] = $password;
            header('Location: user.php');
        } else {echo 'false';}


        /* if( count($result) ){
            echo 'usuario encontrado';
            print_r($result);
        }else{
            echo 'no se encontró user';
        } */



        /*  foreach ($result as $item) {
            print_r($result);
        } */

        //echo $usuario . ' - ' . $password;
        /* if( $usuario == $user_register && $password == $pass_register ){
            echo 'listo, iniciaste sesión 😊';
            header('Location: user.php');
        }else{
            echo 'Tu usuario no existe 😖';
        } */
    }
}

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

    <form action="index.php" method="POST">
        <label for="user">User</label>
        <input type="text" placeholder="User" name="user">
        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Inicio sesión</button>
    </form>

    <a href="./registro.php">Registrate</a>


</body>

</html>