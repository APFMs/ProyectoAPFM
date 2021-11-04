<?php
	// Conectamos con la base de datos
	$servername = "localhost";
    $username = "root";
    $passw = "";
    $dbname = "adop";
	try {
		$conex = new PDO('mysql:host='.$servername.';dbname='.$dbname.';charset=utf8', $username, $passw);

		// establecemos que el manejo de errores será mediante excepciones
		$conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//establecemos que no debe emular instrucciones prepare automáticamente.
		$conex->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		//Ejemplos uso
		//$stmt = $conex->prepare("SELECT * FROM usuario WHERE rol=:roles");
		//$stmt->execute( array(':roles' => 'administrador') );
		//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	} catch(PDOException $ex) {
		echo "Ocurrió un error<br>";
		echo $ex->getMessage();
		exit;
	}
/*
	echo '<ul>';
	foreach ($rows as $row) {
		echo '<li>'.$row['id'].' : ('.$row['rol'].') '.$row['nombre'].'</li>';
	}
	echo '</ul>';
*/
?>




