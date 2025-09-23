<?php
require './config.php';
echo '<h1>SALA-CADASTRO.PHP</h1>';

$identificacao      = $_POST['txtIdentificacao'];
$qntdSuporteAluno   = $_POST['txtQntdSuporteAlunos'];
$tipoSala           = $_POST['tipo-sala'];

$script = "INSERT INTO tb_sala (identificacao, quant_suporte_alunos, tipo_sala) 
    VALUES (:identificacao, :quant_suporte_alunos, :tipo_sala)";

$resultado = $conn->prepare($script)->execute([
    ":identificacao" => $identificacao,
    ":quant_suporte_alunos" => $qntdSuporteAluno,
    ":tipo_sala" => $tipoSala
]);

if ($resultado == true) {
    $ultimoId = $conn->lastInsertId();
    header("location:./sala.php?lastId={$ultimoId}");
}
