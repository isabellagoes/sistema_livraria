<?php

$dt_compra = $_POST['dt_compra'];
$vl_compra = $_POST['vl_compra'];
$fk_cd_cliente = $_POST['fk_cd_cliente'];

include 'conexao.php';

$insert = "INSERT INTO tb_compra VALUES ('$dt_compra', '$vl_compra', '$fk_cd_cliente')";

$query = mysqli_query($conexao, $insert);

echo "Inserido com sucesso!";

?>