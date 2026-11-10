<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>@yield('title')</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 4.5rem;
      }
    </style>
  </head>
  <body class="bg-light">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark shadow-sm">
        <div class="container">
          <a class="navbar-brand fw-bold" href="/">Sistema de Alunos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link @yield('home')" aria-current="page" href="/">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('new')" href="/new">Cadastrar Aluno</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <main class="flex-shrink-0 my-4">
      <div class="container">
        @yield('content')
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
