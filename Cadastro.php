<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cadastros";

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Obtém os valores do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Prepara e executa a consulta SQL
    $sql = "INSERT INTO pessoa (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados cadastrados com sucesso!";
    } else {
        echo "Erro ao cadastrar os dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
?>
