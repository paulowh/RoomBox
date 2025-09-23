<?php
require './config.php';
require './class/Usuario.php';

$usuario = new Usuario();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['login'] == 1) {

    $user = $_POST['usuario'];
    $password = $_POST['senha'];

    $autorizado = $usuario->fnValidarUsuarioExistente($user, $password);

    if ($autorizado) {
        echo "Usuario Válidado com sucesso";
        header("location: ./reserva.php");
    } else {
        echo "<script>
        alert('Usuario ou senha Inválida')
        </script>";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['sair'] == 1){
    
    $usuario = new Usuario();
    $usuario->fnDeslogarUsuario();
    
}