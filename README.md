# 📚 Sistema de Controle de Alunos

Projeto web de gerenciamento e CRUD de alunos desenvolvido com **Laravel 11** e **Blade**, concebido para fins didáticos na disciplina de **Programação Web III (Web 3)**.

---

## 📌 Sobre o Projeto

O objetivo deste sistema é consolidar conceitos fundamentais do ecossistema Laravel e desenvolvimento web back-end/full-stack, incluindo:
- Arquitetura **MVC** (Model-View-Controller).
- Mapeamento Objeto-Relacional com **Eloquent ORM**.
- Criação e execução de migrações de banco de dados (**Migrations**).
- Definição e manipulação de rotas web RESTful.
- Criação de templates reutilizáveis com a engine **Blade**.
- Tratamento e validação de requisições HTTP (`Store` e `Update`).
- Interface responsiva com componentes **Bootstrap 5**.

---

## 🚀 Funcionalidades

- [x] **Listagem de Alunos:** Visualização tabular de todos os alunos cadastrados em ordem alfabética.
- [x] **Cadastro de Aluno:** Formulário com validação de dados (nome, e-mail e matrícula).
- [x] **Edição de Aluno:** Atualização dos dados cadastrais com preenchimento automático.
- [x] **Exclusão de Aluno:** Remoção de registros com diálogo de confirmação prévia.
- [x] **Feedback ao Usuário:** Mensagens de alerta de sucesso e validação de erros nas operações.

---

## 🛠️ Tecnologias Utilizadas

- **Linguagem:** PHP 8.2+
- **Framework:** [Laravel 11](https://laravel.com/)
- **ORM:** Eloquent ORM
- **Banco de Dados:** SQLite (padrão do projeto) / MySQL
- **Frontend / Template Engine:** Blade + Bootstrap 5.3

---

## 📂 Estrutura Principal do Projeto

```text
Exercicio_Laravel/
├── app/
│   ├── Http/Controllers/
│   │   └── AlunoController.php        # Lógica de controle e regras do CRUD
│   └── Models/
│       └── Aluno.php                  # Modelo Eloquent com $fillable definido
├── database/
│   ├── migrations/
│   │   └── ..._create_alunos_table.php # Definição da tabela 'alunos'
│   └── database.sqlite                # Banco de dados local (SQLite)
├── resources/
│   └── views/
│       ├── layout/
│       │   └── base.blade.php         # Layout base e navegação
│       ├── home.blade.php             # Tabela de listagem dos alunos
│       ├── new.blade.php              # Formulário de novo cadastro
│       └── edit.blade.php             # Formulário de edição
├── routes/
│   └── web.php                        # Rotas da aplicação
└── artisan                            # Utilitário de linha de comando do Laravel
```

---

## ⚙️ Instalação e Execução

### Pré-requisitos
- **PHP** >= 8.2 (com extensões `sqlite3`, `pdo_sqlite`, `mbstring`, `openssl`, `curl`)
- **Composer** instalado

### Passo a Passo

1. **Instalar as dependências do Composer:**
   ```bash
   composer install
   ```

2. **Configurar as variáveis de ambiente:**
   Copie o arquivo de exemplo `.env.example` para `.env` (caso ainda não exista):
   ```bash
   # Windows (PowerShell)
   Copy-Item .env.example .env

   # Linux / macOS / Bash
   cp .env.example .env
   ```

3. **Gerar a chave da aplicação:**
   ```bash
   php artisan key:generate
   ```

4. **Criar o arquivo do banco de dados (SQLite) e rodar as migrações:**
   ```bash
   # Windows (PowerShell)
   if (!(Test-Path database/database.sqlite)) { New-Item database/database.sqlite -ItemType File }

   # Linux / macOS / Bash
   touch database/database.sqlite
   ```
   Execute as migrações:
   ```bash
   php artisan migrate
   ```

5. **Iniciar o servidor de desenvolvimento:**
   ```bash
   php artisan serve
   ```

6. Acesse no navegador:
   ```text
   http://localhost:8000
   ```

---

## 🗺️ Rotas Disponíveis

| Método | Rota | Descrição |
|---|---|---|
| `GET` | `/` | Página inicial com a lista de alunos |
| `GET` | `/new` | Formulário para cadastrar novo aluno |
| `POST` | `/alunos/save` | Salva o novo aluno no banco de dados |
| `GET` | `/alunos/{id}` | Formulário de edição do aluno correspondente |
| `PUT` | `/alunos/{id}` | Atualiza os dados do aluno no banco |
| `DELETE` | `/alunos/{id}` | Remove o aluno do banco de dados |

---

## 🎓 Contexto Acadêmico

Projeto prático desenvolvido para avaliação e fixação de conteúdos na disciplina de **Web 3** (Programação Web III), com ênfase no uso do framework Laravel, arquitetura MVC e manipulação de entidades com Eloquent ORM.
