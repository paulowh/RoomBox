<?php
include './template/header.php';
include './template/modal-cadastro-sala.php';
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
            <tr>
                <th scope="row">1</th>
                <td>Sala</td>
                <td>
                    <a href="#" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="bi bi-trash3-fill"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</section>