<?php
include "./connect.php";
//dados enviados do update-page
$idGet = $_POST['id'];
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$especialidade = $_POST['especialidade'];
//Query para atualizar
mysqli_query($connect,"update fornecedores set nome = '$nome', cnpj = '$cnpj', especialidade = '$especialidade' where id = $idGet");

//Pagina de destino depois da execução query
header("location:../index.php");
?>