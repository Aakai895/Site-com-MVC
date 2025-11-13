🧓 Sistema de Saúde para Idosos 🧓

*Descrição do Projeto*
Este projeto foi desenvolvido seguindo o padrão MVC (Model-View-Controller) e o seu objetivo é oferecer uma interface acessível para pessoas idosas gerenciarem informações relacionadas à saúde.
O sistema permite cadastro, visualização, edição e exclusão de dados de forma intuitiva, onde a prioridade é a usabilidade e clareza.

*Integrantes da Equipe*

Felipe Santos de Freitas
João Vitor Pereira Cicílio
Laís Emmanueli Gomes Navarro

*Ambientes de desenvolvimento*
PHP - Estrutura
MySQL Workbench - Banco de Dados

*Como configurar e executar o projeto*
    1° Instalar o PHP

Baixe e instale o PHP no seu computador através do site oficial:
https://windows.php.net/download

OBS: Durante a instalação, adicione o PHP ao PATH do sistema.
Para testar se funcionou, abra o terminal e digite:
php -v

    2° Instalar o MySQL

Instale o MySQL.
Após a instalação, abra o MySQL Workbench e execute o código SQL fornecido abaixo para criar o banco de dados.

    3° Criar o banco de dados

Copie e cole este código SQL no seu MySQL:

CREATE DATABASE saude_idosos;

USE saude_idosos;

CREATE TABLE consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_paciente VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    data_consulta DATE NOT NULL,
    especialidade VARCHAR(100) NOT NULL,
    observacoes TEXT
);

    4° Configurar a conexão com o banco

No arquivo config/database.php, edite os dados de conexão conforme o seu ambiente local:

$host = "localhost";
$db = "saude_idosos";
$user = "root";
$pass = "root";

    5° Iniciar o servidor PHP

Abra o terminal dentro da pasta do projeto e digite:

php -S localhost:8000


Depois acesse no navegador:
👉 http://localhost:8000

    6° Testar o sistema

Com o sistema agora você pode:

- Adicionar novas consultas médicas

- Visualizar as informações cadastradas

- Editar consultas existentes

- Excluir registros

- Tecnologias utilizadas

Versões usadas:
PHP 8+
MySQL
HTML5
CSS3

*Objetivo educacional*

Este projeto faz parte de uma atividade avaliativa para o aprendizado do padrão MVC com operações CRUD (Create, Read, Update, Delete).
O foco é o desenvolvimento de um sistema funcional, organizado e acessível, voltado para o público idoso, com interface simples e design suave.