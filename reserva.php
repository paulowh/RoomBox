<?php


include './template/header.php';



$scriptConsulta = "SELECT 
                    trs.id, ts.identificacao as 'nome_sala', 
                    td.nome as 'nome_docente', 
                    tt.sigla as 'sigla_turma'
                   FROM tb_reserva_sala trs
                    INNER JOIN tb_sala ts ON trs.sala_id = ts.id
                    INNER JOIN tb_turma tt ON trs.turma_id = tt.id
                    INNER JOIN tb_docente td ON trs.docente_id = td.id
                   WHERE trs.deletado != 1";

$resultados = $conn->query($scriptConsulta)->fetchAll();
?>

<main class="container mt-5">
    <div class="row">
        <div class="col-12">
            <!-- Header da seção -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="h3 text-dark">Reservas de Salas</h1>
                    <p class="text-muted mb-0">Gerencie todas as reservas do sistema</p>
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalReserva">
                    <i class="bi bi-plus-circle me-2"></i>Nova Reserva
                </button>
            </div>

            <!-- Card da tabela -->
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <div class="row align-items-center">
                        <div class="col">
                            <h5 class="card-title mb-0">Lista de Reservas</h5>
                        </div>
                        <div class="col-auto">
                            <span class="badge bg-primary"><?= count($resultados) ?> registros</span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <?php if (count($resultados) > 0) { ?>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">#</th>
                                        <th scope="col" class="py-3">
                                            <i class="bi bi-door-open me-2 text-primary"></i>Sala
                                        </th>
                                        <th scope="col" class="py-3">
                                            <i class="bi bi-people me-2 text-success"></i>Turma
                                        </th>
                                        <th scope="col" class="py-3">
                                            <i class="bi bi-person-badge me-2 text-info"></i>Docente
                                        </th>
                                        <th scope="col" class="py-3 text-center">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($resultados as $linha) { ?>
                                        <tr class="align-middle">
                                            <td class="px-4 py-3">
                                                <span class="badge bg-light text-dark">#<?= $linha['id'] ?></span>
                                            </td>
                                            <td class="py-3">
                                                <div class="fw-semibold text-dark"><?= $linha['nome_sala'] ?></div>
                                            </td>
                                            <td class="py-3">
                                                <span class="badge bg-success-subtle text-success-emphasis"><?= $linha['sigla_turma'] ?></span>
                                            </td>
                                            <td class="py-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="rounded-circle bg-primary bg-gradient d-flex align-items-center justify-content-center me-2" style="width: 32px; height: 32px;">
                                                        <i class="bi bi-person text-white"></i>
                                                    </div>
                                                    <div>
                                                        <div class="fw-medium text-dark"><?= $linha['nome_docente'] ?></div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-3 text-center">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-primary" title="Visualizar">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Editar">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>

                                                    <!-- @onclick criado um script que retorna verdadeiro ou faço para confirmar a ação
                                                    -->
                                                    <a href="./reserva-delete.php?id_deletar=<?= $linha['id'] ?>"
                                                        class="btn btn-sm btn-outline-danger"
                                                        title="Excluir"
                                                        onclick="return confirm('Tem certeza que deseja excluir esta reserva?')">
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
                            <i class="bi bi-inbox display-1 text-muted"></i>
                            <h5 class="mt-3 text-muted">Nenhuma reserva encontrada</h5>
                            <p class="text-muted">Não há reservas cadastradas no sistema.</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalReserva">
                                <i class="bi bi-plus-circle me-2"></i>Criar primeira reserva
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