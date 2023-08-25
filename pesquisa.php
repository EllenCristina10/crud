<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel = "stylesheet" href="css/bootstrap.min.css">

    <title>Pesquisar</title>
  </head>
  <body>

    <?php
      if (isset($_POST['busca'])) {
        $pesquisa = $_POST['busca'];
        // code...
      }else{
        $pesquisa = '';
      }

      include "conexao.php";

      $sql = "SELECT * FROM  pessoa WHERE nome LIKE '%$pesquisa%'";

      $dados = mysqli_query($conn, $sql);

      ?>

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Pesquisar</h1>
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="pesquisa.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
          </nav>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">Email</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Funções</th>
              </tr>
            </thead>
            <tbody>
               <?php

               while ($linha = mysqli_fetch_assoc($dados)){
                 $cod_pessoa = $linha['cod_pessoa'];
                 $nome = $linha['nome'];
                 $endereco = $linha['endereco'];
                 $telefone = $linha['telefone'];
                 $email = $linha['email'];
                 $data_nascimento = $linha['data_nascimento'];  
                 $data_nascimento = mostra_data($data_nascimento);

                 echo "<tr>
                            <th scope='row'>$nome</th>
                            <td>$endereco</td>
                            <td>$telefone</td>
                            <td>$email</td>
                            <td>$data_nascimento</td>
                            <td width=150px>
                                <a href='cadastro_edit.php?id=$cod_pessoa' class= 'btn btn-success btn-sm'>Editar</a>
                                <a href='#' class='btn btn-danger btn-sm'>Excluir</a>

                            </td>
                        </tr>";
               }
               
              ?>

            </tbody>
          </table>
          <a href="index.php" class="btn btn-info">Voltar para o início</a>
        </div>
      </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>