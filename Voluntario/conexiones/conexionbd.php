
<?php

    $servername = "localhost";
    $username = "root";
    $passw = "";
    $dbname = "mydb";
    $conex = mysqli_connect($servername,$username,$passw,$dbname);
    
    //$conex = mysqli_connect($servername,$username,$passw,$dbname);
/*
    function conectarbd(){
        $servername = "localhost";
        $username = "root";
        $passw = "halo123++";
        $dbname = "mydb";
        $conex = mysqli_connect($servername,$username,$passw,$dbname);
        if(!$conex){
            die("conexion fallida: ".mysqli_connect_error());
        }
    }
    */
    function conectarbd(){
        $servername = "localhost";
        $username = "root";
        $passw = "";
        $dbname = "mydb";
        $conex = mysqli_connect($servername,$username,$passw,$dbname);
        if(!$conex){
            die("conexion fallida: ");
        }
        
    }
    
    //$conex = new PDO('mysql:host=$servername;dbname=$dbname','$username','$passw');
?>

