INSERT INTO tb_sala (identificacao, quant_suporte_alunos, tipo_sala, status) VALUES
('SALA 01', 30, 'Convencional', 1),
('SALA 02', 25, 'Convencional', 1),
('SALA 03', 35, 'Convencional', 1),
('SALA 04', 20, 'Laboratório', 1),
('SALA 05', 20, 'Laboratório', 1),
('SALA 06', 15, 'Laboratório de Hardware', 1),
('SALA 07', 20, 'Laboratório', 1),
('SALA 08', 20, 'Laboratório', 1),
('SALA 09', 20, 'Laboratório', 1),
('SALA 10', 20, 'Laboratório', 1),
('SALA 11', 25, 'Enfermagem', 1),
('SALA 12', 30, 'Convencional', 1),
('SALA 13', 30, 'Convencional', 1),
('SALA 14', 30, 'Convencional', 1),
('SALA 15', 30, 'Convencional', 1),
('SALA 16', 30, 'Convencional', 1),
('SALA 17', 30, 'Convencional', 1),
('SALA 18', 30, 'Convencional', 1);

INSERT INTO tb_docente (nome, area, ra_docente) VALUES
('Carlos Andrade', 'Matemática', 'D123456'),
('Fernanda Lima', 'Biologia', 'D234567'),
('João Silva', 'Informática', 'D345678'),
('Mariana Costa', 'Enfermagem', 'D456789'),
('Roberto Nunes', 'Física', 'D567890'),
('Guto Xavier', 'Programção', 'D678901'),
('Paulo Santos', 'Programação', 'D789012'),
('Vagner Vagner', 'Manunteção', 'D890123'),
('Ana Beatriz Silva', 'Design Gráfico', 'D991234'),
('Ricardo Ferreira', 'Administração', 'D992345');

INSERT INTO tb_turma (nome, sigla, periodo, quant_alunos) VALUES
('Turma de Matemática Aplicada', 'MAT01', 'Noturno', 28),
('Turma de Biologia Geral', 'BIO01', 'Matutino', 32),
('Turma de Informática Básica', 'INF01', 'Vespertino', 25),
('Turma de Enfermagem I', 'ENF01', 'Matutino', 30),
('Turma de Física Experimental', 'FIS01', 'Noturno', 27);

INSERT INTO tb_reserva_sala (sala_id, turma_id, docente_id) VALUES
(4, 1, 1),  -- Sala Laboratório para Matemática
(11, 4, 4), -- Sala de Enfermagem para Enfermagem
(6, 3, 3),  -- Hardware para Informática
(2, 2, 2),  -- Sala Convencional para Biologia
(10, 5, 5); -- Laboratório para Física

-- Inserir usuários de acesso
INSERT INTO tb_usuario (usuario, senha, docente_id, nivel_adm) VALUES
('admin', 'admin', 6, 1),           
('fernanda.lima', 'senha123', 2, 0),   
('vagner3d', 'impressora3d', 8, 0),  
('gutoffline', 'palhacoprofissional', 6, 0),      
('paulosantos', 'setudoimportanadaimporta', 7, 1);

-- ===============================================
-- UPDATE para preencher campos de arquivos e datas de forma aleatória
-- ===============================================

-- Atualizar campos de arquivo para docentes usando fotos reais da pasta img/users
UPDATE tb_docente SET 
    nome_arquivo = 'IMG_4304.png',
    tipo_arquivo = 'png',
    caminho_arquivo = '/users/IMG_4304.png'
WHERE id = 1; -- Carlos Andrade

UPDATE tb_docente SET 
    nome_arquivo = 'IMG_4734.jpg',
    tipo_arquivo = 'jpg',
    caminho_arquivo = '/users/IMG_4734.jpg'
WHERE id = 2; -- Fernanda Lima

UPDATE tb_docente SET 
    nome_arquivo = 'IMG_4799.jpg',
    tipo_arquivo = 'jpg',
    caminho_arquivo = '/users/IMG_4799.jpg'
WHERE id = 3; -- João Silva

UPDATE tb_docente SET 
    nome_arquivo = 'IMG_4831.jpg',
    tipo_arquivo = 'jpg',
    caminho_arquivo = '/users/IMG_4831.jpg'
WHERE id = 4; -- Mariana Costa

UPDATE tb_docente SET 
    nome_arquivo = 'IMG_4847.jpg',
    tipo_arquivo = 'jpg',
    caminho_arquivo = '/users/IMG_4847.jpg'
WHERE id = 5; -- Roberto Nunes


UPDATE tb_docente SET 
    nome_arquivo = 'IMG_7522.JPEG',
    tipo_arquivo = 'jpeg',
    caminho_arquivo = '/users/IMG_7522.JPEG'
WHERE id = 7; -- Paulo Santos

UPDATE tb_docente SET 
    nome_arquivo = 'IMG_4432.png',
    tipo_arquivo = 'png',
    caminho_arquivo = '/users/IMG_4432.png'
