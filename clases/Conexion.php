<?php

    class Conectar{
        public function conexion(){
            $host="127.0.0.1";
            $port=3306;
            $socket="";
            $user="root";
            $password="";
            $dbname="gestor";

            $conexion = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
            $conexion->set_charset('utf8mb4');
            return $conexion;

                

            //$con->close();

        }
    }
?>