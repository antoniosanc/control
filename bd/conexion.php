<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "ec2544servicio_stice28";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");

    $mysqli = new mysqli('localhost', 'root', '', 'ec2544servicio_stice28');

    class Database{

        private $hostname  = "localhost";
        private $database  = "ec2544servicio_stice28";
        private $username  = "root";
        private $password = "";
        private $charset = "utf8";

        function conectar()
        {
            try{
            $conexion1 = "mysql:host=".$this->hostname."; dbname=".$this->database."; charset=".$this->charset;
            $options =[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES =>  false
            ];
            $pdo  = new PDO($conexion1, $this->username, $this->password, $options);

            return $pdo;
            } catch(PDOException $e){
                echo "Error conexion".$e->getMessage();
                exit;
            }
        }
    }
    
?>