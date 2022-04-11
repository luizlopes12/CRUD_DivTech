<?php
//Arquivo de conexão
include "connect.php";
//Valores dos inputs do create-page
$nome = $_POST["nome"];
$cnpj = $_POST["cnpj"];
$especialidade = $_POST["especialidade"];
//Query para inserir 
    mysqli_query($connect,"insert into fornecedores(nome, cnpj, especialidade) values ('$nome','$cnpj','$especialidade')");
//Pagina de destino depois da execução query
header("location:create-page.php");

?>
