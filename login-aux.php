<?php
require './config.php';
require './class/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['login'] == 1) {
    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    $usuario = new Usuario();

    $autorizado = $usuario->fnValidarUsuarioExistente($user, $password);

    if ($autorizado) {
        echo "<h1>Usuario validado com sucesso!</h1>";
        header('location:./reserva.php');
    } else {
        echo "<h1>Usuario ou Senha invalidos!</h1>";
        // echo "<script>alert('Usuario ou Senha Invalido!')</script>";
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['sair'] == 1) {
    $usuario = new Usuario();
    $usuario->fnDeslogarUsuario();
    header('location:./');
}
