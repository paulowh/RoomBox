<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomBox - Login</title>

    <link rel="shortcut icon" href="./img/icon.png" type="image/png">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card login-card border-0 rounded-4">
                    <div class="card-body p-5">
                        <!-- Logo e Título -->
                        <div class="text-center mb-4">
                            <h1 class="display-4 fw-bold brand-logo mb-2">RoomBox</h1>
                            <p class="text-muted mb-4">Sistema de Gerenciamento de Salas</p>
                        </div>

                        <!-- Formulário de Login -->
                        <form action="./login-aux.php" method="POST" id="loginForm">
                        <!--campo paara ativar a validação do arquivo-->
                            <!-- Campo Email/Usuário -->
                            <div class="form-floating mb-3">
                                <input type="text"
                                    class="form-control form-control-lg"
                                    id="usuario"
                                    name="usuario"
                                    placeholder="Digite seu usuário"
                                    required>
                                <label for="usuario">
                                    <i class="bi bi-person me-2"></i>Usuário
                                </label>
                            </div>

                            <!-- Campo Senha -->
                            <div class="form-floating mb-4">
                                <input type="password"
                                    class="form-control form-control-lg"
                                    id="senha"
                                    name="senha"
                                    placeholder="Digite sua senha"
                                    required>
                                <label for="senha">
                                    <i class="bi bi-key me-2"></i>Senha
                                </label>
                            </div>

                            <!-- Botão Entrar -->
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary btn-lg btn-login">
                                    <i class="bi bi-box-arrow-in-right me-2"></i>
                                    Entrar no Sistema
                                </button>
                            </div>

                            <!-- Botão Cadastrar Usuário -->
                            <div class="d-grid mb-3">
                                <a href="./usuario.php" class="btn btn-outline-primary btn-lg">
                                    <i class="bi bi-person-plus me-2"></i>
                                    Cadastrar Usuário
                                </a>
                            </div>

                            <!-- Link Esqueci a Senha -->
                            <div class="text-center">
                                <a href="#" class="text-muted text-decoration-none" data-bs-toggle="modal" data-bs-target="#modalRecuperarSenha">
                                    <i class="bi bi-question-circle me-1"></i>
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </form>
                    </div>

                    <!-- Footer do Card -->
                    <div class="card-footer bg-transparent border-0 text-center py-3">
                        <small class="text-muted">
                            © <?= date('Y') ?> RoomBox - Todos os direitos reservados
                        </small>
                    </div>
                </div>

                <!-- Informações Adicionais -->
                <div class="text-center mt-4">
                    <div class="row text-white-50">
                        <div class="col-4">
                            <i class="bi bi-shield-check display-6 mb-2"></i>
                            <p class="small">Seguro</p>
                        </div>
                        <div class="col-4">
                            <i class="bi bi-lightning display-6 mb-2"></i>
                            <p class="small">Rápido</p>
                        </div>
                        <div class="col-4">
                            <i class="bi bi-phone display-6 mb-2"></i>
                            <p class="small">Responsivo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Recuperar Senha -->
    <div class="modal fade" id="modalRecuperarSenha" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-key me-2"></i>Recuperar Senha
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-3">
                        Digite seu usuário para receber instruções de recuperação de senha.
                    </p>
                    <form action="./reserva.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text"
                                class="form-control"
                                id="usuarioRecuperacao"
                                name="usuarioRecuperacao"
                                placeholder="Digite seu usuário"
                                required>
                            <label for="usuarioRecuperacao">
                                <i class="bi bi-person me-2"></i>Usuário
                            </label>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-envelope me-2"></i>
                                Enviar Instruções
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>