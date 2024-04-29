<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

include 'conexao.php';

$select = "SELECT * FROM tb_user WHERE login = 'nome'";

$query = mysqli_query($conexao, $select);

$result = mysqli_fetch_array($query);

$name_banco = $result['login'];

?>