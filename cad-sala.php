<?php
include './template/header.php';
include './template/modal-cadastro-sala.php';

$script = 'SELECT * FROM tb_sala';

$resultadoPesquisa = $conn->query($script)->fetchAll();
// var_dump($resultadoPesquisa);

?>


<section class="container mt-5">

    <table class="table table-striped table-hover text-center">
        <div class="text-end">
            <button type="button" class="btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#modalSala">
                <i class="bi bi-plus-circle"></i> Sala
            </button>
        </div>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sala</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resultadoPesquisa as $linha) { ?>
                <tr>
                    <th scope="row"><?= $linha['id'] ?></th>
                    <td><?= $linha['identificacao'] ?></td>
                    <td>
                        <a href="./sala-editar.php?id_editar=<?= $linha['id'] ?>" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="./sala-deletar.php?id_deletar=<?= $linha['id'] ?>" class="btn btn-danger">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>