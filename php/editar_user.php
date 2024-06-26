<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include 'conexao.php' ;
    $codigo = $_GET['cod'];
    $select = "SELECT * FROM tb_user where id_user = $codigo";
    $query = mysqli_query($conexao,$select);
    $result =  mysqli_fetch_array($query);
    ?>

      <div class="container text-center">
        <div class="row">
            <div class="col"></div>
          <div class="col">
            <form class="user" action="update_user.php" method="post">
            <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Código</label>
                  <input type="text" value="<?php echo $result['id_user']; ?>" class="form-control" id="exampleInputEmail1" name="id" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome</label>
                  <input type="text" value="<?php echo $result['nm_usuario']; ?>" class="form-control" id="exampleInputEmail1" name="nome" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Setor</label>
                  <input type="text" value="<?php echo $result['nm_setor']; ?>" class="form-control" id="exampleInputEmail1" name="setor" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Login</label>
                    <input type="text" value="<?php echo $result['login']; ?>" class="form-control" id="exampleInputEmail1" name="login" aria-describedby="emailHelp">
                  </div>
                <div class="botao">
                    <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
                                                                  
            </form>
          </div>
          <div class="col">
       
          </div>
        </div>
      </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>