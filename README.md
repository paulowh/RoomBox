# RoomBox 🏫

Sistema de Gerenciamento de Salas para Instituições de Ensino

## 📋 Sobre o Projeto

RoomBox é um sistema web desenvolvido em PHP para gerenciamento e reserva de salas em instituições de ensino. O sistema permite o controle de salas, docentes, turmas e reservas, facilitando a administração e organização do uso dos espaços acadêmicos.

## ✨ Funcionalidades

- **Sistema de Autenticação**: Login com usuário e senha, controle de níveis de acesso (usuário/administrador)
- **Gerenciamento de Salas**: Cadastro e controle de salas com informações sobre capacidade, tipo e status
- **Cadastro de Docentes**: Registro de professores com suas respectivas áreas de atuação
- **Controle de Turmas**: Gerenciamento de turmas com informações de período e quantidade de alunos
- **Sistema de Reservas**: Reserva de salas para turmas específicas com docentes responsáveis
- **Controle de Usuários**: Cadastro de usuários vinculados aos docentes com diferentes níveis de permissão
- **Interface Responsiva**: Design moderno e responsivo usando Bootstrap 5
- **Operações CRUD**: Criação, leitura, atualização e exclusão de registros

## 🛠️ Tecnologias Utilizadas

- **Backend**: PHP 7.4+
- **Banco de Dados**: MySQL
- **Frontend**: 
  - HTML5
  - CSS3
  - Bootstrap 5.3
  - Bootstrap Icons
  - JavaScript
- **Servidor Web**: Apache (XAMPP)

## 📁 Estrutura do Projeto

```
RoomBox/
├── css/                    # Arquivos de estilo
│   ├── bootstrap.min.css
│   ├── bootstrap-icons.min.css
│   └── style.css
├── js/                     # Scripts JavaScript
│   └── bootstrap.bundle.min.js
├── img/                    # Imagens do sistema
├── sql/                    # Scripts de banco de dados
│   ├── create.sql         # Script de criação das tabelas
│   ├── insert.sql         # Script de inserção de dados
│   └── db_tool.bat        # Ferramenta de gerenciamento do BD
├── template/               # Templates e modais
├── config.php             # Configuração do banco de dados
├── index.php              # Página de login
├── cad-reserva.php        # Gerenciamento de reservas
├── cad-sala.php           # Cadastro de salas
├── cad-docente.php        # Cadastro de docentes
└── cad-turma.php          # Cadastro de turmas
```

## 🚀 Como Começar

### Pré-requisitos

- XAMPP (Apache + MySQL + PHP)
- Git
- Navegador web moderno

### 1. Fork do Repositório

1. Acesse o repositório no GitHub: https://github.com/paulowh/RoomBox
2. Clique no botão "Fork" no canto superior direito
3. Aguarde a criação do fork em sua conta

### 2. Clone do Projeto

1. Abra o **Prompt de Comando** ou **PowerShell** como administrador
2. Execute os comandos:

```bash
# Navegue até a pasta htdocs do XAMPP
cd C:\xampp\htdocs

# Clone o repositório forkado
git clone https://github.com/SEU_USUARIO/RoomBox.git

# Navegue até o diretório do projeto
cd RoomBox
```

### 3. Configuração do Ambiente

#### 3.1 Configurar Variáveis de Ambiente

1. Copie o arquivo de exemplo:
```bash
copy .env-exemplo .env
```

2. Edite o arquivo `.env` com suas configurações de banco:
```ini
HOST=localhost
BANCO=db_roombox
USUARIO=root
SENHA=
```

### 4. Configuração do Banco de Dados

#### 4.1 Iniciar Serviços do XAMPP

1. Abra o **XAMPP Control Panel**
2. Clique em **Start** nos serviços:
   - **Apache**
   - **MySQL**

#### 4.2 Executar Script de Configuração

1. Abra o **Prompt de Comando** e navegue até a pasta `sql`:
```bash
cd C:\xampp\htdocs\RoomBox\sql
```

2. Execute o script de configuração:
```bash
db_tool.bat
```

3. **Escolha a opção 1** quando solicitado:
```
===========================================
        GERENCIADOR DE BANCO DE TESTES
===========================================

1 - Criar banco e tabelas (CREATE e INSERT)
2 - Resetar banco (sem backup)
3 - Fazer backup do banco padrão [db_roombox]
4 - Listar bancos existentes
q - Sair

Escolha uma opção [1-4]: 1
```

Esta opção irá:
- Criar o banco de dados `db_roombox`
- Criar todas as 5 tabelas necessárias (salas, docentes, turmas, reservas e usuários)
- Inserir dados de exemplo:
  - 18 salas de diferentes tipos
  - 8 docentes de várias áreas
  - 5 turmas com diferentes períodos
  - 5 reservas de exemplo
  - 5 usuários (1 super admin, 1 administrador e 3 usuários comuns)

### 5. Acessar o Sistema

1. Abra seu navegador
2. Acesse: `http://localhost/RoomBox`
3. Use um dos usuários cadastrados para fazer login:

### 👤 Usuários de Teste Disponíveis:

| Usuário | Senha | Nível | Docente Vinculado |
|---------|--------|--------|-------------------|
| **admin** | `admin` | 🔑 Admin | Guto Xavier |
| **paulosantos** | `setudoimportanadaimporta` | 🔑 Administrador | Paulo Santos |
| fernanda.lima | `senha123` | 👤 Usuário | Fernanda Lima |
| gutoffline | `palhacoprofissional` | 👤 Usuário | Guto Xavier |
| vagner3d | `impressora3d` | 👤 Usuário | Vagner Vagner |

## 📊 Estrutura do Banco de Dados

O sistema utiliza 5 tabelas principais:

- **tb_sala**: Informações das salas (identificação, capacidade, tipo, status)
- **tb_docente**: Dados dos professores (nome, área, RA)
- **tb_turma**: Informações das turmas (nome, sigla, período, quantidade de alunos)
- **tb_reserva_sala**: Reservas (relaciona sala, turma e docente)
- **tb_usuario**: Controle de acesso (usuário, senha, nível administrativo, vinculação com docente)

## 🔧 Ferramentas de Desenvolvimento

### db_tool.bat

Script utilitário para gerenciamento do banco de dados:

- **Opção 1**: Criar banco e inserir dados iniciais (CREATE e INSERT)
- **Opção 2**: Resetar banco (sem backup)
- **Opção 3**: Fazer backup do banco padrão [db_roombox]
- **Opção 4**: Listar bancos existentes

### Arquivos de Configuração

- **config.php**: Conexão com banco de dados usando PDO
- **.env**: Variáveis de ambiente (não versionado)
- **.env-exemplo**: Template para configuração


## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.



⭐ Se este projeto te ajudou, considere dar uma estrela no repositório!
