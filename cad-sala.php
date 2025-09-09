<?php
include './template/header.php';
include './template/modal-cadastro-sala.php';

$script = 'SELECT * FROM tb_sala';

$resultadoPesquisa = $conn->query($script)->fetchAll();
// var_dump($resultadoPesquisa);
?>


<main class="container mt-5">
    <div class="row">
        <div class="col-12">
            <!-- Header da seção -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 text-dark">Gerenciar Salas</h1>
                    <p class="text-muted mb-0">Cadastre e gerencie todas as salas do sistema</p>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSala">
                    <i class="bi bi-plus-circle me-2"></i>Nova Sala
                </button>
            </div>

            <!-- Card da tabela -->
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="card-title mb-0">Lista de Salas</h5>
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
                                            <i class="bi bi-door-open me-2 text-primary"></i>Identificação
                                        </th>
                                        <th scope="col" class="py-3 text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($resultadoPesquisa as  $linha) { ?>
                                        <tr class="align-middle">
                                            <td class="px-4 py-3">
                                                <span class="badge bg-light text-dark">#<?= $linha['id'] ?></span>
                                            </td>
                                            <td class="py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded-circle bg-primary bg-gradient d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                                                        <i class="bi bi-door-open text-white"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-semibold text-dark"><?= $linha['identificacao'] ?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 text-center">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Visualizar">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <a href="./sala-editar.php?id_editar=<?= $linha['id'] ?>" 
                                                       class="btn btn-sm btn-outline-secondary" 
                                                       title="Editar">
                                                        <i class="bi bi-pencil"></i>
                                                    </a>
                                                    <a href="./sala-deletar.php?id_deletar=<?= $linha['id'] ?>" 
                                                       class="btn btn-sm btn-outline-danger" 
                                                       title="Excluir"
                                                       onclick="return confirm('Tem certeza que deseja excluir esta sala?')">
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
                            <i class="bi bi-door-closed display-1 text-muted"></i>
                            <h5 class="mt-3 text-muted">Nenhuma sala encontrada</h5>
                            <p class="text-muted">Não há salas cadastradas no sistema.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSala">
                                <i class="bi bi-plus-circle me-2"></i>Cadastrar primeira sala
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