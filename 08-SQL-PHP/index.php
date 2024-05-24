
<?php

try {
    $conexion = new PDO("mysql: host=localhost; dbname=colegio",'root','');
    echo "Conexión OK";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$nombre = 'Alberto'; 
$estado = 'Soltero'; 
$materia = 'Deportes'; 
$edad = 14;
$documento = 122345; 

//Vamos a preparar una sentencia SQL y la guardamos en una variable

$statement = $conexion->prepare(" INSERT INTO `profesores` (`ID`, `Nombre`, `Edad`, `Estado civil`, `Materia`, `Documento`) VALUES (NULL, :nombre, :edad, :estado, :materia, :documento) ");

//ejecutar el statement
$statement->execute( array(":nombre"=>$nombre,":edad"=>$edad,":estado"=>$estado,":materia"=>$materia,":documento"=>$documento) );

//fetch() regresa solo un resultado        fetchAll() regresa todos los resultados
$statement = $statement->fetchAll();

//print_r($statement);

foreach ($statement as $item) {
    echo $item['ID'] . ' - ' . $item['Nombre'] . '<br>';
}







?>