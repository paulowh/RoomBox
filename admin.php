<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoomBox - Configurações</title>

    <link rel="shortcut icon" href="./img/icon.png" type="image/png">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php include './template/admin/sidebar.php'; ?>
            
            <!-- Conteúdo Principal -->
            <div class="col-md-9 col-lg-9">
                <div class="p-4">
                    
                    <!-- Conteúdo das Abas -->
                    <div class="tab-content">
                        <?php include './template/admin/tab-usuarios.php'; ?>
                        <?php include './template/admin/tab-docentes.php'; ?>
                        <?php include './template/admin/tab-salas.php'; ?>
                        <?php include './template/admin/tab-turmas.php'; ?>
                        <?php include './template/admin/tab-reservas.php'; ?>
                        <?php include './template/admin/tab-sistema.php'; ?>
                        <?php include './template/admin/tab-backup.php'; ?>
                        <?php include './template/admin/tab-logs.php'; ?>
                        <?php include './template/admin/tab-relatorios.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>