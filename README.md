# Gestão AIEX Contábeis

Um sistema de gerenciamento de alunos e semestres construído com Laravel.

## Visão Geral

Este projeto é uma aplicação web desenvolvida em Laravel para gerenciar informações de alunos e semestres. Ele fornece funcionalidades básicas de CRUD (Criar, Ler, Atualizar, Deletar) para essas duas entidades. O sistema também inclui autenticação de usuários e um painel administrativo.

## Funcionalidades

*   **Autenticação de Usuários:** Sistema completo de login e registro de usuários.
*   **Painel de Controle:** Uma página inicial para usuários autenticados.
*   **Gerenciamento de Alunos:**
    *   Listar todos os alunos.
    *   Adicionar novos alunos (com validação de dados).
    *   Editar informações de alunos existentes.
    *   Excluir alunos.
*   **Gerenciamento de Semestres:**
    *   Listar todos os semestres.
    *   Adicionar novos semestres.
    *   Excluir semestres.
*   **Controle de Acesso:** O gerenciamento de semestres é restrito a usuários administradores.

## Tecnologias Utilizadas

### Backend
*   [PHP 8.2](https://www.php.net/)
*   [Laravel 11](https://laravel.com/)
*   [Laravel Sanctum](https://laravel.com/docs/11.x/sanctum) (para autenticação de API, embora não seja totalmente utilizado)
*   [Laravel UI](https://laravel.com/docs/11.x/ui) (para scaffolding de autenticação)

### Frontend
*   [AdminLTE 3](https://adminlte.io/) (template do painel administrativo)
*   [Bootstrap 5](https://getbootstrap.com/)
*   [Vue.js 3](https://vuejs.org/) (configurado, mas não extensivamente utilizado)
*   [Vite](https://vitejs.dev/) (para compilação de assets)
*   [jQuery](https://jquery.com/)
*   [SweetAlert2](https://sweetalert2.github.io/) (para notificações)
*   [DataTables.net](https://datatables.net/) (para tabelas interativas)

## Estrutura do Banco de Dados

O banco de dados consiste nas seguintes tabelas principais:

*   **`users`**: Armazena as informações dos usuários do sistema.
    *   `id`, `name`, `email`, `password`, etc.
*   **`alunos`**: Armazena as informações dos alunos.
    *   `id`: Identificador único
    *   `matricula` (string, unique): Matrícula do aluno.
    *   `nome` (string): Nome do aluno.
    *   `email` (string, unique): E-mail do aluno.
    *   `telefone` (string): Telefone de contato.
    *   `semestre_ingresso` (string): Semestre de ingresso do aluno (ex: "2024.1").
*   **`semesters`**: Armazena os semestres disponíveis no sistema.
    *   `id`: Identificador único
    *   `identificador` (string, unique): O identificador do semestre (ex: "2024.1").
    *   `made_by` (string): Nome do usuário que cadastrou o semestre.

## Instalação e Configuração

Siga os passos abaixo para configurar o ambiente de desenvolvimento local.

**Pré-requisitos:**
*   PHP >= 8.2
*   Composer
*   Node.js e NPM
*   Um banco de dados (MySQL, PostgreSQL, etc.)

**Passos:**

1.  **Clone o repositório:**
    ```bash
    git clone https://github.com/seu-usuario/Gestao-AIEX-Contabeis.git
    cd Gestao-AIEX-Contabeis
    ```

2.  **Instale as dependências do PHP:**
    ```bash
    composer install
    ```

3.  **Instale as dependências do JavaScript:**
    ```bash
    npm install
    ```

4.  **Configure o arquivo de ambiente:**
    *   Copie o arquivo de exemplo: `cp .env.example .env`
    *   Abra o arquivo `.env` e configure as informações do banco de dados (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

5.  **Gere a chave da aplicação:**
    ```bash
    php artisan key:generate
    ```

6.  **Execute as migrações do banco de dados:**
    *   Isso criará todas as tabelas necessárias.
    ```bash
    php artisan migrate
    ```

7.  **(Opcional) Popule o banco de dados com dados de teste:**
    *   Se houver seeders disponíveis, execute-os.
    ```bash
    php artisan db:seed
    ```

8.  **Compile os assets do frontend:**
    *   Para desenvolvimento:
        ```bash
        npm run dev
        ```
    *   Para produção:
        ```bash
        npm run build
        ```

9.  **Inicie o servidor de desenvolvimento:**
    ```bash
    php artisan serve
    ```

    A aplicação estará disponível em `http://127.0.0.1:8000`.

## Como Usar

1.  **Registro e Login:**
    *   Acesse a aplicação e crie uma nova conta de usuário.
    *   Faça login para acessar o painel de controle.

2.  **Gerenciando Alunos:**
    *   No painel, navegue até a seção de "Alunos".
    *   Utilize os botões para adicionar, editar ou remover alunos.

3.  **Gerenciando Semestres (Admin):**
    *   Se você for um administrador, terá acesso à configuração de semestres.
    *   Adicione ou remova semestres conforme necessário.
