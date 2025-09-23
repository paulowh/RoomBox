<?php

require './config.php';
require './class/Usuario.php'; //->o arquivo só vai carregar se o arquivo estiver certo

$usuario = new Usuario();

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['login'] == 1) {

    $user = $_POST['usuario'];
    $password = $_POST['senha'];


    $autorizado = $usuario->fnValidarUsuarioExistente($user, $password);

    if ($autorizado) {
        echo 'Usuario validado com sucesso !';
        header('location:./reserva.php');
    } else {

        echo "<script>
        alert('Usuario e senha invalidos !');
    </script>";
    }
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['sair'] == 1){
    session_destroy();
    header('location:./');

    $usuario = new Usuario();
    $usuario->fnDeslogarUsuario();
}