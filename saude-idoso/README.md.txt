🧓 Projeto MVC — Sistema de Saúde para Idosos
💙 Descrição do Projeto

Este projeto foi desenvolvido seguindo o padrão MVC (Model-View-Controller) e tem como objetivo oferecer uma interface simples e acessível para pessoas idosas gerenciarem informações básicas relacionadas à saúde.
O sistema permite cadastrar, visualizar, editar e excluir dados de forma intuitiva, priorizando a usabilidade e clareza nas páginas.

Ele foi construído utilizando PHP e MySQL, com foco em organização do código, boas práticas e acessibilidade visual.

👩‍💻 Integrantes da Equipe

Felipe Santos de Freitas
João Vitor Pereira Cicílio
Laís Emmanueli Gomes Navarro

⚙️ Como configurar e executar o projeto
1️⃣ Instalar o PHP

Baixe e instale o PHP no seu computador através do site oficial:
👉 https://windows.php.net/download

Durante a instalação, adicione o PHP ao PATH do sistema.

Para testar se funcionou, abra o terminal e digite:

php -v

2️⃣ Instalar o MySQL

Instale o MySQL.
Após a instalação, abra o MySQL Workbench e execute o código SQL fornecido abaixo para criar o banco de dados.

3️⃣ Criar o banco de dados

Copie e cole este código SQL no seu MySQL:

-- Criar o banco de dados
CREATE DATABASE saude_idosos;

-- Usar o banco
USE saude_idosos;

-- Criar a tabela de informações médicas
CREATE TABLE consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_paciente VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    data_consulta DATE NOT NULL,
    especialidade VARCHAR(100) NOT NULL,
    observacoes TEXT
);

4️⃣ Configurar a conexão com o banco

No arquivo config/database.php, edite os dados de conexão conforme o seu ambiente local:

$host = "localhost";
$db = "saude_idosos";
$user = "root";
$pass = "root";

5️⃣ Iniciar o servidor PHP

Abra o terminal dentro da pasta do projeto e digite:

php -S localhost:8000


Depois acesse no navegador:
👉 http://localhost:8000

6️⃣ Testar o sistema

Agora você pode:

➕ Adicionar novas consultas médicas

👀 Visualizar as informações cadastradas

✏️ Editar consultas existentes

❌ Excluir registros

🧠 Tecnologias utilizadas

PHP 8+

MySQL

HTML5

CSS3

Arquitetura MVC

🌟 Objetivo educacional

Este projeto faz parte de uma atividade avaliativa para o aprendizado do padrão MVC com operações CRUD (Create, Read, Update, Delete).
O foco é o desenvolvimento de um sistema funcional, organizado e acessível, voltado para o público idoso, com interface simples e design suave.

💖 Desenvolvido com carinho por estudantes de programação para tornar a tecnologia mais acessível a todos. 💖