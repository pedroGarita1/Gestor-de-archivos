<?php
    session_start();

    require_once "../../clases/Categorias.php";
    $CategoriaObj = new Categorias();

    $datos =array(
            "idUsuario" => $_SESSION['idUsuario'],
            "categoria" => $_POST['categoria']
                    );

    echo $CategoriaObj->agregarCategoria($datos);
?>