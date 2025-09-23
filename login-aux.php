<?php

require './config.php';
require './class/usuario.php';

if($_SERVER['REQUEST_METHOD'] = 'POST' && $_POST['login'] = 1){

    
    $user = $_POST['usuario'];
    $password = $_POST['senha'];
    
    $usuario = new Usuario();
    
    $autorizado = $usuario->fnvalidarUsuarioExistente($user,$password);
    
    if ($autorizado){
        
        header('location:./reserva.php');
    }
    else{
        
        echo'<h1>Usuario ou senha invalido</h1>';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_GET['sair'] == 1){

    $usuario = new Usuario();
    $usuario->fnDeslogarUsuario();
    header('location./');
}