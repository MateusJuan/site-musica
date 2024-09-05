<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "artmusic"; 
$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$nome = $conexao->real_escape_string($nome);
$email = $conexao->real_escape_string($email);
$senha = $conexao->real_escape_string($senha);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conexao->query($sql) === TRUE) {
    echo "<script>
        alert('Cadastro realizado com sucesso!');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Erro ao realizar cadastro: " . $conexao->error . "');
        window.location.href = 'error.php';
    </script>";
}

$conexao->close();
?>
