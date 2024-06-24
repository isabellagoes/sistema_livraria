<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$nm_editora = $_POST['nm_editora'];
$nm_endereco = $_POST['nm_endereco'];
$nr_endereco = $_POST['nr_endereco'];
$nm_bairro = $_POST['nm_bairro'];
$nr_telefone = $_POST['nr_telefone'];
$nm_gerente = $_POST['nm_gerente'];

include 'conexao.php';

$insert = "INSERT INTO tb_cliente VALUES ('$nm_editora', '$nm_endereco', '$nr_endereco', '$nm_bairro', '$nm_gerente')";

$query = mysqli_query($conexao, $insert);

if ($query) {
    echo "Inserido com sucesso!";
} else {
    echo "Erro ao inserir: " . mysqli_error($conexao);
}
?>