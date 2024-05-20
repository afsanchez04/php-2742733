<?php

//leer: functions PHP en w3School
echo "ejecutando.php";

//crear una función que me diga si una persona es mayor o menor de edad

function validarEdad($edad)
{
    if ($edad && $edad >= 18) {
        echo "<br> mayor de edad";
    } else if ($edad && $edad < 18) {
        echo "<br> menor de edad";
    }else {
        echo "<br> no se que decir";
    }
}
//Llamado de la función
//validarEdad(12); //??? 
validarEdad( isset($_POST['edad']) ? $_POST['edad'] : null );

//Operador ternario: abreviación del if, else
// condición ? true : f

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>

<body style="background-color: #232323; color: white;">

    <h1>Funciones PHP 🤖</h1>

    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="POST">
        <label for="edad">Edad</label>
        <input type="number" name="edad" id="edad">
        <button type="submit">Validar edad</button>
    </form>

</body>

</html>