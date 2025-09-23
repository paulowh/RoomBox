<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomBox - Cadastro de Usuário</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="card login-card border-0 rounded-4">
                    <div class="card-body p-5">
                        <!-- Logo e Título -->
                        <div class="text-center mb-4">
                            <h1 class="display-5 fw-bold brand-logo mb-2">RoomBox</h1>
                            <p class="text-muted mb-4">Cadastro de Usuário e Docente</p>
                        </div>

                        <!-- Formulário de Cadastro -->
                        <form id="cadastroForm">

                            <!-- Seção Dados do Docente -->
                            <div class="mb-4">
                                <h5 class="text-success mb-3">
                                    <i class="bi bi-mortarboard me-2"></i>Dados do Docente
                                </h5>
                                <div class="row">
                                    <!-- Nome do Docente (tb_docente.nome) -->
                                    <div class="col-md-12 mb-3">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control form-control-lg"
                                                id="nomeDocente"
                                                name="nomeDocente"
                                                placeholder="Digite o nome completo do docente"
                                                maxlength="100"
                                                required>
                                            <label for="nomeDocente">
                                                <i class="bi bi-person me-2"></i>Nome do Docente (máx. 100 caracteres)
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Área (tb_docente.area) -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control form-control-lg"
                                                id="area"
                                                name="area"
                                                placeholder="Digite a área de atuação"
                                                maxlength="100"
                                                required>
                                            <label for="area">
                                                <i class="bi bi-book me-2"></i>Área de Atuação (máx. 100 caracteres)
                                            </label>
                                        </div>
                                    </div>

                                    <!-- RA do Docente (tb_docente.ra_docente) -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control form-control-lg"
                                                id="raDocente"
                                                name="raDocente"
                                                placeholder="Digite o RA do docente"
                                                maxlength="7"
                                                pattern="[0-9]{7}"
                                                title="RA deve conter exatamente 7 números">
                                            <label for="raDocente">
                                                <i class="bi bi-card-text me-2"></i>RA do Docente (7 dígitos)
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Seção Dados do Usuário -->
                            <div class="mb-4">
                                <h5 class="text-primary mb-3">
                                    <i class="bi bi-person-circle me-2"></i>Dados do Usuário
                                </h5>
                                <div class="row">
                                    <!-- Usuário (tb_usuario.usuario) -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="text"
                                                class="form-control form-control-lg"
                                                id="usuario"
                                                name="usuario"
                                                placeholder="Digite o nome de usuário"
                                                maxlength="50"
                                                required>
                                            <label for="usuario">
                                                <i class="bi bi-at me-2"></i>Usuário (máx. 50 caracteres)
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Nível Administrador (tb_usuario.nivel_adm) -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <select class="form-select form-control-lg"
                                                id="nivelAdm"
                                                name="nivelAdm"
                                                required>
                                                <option value="">Selecione o nível</option>
                                                <option value="0">Comum (0)</option>
                                                <option value="1">Administrador (1)</option>
                                            </select>
                                            <label for="nivelAdm">
                                                <i class="bi bi-person-badge me-2"></i>Nível de Acesso
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Senha (tb_usuario.senha) -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="password"
                                                class="form-control form-control-lg"
                                                id="senha"
                                                name="senha"
                                                placeholder="Digite a senha"
                                                required>
                                            <label for="senha">
                                                <i class="bi bi-key me-2"></i>Senha
                                            </label>
                                        </div>
                                    </div>

                                    <!-- Confirmar Senha -->
                                    <div class="col-md-6 mb-3">
                                        <div class="form-floating">
                                            <input type="password"
                                                class="form-control form-control-lg"
                                                id="confirmarSenha"
                                                name="confirmarSenha"
                                                placeholder="Confirme a senha"
                                                required>
                                            <label for="confirmarSenha">
                                                <i class="bi bi-shield-check me-2"></i>Confirmar Senha
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>



                            <!-- Botões -->
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="d-grid">
                                        <a href="./index.php" class="btn btn-outline-secondary btn-lg">
                                            <i class="bi bi-arrow-left me-2"></i>
                                            Voltar ao Login
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg btn-login">
                                            <i class="bi bi-person-plus me-2"></i>
                                            Cadastrar Docente
                                        </button>
                                    </div>
                                </div>
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
            </div>
        </div>
    </div>
</body>

</html>