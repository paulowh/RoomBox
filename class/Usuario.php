<?php

class Usuario {
    
    private $conn;

    public function __construct()
    {
        $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = $_ENV['USUARIO'];
        $senha =$_ENV['SENHA'];
        $this->conn = new PDO($dsn, $usuario, $senha);    
    }

public function fnvalidarUsuarioExistente($usuario, $senha)
    {
        $script = 'SELECT * FROM tb_usuario WHERE usuario = :usuario AND senha = :senha';

        $dados = $this->conn->prepare($script);
        $dados->execute([

            ':usuario' => $usuario,
            ':senha' => $senha
        ]);

        $resultado = $dados->fetch();
        
        
        if (!empty ($resultado)) {
            session_start(); //armazenar quem acessou o nosso sistema

            $script = "SELECT * FROM tb_docente WHERE id = {$resultado['docente_id']}";

            $docente = $this->conn->query($script)->fetch();


            $_SESSION['usuario_logado'] = true;
            $_SESSION['docente_id'] = $resultado['docente_id'];
            $_SESSION['usuario_id'] = $resultado['id'];
            $_SESSION['tipo_usuario'] = $resultado['nivel_adm'];

            $_SESSION['docente_id'] = $resultado['docente_id'];
            $_SESSION['docente_nome'] = $docente['nome'];
            $_SESSION['docente_area'] = $docente['area'];


            return true;
    } else {
        return false;
    }
}

public function fnUsuarioLogado(){
    
    if (isset($_SESSION) && !empty($_SESSION) && $_SESSION['usuario_logado'] == true) {
        return true; 
    }  else{
        echo "<script>
            alert('Acesso NEGADO')
            window.location.href = './index.php'
        </script>";
    
    } 
    
}


public function fnDeslogarUsuario(){

    session_start();
    
    session_destroy();

}

}



