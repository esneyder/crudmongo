<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>
<?php

// conectar
$m = new MongoClient('mongodb://admin:alvarez@ds052827.mongolab.com:52827/miblog');

// seleccionar una base de datos
$bd = $m->miblog;

// seleccionar una colección (equivalente a una tabla en una base de datos relacional)
$colección = $bd->usuario;

// añadir un registro
$documento = array( "usuario" => "yidary", "pasword" => "yei123" );

$colección->insert($documento);
 

// encontrar todo lo que haya en la colección
$cursor = $colección->find();
//mostrar la cantidad de registros de la base de datos
//$totalregistros=$cursor->count();


//actualizar registros de la base de datos
//PUBLIC BOOL MONGOCOLLECTION::UPDATE()$CRITERIA,$NEWOBJ,$OPTION)
//CRITERIA---- array, con documento a actualizar
//NEWOBj--array, documento que se va a sustituir por el viejo
//OPTION---argumentos opcinanales

//die("total registros".$totalregistros);
// recorrer el resultado
foreach ($cursor as $documento) {
    echo $documento["_id"]. " ". $documento["nombre"] . $documento["pasword"]."<br>";
}

?>