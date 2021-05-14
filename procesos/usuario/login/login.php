<?php
    session_start();
    require_once "../../../clases/Usuario.php";
    $usuario = $_POST['login'];
    $password = sha1($_POST['password']);

    $usuairoObjeto = new Usuario();

    echo $usuairoObjeto->login($usuario,$password);
?>