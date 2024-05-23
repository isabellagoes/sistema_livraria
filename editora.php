<?php
$nm_editora = $_POST['nm_editora'];
$nm_endereco = $_POST['nm_endereco'];
$nr_endereco = $_POST['nr_endereco'];
$nm_bairro = $_POST['nm_bairro'];
$nr_telefone = $_POST['nr_telefone'];
$nm_gerente = $_POST['nm_gerente'];

include 'conexao.php';

$insert = "INSERT INTO tb_cliente VALUES ('$nm_editora', '$nm_endereco', '$nr_endereco', '$nm_bairro', '$nm_gerente')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso!";

?>