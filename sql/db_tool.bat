@echo off
chcp 65001 > nul

cd /d "%~dp0"

REM Configurações
SET MYSQL="C:\xampp\mysql\bin\mysql.exe"
SET DUMP="C:\xampp\mysql\bin\mysqldump.exe"
SET USUARIO=root
SET SENHA=
SET BANCO=db_roombox
SET BACKUP=backup_%BANCO%_%DATE:/=-%.sql

:MENU
cls
echo ===========================================
echo         GERENCIADOR DE BANCO DE TESTES
echo ===========================================
echo.
echo 1 - Criar banco e tabelas (CREATE e INSERT)
echo 2 - Resetar banco (sem backup)
echo 3 - Fazer backup do banco padrão [%BANCO%]
echo 4 - Listar bancos existentes
echo q - Sair
echo.

set /p OPCAO=Escolha uma opção [1-4]:

if "%OPCAO%"=="q" (
    echo Saindo...
    exit
)

if not "%OPCAO%"=="1" if not "%OPCAO%"=="2" if not "%OPCAO%"=="3" if not "%OPCAO%"=="4" (
    echo Opção inválida. Tente novamente.
    pause
    goto MENU
)

if "%OPCAO%"=="1" (
    echo [CREATE] Criando banco e tabelas...
    %MYSQL% -u %USUARIO% < create.sql

    echo [INSERT] Inserindo dados...
    %MYSQL% -u %USUARIO% %BANCO% < insert.sql

    echo Banco criado e populado com sucesso!
)

if "%OPCAO%"=="2" (
    echo [RESET SEM BACKUP] Apagando banco...
    %MYSQL% -u %USUARIO% -e "DROP DATABASE IF EXISTS %BANCO%;"

    echo [RESET SEM BACKUP] Criando banco e tabelas...
    %MYSQL% -u %USUARIO% < create.sql

    echo [RESET SEM BACKUP] Inserindo dados...
    %MYSQL% -u %USUARIO% %BANCO% < insert.sql

    echo Banco resetado sem backup com sucesso!
)

if "%OPCAO%"=="3" (
    echo [BACKUP] Criando backup do banco %BANCO%...
    "%DUMP%" -u %USUARIO% --routines --events %BANCO% > "%BACKUP%"

    if exist "%BACKUP%" (
        echo Backup salvo como: %BACKUP%
    ) else (
        echo ERRO: Backup não foi criado. Verifique se o banco existe e tem dados.
    )
)

if "%OPCAO%"=="4" (
    echo.
    echo Bancos disponíveis:
    %MYSQL% -u %USUARIO% -e "SHOW DATABASES;"
)

echo.
pause
goto MENU
