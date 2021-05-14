<?php
    session_start();
    require_once "../../clases/Gestor.php";
    $Gestor = new Gestor();
    
    $idCategoria = $_POST['categoriasArchivos'];
    $idUsuario = $_SESSION['idUsuario'];

    $totalArchivos = count($_FILES['archivos']['name']);

    for($i=0; $i < $totalArchivos; $i++){
        echo $_FILES['archivos']['name'][$i];
    }


?>