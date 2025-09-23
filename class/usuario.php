<?php
class usuario
{

    private $conn;
    public function __construct()
    {

        $dsn = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = $_ENV['USUARIO'];
        $senha = $_ENV['SENHA'];
        $this->conn = new PDO($dsn, $usuario, $senha);
    }

    public function fnValidarUsuarioExistente($usuario, $senha)
    {
        $script = 'SELECT * FROM tb_usuario WHERE usuario = :usuario AND senha = :senha';

        $stmt = $this->conn->prepare($script);
        $stmt->execute(
            [
                ':usuario' => $usuario,
                ':senha' => $senha
            ]
        );
        $resultado = $stmt->fetchAll();



        if (!empty($resultado)) {
            session_start();
            $script = "SELECT * FROM tb_docente WHERE id = {$resultado['docente_id']}";
            $docente = $this->conn->query($script)->fetch();

            $_SESSION['usuario logado'] = true;
            $_SESSION['usuario_id'] = $resultado['id'];
            $_SESSION['usuario_tipo'] = $resultado['nivel_adm'];


            $_SESSION['docente_id'] = $resultado['docente_id'];
            $_SESSION['docente_nome'] = $docente['nome'];
            $_SESSION['docente_area'] = $docente['area     '];



            var_dump($_SESSION);
            return true;
        } else {
            return false;
        }
    }
    public function fnUsuariologado()
    {
        if (isset($_SESSION) && !empty($_SESSION) && isset($_SESSION['usuario logado']) && $_SESSION['usuario logado'] == true) {
            return true;
        } else {
            echo "<script>alert('Acesso negado! É necessário estar logado para acessar essa página.');window.location.href='index.php';</script>";
        }
    }

    public function fnDesclogarUsuario(){

        $_SESSION['usuario logado'] = false;
        $_SESSION['usuario_id'] = '';
        $_SESSION['usuario_tipo'] = '';
    }
 
}
