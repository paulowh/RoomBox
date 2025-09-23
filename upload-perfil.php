<?php
/**
 * Script para processar upload de imagem de perfil
 * RoomBox - Sistema de Reserva de Salas
 */

// Configurações de upload
$uploadDir = './img/users/';
$allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
$maxFileSize = 2 * 1024 * 1024; // 2MB
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

/**
 * Função para processar upload de imagem de perfil
 * @param array $file - Dados do arquivo $_FILES
 * @param string $nomeUsuario - Nome do usuário para nomear o arquivo
 * @return array - Resultado do upload
 */
function processarUploadPerfil($file, $nomeUsuario) {
    global $uploadDir, $allowedTypes, $maxFileSize, $allowedExtensions;
    
    $resultado = [
        'sucesso' => false,
        'mensagem' => '',
        'nomeArquivo' => ''
    ];
    
    // Verificar se foi enviado um arquivo
    if (!isset($file) || $file['error'] === UPLOAD_ERR_NO_FILE) {
        $resultado['mensagem'] = 'Nenhum arquivo foi enviado';
        return $resultado;
    }
    
    // Verificar erros de upload
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $resultado['mensagem'] = 'Erro no upload do arquivo';
        return $resultado;
    }
    
    // Verificar tipo de arquivo
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mimeType = finfo_file($finfo, $file['tmp_name']);
    finfo_close($finfo);
    
    if (!in_array($mimeType, $allowedTypes)) {
        $resultado['mensagem'] = 'Tipo de arquivo não permitido. Use JPG, PNG ou GIF';
        return $resultado;
    }
    
    // Verificar tamanho do arquivo
    if ($file['size'] > $maxFileSize) {
        $resultado['mensagem'] = 'Arquivo muito grande. Tamanho máximo: 2MB';
        return $resultado;
    }
    
    // Verificar extensão do arquivo
    $extensao = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    if (!in_array($extensao, $allowedExtensions)) {
        $resultado['mensagem'] = 'Extensão de arquivo não permitida';
        return $resultado;
    }
    
    // Gerar nome único para o arquivo
    $nomeArquivo = 'perfil_' . preg_replace('/[^a-zA-Z0-9]/', '_', $nomeUsuario) . '_' . time() . '.' . $extensao;
    $caminhoCompleto = $uploadDir . $nomeArquivo;
    
    // Criar diretório se não existir
    if (!is_dir($uploadDir)) {
        if (!mkdir($uploadDir, 0755, true)) {
            $resultado['mensagem'] = 'Erro ao criar diretório de upload';
            return $resultado;
        }
    }
    
    // Mover arquivo para o destino
    if (move_uploaded_file($file['tmp_name'], $caminhoCompleto)) {
        // Redimensionar imagem se necessário
        redimensionarImagem($caminhoCompleto, 300, 300);
        
        $resultado['sucesso'] = true;
        $resultado['mensagem'] = 'Upload realizado com sucesso';
        $resultado['nomeArquivo'] = $nomeArquivo;
    } else {
        $resultado['mensagem'] = 'Erro ao salvar o arquivo';
    }
    
    return $resultado;
}

/**
 * Função para redimensionar imagem mantendo proporção
 * @param string $caminhoArquivo - Caminho do arquivo
 * @param int $larguraMax - Largura máxima
 * @param int $alturaMax - Altura máxima
 */
function redimensionarImagem($caminhoArquivo, $larguraMax, $alturaMax) {
    $info = getimagesize($caminhoArquivo);
    if (!$info) return;
    
    $larguraOriginal = $info[0];
    $alturaOriginal = $info[1];
    $tipo = $info[2];
    
    // Calcular novas dimensões mantendo proporção
    $ratio = min($larguraMax / $larguraOriginal, $alturaMax / $alturaOriginal);
    $novaLargura = round($larguraOriginal * $ratio);
    $novaAltura = round($alturaOriginal * $ratio);
    
    // Criar imagem baseada no tipo
    switch ($tipo) {
        case IMAGETYPE_JPEG:
            $imagemOriginal = imagecreatefromjpeg($caminhoArquivo);
            break;
        case IMAGETYPE_PNG:
            $imagemOriginal = imagecreatefrompng($caminhoArquivo);
            break;
        case IMAGETYPE_GIF:
            $imagemOriginal = imagecreatefromgif($caminhoArquivo);
            break;
        default:
            return;
    }
    
    if (!$imagemOriginal) return;
    
    // Criar nova imagem redimensionada
    $novaImagem = imagecreatetruecolor($novaLargura, $novaAltura);
    
    // Preservar transparência para PNG e GIF
    if ($tipo == IMAGETYPE_PNG || $tipo == IMAGETYPE_GIF) {
        imagealphablending($novaImagem, false);
        imagesavealpha($novaImagem, true);
        $transparent = imagecolorallocatealpha($novaImagem, 255, 255, 255, 127);
        imagefilledrectangle($novaImagem, 0, 0, $novaLargura, $novaAltura, $transparent);
    }
    
    // Redimensionar
    imagecopyresampled($novaImagem, $imagemOriginal, 0, 0, 0, 0, $novaLargura, $novaAltura, $larguraOriginal, $alturaOriginal);
    
    // Salvar imagem redimensionada
    switch ($tipo) {
        case IMAGETYPE_JPEG:
            imagejpeg($novaImagem, $caminhoArquivo, 85);
            break;
        case IMAGETYPE_PNG:
            imagepng($novaImagem, $caminhoArquivo);
            break;
        case IMAGETYPE_GIF:
            imagegif($novaImagem, $caminhoArquivo);
            break;
    }
    
    // Limpar memória
    imagedestroy($imagemOriginal);
    imagedestroy($novaImagem);
}

// Exemplo de uso (pode ser integrado no processamento do formulário)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['fotoPerfil'])) {
    $nomeUsuario = $_POST['usuario'] ?? 'usuario_' . time();
    $resultado = processarUploadPerfil($_FILES['fotoPerfil'], $nomeUsuario);
    
    // Retornar JSON para uso via AJAX
    header('Content-Type: application/json');
    echo json_encode($resultado);
    exit;
}
?>