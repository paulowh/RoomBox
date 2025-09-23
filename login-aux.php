<?php 
require './class/usuario.php';
require './config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' && $_POST['login'] == '1') {
    
    var_dump($_POST);
    
    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    
    $usuario = new Usuario();
    $autorizado = $usuario->fnValidarUsuarioExistente($user, $password);
    
    if ($autorizado) {
        echo "<script>alert('Usuário logado com sucesso!');</script>";
        header("Location: ./reserva.php");
    } else {
        echo "<script>alert('Usuário ou senha inválidos!');</script>";
        // header("Location: ./index.php?erro=1");
    }
} 

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['sair'] == '1') {
    $usuario = new Usuario();
    $usuario->fnDeslogarUsuario();
}