<!DOCTYPE html>
<html lang="pt-br">

<?php require_once './config.php'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomBox - Sistema de Gerenciamento</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="./cad-reserva.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <h2 class="mb-0 me-3">RoomBox</h2>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./cad-reserva.php" class="nav-link px-2 link-secondary">Mapa de Sala</a></li>
                    <li><a href="./cad-sala.php" class="nav-link px-2 link-body-emphasis">Salas</a></li>
                    <li><a href="./cad-docente.php" class="nav-link px-2 link-body-emphasis">Docentes</a></li>
                    <li><a href="./cad-turma.php" class="nav-link px-2 link-body-emphasis">Turmas</a></li>
                </ul>

                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./img/perfil.jpg" alt="mdo" width="32" height="32" class="rounded-circle">

                    </a>
                    <ul class="dropdown-menu text-small">
                        <li>
                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalReserva">
                                <i class="bi bi-bookmark me-2"></i> Reservar
                            </button>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <i class="bi bi-gear me-2"></i>Configurações
                            </a></li>
                        <li><a class="dropdown-item" href="#">
                                <i class="bi bi-person me-2"></i>Perfil
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Sair
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </header>

    <?php include './template/modal-reserva.php' ?>