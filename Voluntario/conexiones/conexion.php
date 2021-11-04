
<?php

    $servername = "localhost";
    $username = "root";
    $passw = "";
    $dbname = "mydb";
    $conex = new PDO('mysql:host=localhost;dbname=mydb', 'root','');
    
    
    function conectarbd(){
        $servername = "localhost";
        $username = "root";
        $passw = "";
        $dbname = "mydb";
        $conex = new PDO('mysql:host=localhost;dbname=mydb', 'root','');
        if(!$conex){
            die("conexion fallida: ");
        }
        
    }    
    
?>


<?php
	$database="mydb";
	$user='root';
	$password='';


try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}
