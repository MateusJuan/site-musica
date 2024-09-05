<?php
session_start();
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "artmusic";
$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}

// Verifica se o usuário está conectado
if (!isset($_SESSION['usuario_nome'])) {
    header("Location: login.html");
    exit;
}

$nome = $_SESSION['usuario_nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Art`Music</title>
    
</head>
<body>
    <ul class="abas_ul">
        <a href="partituras.html" class="abas_a" id="abas_a1">
            <li class="abas">Partituras</li>
        </a>
        <a href="" class="abas_a" id="abas_a1">
            <li class="abas">Cifras</li>
        </a>
        <a href="" class="abas_a" id="abas_a1">
            <li class="abas">Tablaturas</li>
        </a>

        <div class="abas_pesquisar">
            <input type="text" id="campoPesquisa" placeholder="O que você deseja aprender ou tocar hoje?" oninput="mostrarSugestoes()">
            <a href="#" onclick="pesquisar(event)">
                <span class="material-symbols-outlined">search</span>
            </a>
            <ul id="sugestoes" class="sugestoes"></ul>
        </div>

        <a href="">
            <li class="abas">Minhas Listas</li>
        </a>
        <a href="criarconta.html">
            <div class="perfil">
                <li id="nome"><?php echo htmlspecialchars($nome); ?></li>
                <span class="material-symbols-outlined">account_circle</span>
            </div>
        </a>
    </ul>
    <hr>
    <ul class="tipos_ul">
        <li class="tipos_li" id="todos_li1">Todos</li>
        <li class="tipos_li">Gospel/Religioso</li>
        <li class="tipos_li">Rock</li>
        <select name="Mais" id="" onchange="goToLink(this.value)">
            <option value="0">Mais</option>
            <option value="1">Pagode</option>
            <option value="2">Samba</option>
            <option value="3">Clássica</option>
        </select>
    </ul>
    <script src="abas.js"></script>
</body>
</html>
