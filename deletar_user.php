<?php

$codigo = $_GET['cod'];

include 'conexao.php';

//Dados para inserir os dados
$deletar = "DELETE FROM tb_user WHERE id_user = $codigo";


$query = mysqli_query($conexao, $update);

if ($query) {
    echo "<script>('Deletado com sucesso'); history.back();</script>";
} else {
    echo "<script>('Error no seu script php'); history.back();</script>";

}

?>