WHERE id = 8; -- Vagner Vagner

UPDATE tb_docente SET 
    nome_arquivo = 'IMG_4854.jpg',
    tipo_arquivo = 'jpg',
    caminho_arquivo = '/users/IMG_4854.jpg'
WHERE id = 9; -- Ana Beatriz Silva

UPDATE tb_docente SET 
    nome_arquivo = 'IMG_4904.jpg',
    tipo_arquivo = 'jpg',
    caminho_arquivo = '/users/IMG_4904.jpg'
WHERE id = 10; -- Ricardo Ferreira

-- Atualizar datas de criação com valores aleatórios dos últimos 6 meses
UPDATE tb_sala SET data_criacao = '2025-03-15 08:30:00' WHERE id = 1;
UPDATE tb_sala SET data_criacao = '2025-04-02 14:15:30' WHERE id = 2;
UPDATE tb_sala SET data_criacao = '2025-04-18 09:45:15' WHERE id = 3;
UPDATE tb_sala SET data_criacao = '2025-05-03 11:20:45' WHERE id = 4;
UPDATE tb_sala SET data_criacao = '2025-05-22 16:35:20' WHERE id = 5;
UPDATE tb_sala SET data_criacao = '2025-06-10 13:50:10' WHERE id = 6;
UPDATE tb_sala SET data_criacao = '2025-06-28 10:25:35' WHERE id = 7;
UPDATE tb_sala SET data_criacao = '2025-07-12 15:40:20' WHERE id = 8;
UPDATE tb_sala SET data_criacao = '2025-07-30 12:15:45' WHERE id = 9;
UPDATE tb_sala SET data_criacao = '2025-08-14 09:30:15' WHERE id = 10;
UPDATE tb_sala SET data_criacao = '2025-08-25 14:45:30' WHERE id = 11;
UPDATE tb_sala SET data_criacao = '2025-09-05 11:20:10' WHERE id = 12;
UPDATE tb_sala SET data_criacao = '2025-09-15 16:35:45' WHERE id = 13;
UPDATE tb_sala SET data_criacao = '2025-09-20 13:50:20' WHERE id = 14;

UPDATE tb_docente SET data_criacao = '2025-02-10 08:15:30' WHERE id = 1;
UPDATE tb_docente SET data_criacao = '2025-03-22 14:30:15' WHERE id = 2;
UPDATE tb_docente SET data_criacao = '2025-04-15 10:45:20' WHERE id = 3;
UPDATE tb_docente SET data_criacao = '2025-05-08 16:20:45' WHERE id = 4;
UPDATE tb_docente SET data_criacao = '2025-06-12 11:35:10' WHERE id = 5;
UPDATE tb_docente SET data_criacao = '2025-07-25 09:50:35' WHERE id = 6;
UPDATE tb_docente SET data_criacao = '2025-08-18 15:25:20' WHERE id = 7;
UPDATE tb_docente SET data_criacao = '2025-09-03 12:40:15' WHERE id = 8;
UPDATE tb_docente SET data_criacao = '2025-09-10 14:20:30' WHERE id = 9; -- Ana Beatriz Silva
UPDATE tb_docente SET data_criacao = '2025-09-18 16:45:15' WHERE id = 10; -- Ricardo Ferreira

UPDATE tb_turma SET data_criacao = '2025-01-20 09:30:00' WHERE id = 1;
UPDATE tb_turma SET data_criacao = '2025-02-14 14:15:30' WHERE id = 2;
UPDATE tb_turma SET data_criacao = '2025-03-10 11:45:15' WHERE id = 3;
UPDATE tb_turma SET data_criacao = '2025-04-05 16:20:45' WHERE id = 4;
UPDATE tb_turma SET data_criacao = '2025-05-18 13:35:20' WHERE id = 5;

UPDATE tb_reserva_sala SET data_criacao = '2025-09-10 08:30:15' WHERE id = 1;
UPDATE tb_reserva_sala SET data_criacao = '2025-09-12 14:45:30' WHERE id = 2;
UPDATE tb_reserva_sala SET data_criacao = '2025-09-15 10:20:45' WHERE id = 3;
UPDATE tb_reserva_sala SET data_criacao = '2025-09-18 16:35:20' WHERE id = 4;
UPDATE tb_reserva_sala SET data_criacao = '2025-09-20 12:50:10' WHERE id = 5;

UPDATE tb_usuario SET data_criacao = '2025-01-15 08:00:00' WHERE id = 1; -- admin (mais antigo)
UPDATE tb_usuario SET data_criacao = '2025-03-22 14:30:15' WHERE id = 2; -- fernanda.lima
UPDATE tb_usuario SET data_criacao = '2025-09-03 12:40:15' WHERE id = 3; -- vagner3d
UPDATE tb_usuario SET data_criacao = '2025-07-25 09:50:35' WHERE id = 4; -- gutoffline
UPDATE tb_usuario SET data_criacao = '2025-08-18 15:25:20' WHERE id = 5; -- paulosantos         
