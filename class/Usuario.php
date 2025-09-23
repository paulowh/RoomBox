<?php


class Usuario
{

    private $conn; //-> variavel de conexao

    public function __construct()
    {

        $dns = "mysql:dbname={$_ENV['BANCO']};host={$_ENV['HOST']}";
        $usuario = $_ENV['USUARIO'];
        $senha = $_ENV['SENHA'];

        $this->conn = new PDO($dns, $usuario, $senha);
    }

    public function fnValidarUsuarioExistente($usuario, $senha)
    {
        $script = 'SELECT * FROM tb_usuario WHERE usuario = :usuario AND senha = :senha';

        $dados = $this->conn->prepare($script);
        $dados->execute([
            ':usuario' => $usuario,
            ':senha' => $senha
        ]);

        $resultado = $dados->fetch();


        if (!empty($resultado)) {

            session_start(); //-> iniciar a sessao

            $script = "SELECT * FROM tb_docente WHERE id = {$resultado['docente_id']}";

            $docente = $this->conn->query($script)->fetch();

            $_SESSION['usuario_logado'] = true;
            $_SESSION['usuario_id'] = $resultado['id'];
            $_SESSION['usuario_tipo'] = $resultado['nivel_adm'];

            $_SESSION['docente_id'] = $resultado['docente_id'];
            $_SESSION['docente_nome'] = $docente['nome'];
            $_SESSION['docente_area'] = $docente['area'];

            return true;
        } else {
            return false;
        }
    }

    public function fnUsuarioLogado()
    {
        if (isset($_SESSION) && !empty($_SESSION) && $_SESSION == true) {
            return true;
        } else {
            echo "<script>
                alert('Acesso Negado')
                window.location.href='./index.php'
            </script>";
        }
    }


    public function fnDeslogarUsuario()
    {
        $_SESSION['usuario_logado'] = false;
        $_SESSION['usuario_id'] = '';
        $_SESSION['usuario_tipo'] = '';

        $_SESSION['docente_id'] = '';
        $_SESSION['docente_nome'] = '';
        $_SESSION['docente_area'] = '';

        session_destroy();
    }
}
