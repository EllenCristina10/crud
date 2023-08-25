<?php
    $servername = "localhost";
    $username = "ellen"; // Nome de usuário do banco de dados
    $password = "123456"; // Senha do banco de dados
    $dbname = "empresa";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        echo "Falha na conexão: " . $conn->connect_error;
    } //else 
       // echo "Conexão bem-sucedida! ";
    
    function mensagem($texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto 
            </div>";
    }

    function mostra_data($data){
        $d = explode('-', $data);
        $escreve = $d[2] . "/" .$d[1] . "/" .$d[0];
        return $escreve;
    }
?>