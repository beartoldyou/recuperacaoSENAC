<!doctype php>
<php lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Assinar</title>
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="home.php">ONG AARJ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
  
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastro.php">Assinar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listagem.php">Lista de Assinaturas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fotos.php">Fotos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.php">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre.php">Sobre nós</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main style="background-color: rgb(8, 61, 24);">
        <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
            <div class="shadow p-5 mb-5 bg-body rounded-3 text-center" style="width: 30%;">
                <div class="py-3">
                    <h1>Assinar</h1>
                    <hr />
                </div>
                <form action="cadastrar-user.php" method="post" class="text-start">
                    <div class="mb-3">
                        <label for="inputNome" class="form-label">Nome</label>
                        <input type="text" class="form-control item" id="inputNome" name="txtNome" aria-describedby="nomeDesc" required>
                        <div id="nomeDesc" class="form-text">Informe seu nome completo.</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">E-Mail</label>
                        <input type="email" class="form-control item" id="inputEmail" name="txtEmail" aria-describedby="emailDesc" required>
                        <div id="emailDesc" class="form-text">Informe seu email.</div>
                    </div>
                    <div class="mb-3">
                        <label for="inputTelefone" class="form-label">Telefone</label>
                        <input type="tel" class="form-control item" id="inputTelefone" name="txtTel" data-mask="00 0000#-0000" data-mask-reverse="true" aria-describedby="TelDesc" required>
                        <div id="TelDesc" class="form-text">Informe seu telefone.</div>
                    </div>
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </form>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

</body>

</php>