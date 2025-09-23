<?php 

class Usuario {

    private $conn;
    public function __construct() {
        $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = $_ENV['USUARIO'];
        $senha = $_ENV['SENHA'];
        $this->conn = new PDO($dsn, $usuario, $senha); 
    }

    public function fnValidarUsuarioExistente( $usuario, $senha ) {
        $script = "SELECT * FROM tb_usuario WHERE usuario = :usuario AND senha = :senha";

        $dados = $this->conn->prepare($script);
        $dados->execute([
            ':usuario' => $usuario,
            ':senha' => $senha
        ]);

        $resultado = $dados->fetch();
        

        if (!empty($resultado)) {
            session_start();

            $script = "SELECT * FROM tb_docente WHERE id = {$resultado['docente_id']}";
            $docente = $this->conn->query($script)->fetch();

            $this->conn =

            $_SESSION['usuario_logado'] = false;
            $_SESSION['docente_id'] = '';
            $_SESSION['usuario_id'] = '';
            $_SESSION['usuario-tipo'] = '';

            $_SESSION['docente_id'] = '';
            $_SESSION['docente_nome'] = '';
            $_SESSION['docente_area'] = '';

            session_destroy();
        } else {
            return false;
        }}

        public function finUsuarioLogado(){
            if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] === true) {
                return true;
            } else {
                echo "<script>alert('Acesso negado! Faça login para continuar.');</script>";
                header("Location: ./index.php");
            }
        }


        public function fnDeslogarUsuario(){
            session_start();
            session_destroy();
            
        }


}

