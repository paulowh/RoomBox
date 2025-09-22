@echo off
chcp 65001 > nul

REM Configurações
SET MYSQL="C:\xampp\mysql\bin\mysql.exe"
SET DUMP="C:\xampp\mysql\bin\mysqldump.exe"
SET USUARIO=root
SET SENHA=
SET BANCO=db_roombox
SET LOG=log_banco.txt
SET BACKUP=backup_%BANCO%_%DATE:/=-%.sql

:MENU
cls
echo ===========================================
echo         GERENCIADOR DE BANCO DE TESTES
echo ===========================================
echo.
echo 1 - Criar banco e tabelas (CREATE e INSERT)
@REM echo 2 - Atualizar dados (INSERT)
echo 3 - Resetar banco (com backup)
echo 4 - Resetar banco (sem backup)
echo 5 - backup outros bancos
echo q - Sair
echo.

set /p OPCAO=Escolha uma opção [1-5]:

REM Validação de entrada

if "%OPCAO%"=="q" (
    echo Saindo...
    exit
)

if not "%OPCAO%"=="1" if not "%OPCAO%"=="3" if not "%OPCAO%"=="4" if not "%OPCAO%"=="5" (
    echo Opção inválida. Tente novamente.
    pause
    goto MENU
)

if "%OPCAO%"=="1" (
    echo [CREATE] Criando banco e tabelas...
    %MYSQL% -u %USUARIO% < create.sql >> %LOG%
    echo Banco criado com sucesso!

    echo [INSERT] Inserindo dados...
    %MYSQL% -u %USUARIO% %BANCO% < insert.sql >> %LOG%
    echo Dados atualizados com sucesso!
)

if "%OPCAO%"=="3" (
    echo [RESET] Fazendo backup do banco...
    "%DUMP%" -u %USUARIO% %BANCO% > %BACKUP%
    echo Backup salvo como %BACKUP%

    echo [RESET] Apagando banco...
    %MYSQL% -u %USUARIO% -e "DROP DATABASE IF EXISTS %BANCO%;" >> %LOG%

    echo [RESET] Criando banco e tabelas...
    %MYSQL% -u %USUARIO% < create.sql >> %LOG%

    echo [RESET] Inserindo dados...
    %MYSQL% -u %USUARIO% %BANCO% < insert.sql >> %LOG%

    echo Banco resetado com sucesso!
)

if "%OPCAO%"=="4" (
    echo [RESET SEM BACKUP] Apagando banco...
    %MYSQL% -u %USUARIO% -e "DROP DATABASE IF EXISTS %BANCO%;" >> %LOG%

    echo [RESET SEM BACKUP] Criando banco e tabelas...
    %MYSQL% -u %USUARIO% < create.sql >> %LOG%

    echo [RESET SEM BACKUP] Inserindo dados...
    %MYSQL% -u %USUARIO% %BANCO% < insert.sql >> %LOG%

    echo Banco resetado sem backup com sucesso!
)

if "%OPCAO%"=="5" (
    echo.
    echo Bancos disponíveis:
    %MYSQL% -u %USUARIO% -e "SHOW DATABASES;"
    echo.
    set /p NOME_BANCO=Digite o nome do banco que deseja fazer backup:
    SET BACKUP=backup_%NOME_BANCO%_%DATE:/=-%.sql
    echo Criando backup de %NOME_BANCO%...
    "%DUMP%" -u %USUARIO% %NOME_BANCO% > %BACKUP%
    echo Backup salvo como %BACKUP%
)


echo.
echo Operação concluída. Verifique o log em %LOG%
pause
goto MENU
