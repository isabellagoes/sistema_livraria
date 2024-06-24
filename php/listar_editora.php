<?php include 'conexao.php'; ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lista de Editoras</title>

    <link rel="stylesheet" href="../pages/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c0f408d1cc.js" crossorigin="anonymous"></script>
    
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro_cliente.html">Cadastro de Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro_editora.html">Cadastro de Editora</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Relatórios
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../php/listar_user.php">Relatório de Usuários</a></li>
            <li><a class="dropdown-item" href="../php/listar_cliente.php">Relatório de Clientes</a></li>
            <li><a class="dropdown-item" href="../php/listar_editora.php">Relatório de Editoras</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container">

        <h2>Lista de Editoras</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Setor</th>
      <th scope="col">Login</th>
    </tr>
  </thead>
  <tbody>

  <?php 
  $select = "SELECT * FROM tb_user";
  $query = mysqli_query($conexao, $select);
  while ($result = mysqli_fetch_array($query)) {;
  ?>

    <tr>
      <th scope="row"><?php echo $result['id_user']; ?></th>
      <td> <?php echo $result['nm_usuario']; ?> </td>
      <td> <?php echo $result['nm_setor']; ?> </td>
      <td> <?php echo $result['login']; ?> </td>
    </tr>

    <?php } ?>

</tbody>
</table>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>