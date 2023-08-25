<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel = "stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de Cadastro</title>
  </head>
  <body>


    <?php

      include "conecao.php";
      $id = $_GET['id'] ?? '';
      $sql = "SELECT * FROM pesssoa WHERE cod_pessoa = $id";

      $dados = mysqli_query($conn, $sql);

      $linha = mysqli_fetch_assoc($dados);



      ?>


    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cadastro</h1>
          <form action="cadastro_script.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" name="nome" required value=" <? php echo $linha['nome'];?>">
              </div>
              <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" value="<? php echo $linha['endereco'];?>">>
              </div>
              <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="<? php echo $linha['telefone'];?>">>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="<? php echo $linha['email'];?>">>
              </div>
              <div class="form-group">
                <label for="dt_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" value="<? php echo $linha['data_nascimento'];?>">>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-success" value="Salvar Alterações">
              </div>
          </form>
          <a href="index.php" class="btn btn-info">Voltar para o início</a>
        </div>
      </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>