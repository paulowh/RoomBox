<?php
require'./config.php';
require'./class/usuario.php';

if($_SERVER['REQUEST_METHOD'] = 'POST' && $_POST[$login] ){}


$usuario = new usuario();
var_dump($_POST);

$user = $_POST['usuario'];
$password = $_POST['senha'];
$autorizado =$usuario->fnValidarUsuarioExistente($user, $password);


$usuario = new usuario();
$usuario->fnValidarUsuarioExistente($user, $password);
if($autorizado){
    echo "<script>alert('usuario logado com sucesso!')</script>";
}else{
    echo "<script>
    alert('usuario ou senha invalido')
    </script>";
    
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && ($_GET['SAIR'] == 1)){
    
}
 
?>