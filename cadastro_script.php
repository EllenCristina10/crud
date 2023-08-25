<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
          include "conexao.php";

          $nome = $_POST['nome'];
          $endereco = $_POST['endereco'];
          $telefone = $_POST['telefone'];
          $email = $_POST['email'];
          $data_nascimento = $_POST['data_nascimento'];

          $sql = "INSERT INTO `pessoa`
          (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) VALUES
          ('$nome','$endereco','$telefone','$email','$data_nascimento')";

          if(mysqli_query($conn, $sql)){
            mensagem(" $nome cadastrado(a) com sucesso!",'success');
          }else
            mensagem(" $nome Não cadastrado!",'danger');

         ?>
         <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>