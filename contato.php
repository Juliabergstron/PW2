<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Etec - Centro Paula Souza</title>
<link href="css.contato.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script> 


</head>

<body>

<header class="header-fixo">

  <!-- FAIXA COM LOGO -->
  <div class="topo-logo">
    <img src="../Imagens/logo.jpg" alt="Logo ETEC">
  </div>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">

      <a class="navbar-brand fw-bold" href="index.php">
        <span class="logo-etec">ETEC</span>
      </a>

      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="cursos.php">Cursos</a></li>
          <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
          <li class="nav-item"><a class="nav-link" href="gestao.php">Gestão</a></li>
        </ul>
      </div>

    </div>
  </nav>

</header>
<section class="container mt-5">

<h2 class="titulo-secao text-center mb-5">Fale Conosco</h2>

  <div class="row justify-content-center">
    <div class="col-md-6">

      <form action="processa.php" method="POST" class="form-custom">

        <div class="mb-3">
          <label class="form-label">Nome</label>
          <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Endereço</label>
          <input type="text" name="endereco" class="form-control" placeholder="Digite seu endereço">
        </div>

        <div class="mb-3">
          <label class="form-label">Telefone</label>
          <input type="text" name="telefone" class="form-control" placeholder="(11) 99999-9999">
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="seuemail@email.com" required>
        </div>

        <button type="submit" class="btn btn-enviar w-100">Enviar</button>

      </form>

    </div>
  </div>
<br><br><br>
</section>

<!-- FOOTER MODERNO -->
<footer class="footer-custom pt-5 pb-3">

  <div class="container">

    <div class="row">

      <div class="col-md-4">
        <h5>ETEC</h5>
        <p>Educação pública de qualidade, formando profissionais para o futuro.</p>
      </div>

      <div class="col-md-4">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li><a href="index.php" class="footer-link">Home</a></li>
          <li><a href="cursos.php" class="footer-link">Cursos</a></li>
          <li><a href="contato.php" class="footer-link">Contato</a></li>
        </ul>
      </div>

      <div class="col-md-4">
        <h5>Contato</h5>
        <p>Email: etec@email.com</p>
        <p>Telefone: (11) 0000-0000</p>
      </div>

    </div>

    <hr>

    <p class="text-center mb-0">© 2026 Centro Paula Souza</p>

  </div>

</footer>
