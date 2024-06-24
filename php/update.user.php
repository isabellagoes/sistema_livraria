<?php

$id_user = $_POST['id_user'];
$nm_usuario = $_POST['nm_usuario'];
$nm_setor = $_POST['nm_setor'];
$login = $_POST['login'];


include 'conexao.php';

$update = "UPDATE `tb_user` SET `nm_usuario` = '$nm_usuario', `nm_setor` = '$nm_setor', `login` = '$login' WHERE `id_user` = $id_user
";

$query = mysqli_query($conexao, $update);

echo "Inserido com sucesso!";

?>
