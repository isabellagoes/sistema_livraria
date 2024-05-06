<?php

$nm_usuario = $_POST['nm_usuario'];
$nm_setor = $_POST['nm_setor'];
$login = $_POST['login'];
$senha = $_POST['senha'];

include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (NULL, '$nm_usuario', '$nm_setor', '$login', '$senha')";

$query = mysqli_query($conexao, $insert);

echo "Cadastrado com sucesso!";

?>