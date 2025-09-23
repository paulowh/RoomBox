<?php

include './template/header.php';
include './template/modal-cadastro-docente.html';

$script = 'SELECT * FROM tb_docente';

$resultadoPesquisa = $conn->query($script)->fetchAll();
?>

<main class="container mt-5">
    <div class="row">
        <div class="col-12">
            <!-- Header da seção -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 text-dark">Gerenciar Docentes</h1>
                    <p class="text-muted mb-0">Cadastre e gerencie todos os docentes do sistema</p>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDocente">
                    <i class="bi bi-plus-circle me-2"></i>Novo Docente
                </button>
            </div>

            <!-- Card da tabela -->
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="card-title mb-0">Lista de Docentes</h5>
                        </div>
                        <div class="col-auto">
                            <span class="badge bg-primary"><?= count($resultadoPesquisa) ?> registros</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <?php if (count($resultadoPesquisa) > 0) { ?>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">#</th>
                                        <th scope="col" class="py-3">
                                            <i class="bi bi-person-badge me-2 text-primary"></i>Docente
                                        </th>
                                        <th scope="col" class="py-3">
                                            <i class="bi bi-mortarboard me-2 text-success"></i>Área
                                        </th>
                                        <th scope="col" class="py-3">
                                            <i class="bi bi-card-text me-2 text-info"></i>RA
                                        </th>
                                        <th scope="col" class="py-3 text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($resultadoPesquisa as $linha) { ?>
                                        <tr class="align-middle">
                                            <td class="px-4 py-3">
                                                <span class="badge bg-light text-dark">#<?= str_pad($linha['id'], 3, '0', STR_PAD_LEFT) ?></span>
                                            </td>
                                            <td class="py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded-circle bg-info bg-gradient d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px; overflow: hidden;">
                                                        <img src="./img/<?= !empty($linha['caminho_arquivo']) ? $linha['caminho_arquivo'] : 'perfil.jpg' ?>" alt="Foto do docente" class="rounded-circle" style="width: 32px; height: 32px; object-fit: cover;">
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold text-dark"><?= htmlspecialchars($linha['nome']) ?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3">
                                                <span class="badge bg-success-subtle text-success-emphasis"><?= htmlspecialchars($linha['area']) ?></span>
                                            </td>
                                            <td class="py-3">
                                                <code class="text-muted"><?= htmlspecialchars($linha['ra_docente']) ?></code>
                                            </td>
                                            <td class="py-3 text-center">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Visualizar">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <a href="./docente-editar.php?id_editar=<?= $linha['id'] ?>"
                                                        class="btn btn-sm btn-outline-secondary"
                                                        title="Editar">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <a href="./docente-deletar.php?id_deletar=<?= $linha['id'] ?>"
                                                        class="btn btn-sm btn-outline-danger"
                                                        title="Excluir"
                                                        onclick="return confirm('Tem certeza que deseja excluir este docente?')">
                                                        <i class="bi bi-trash3"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } else { ?>
                        <div class="text-center py-5">
                            <i class="bi bi-person-x display-1 text-muted"></i>
                            <h5 class="mt-3 text-muted">Nenhum docente encontrado</h5>
                            <p class="text-muted">Não há docentes cadastrados no sistema.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDocente">
                                <i class="bi bi-plus-circle me-2"></i>Cadastrar primeiro docente
                            </button>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>

</body>

</html>