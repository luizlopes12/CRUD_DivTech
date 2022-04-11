<?php
//Arquivo de conexão
include "connect.php";
//Query para pegar os dados do banco
$query = mysqli_query($connect, "select * from fornecedores");
?>
<div class="dados-container">
    <h2>Fornecedores</h2>
    <div class="dados">
<?php
//Percorre a query e coloca os dados no array $show
while($show = mysqli_fetch_array($query)){
?>
        <div class="item">
        <!--Dados do heroi-->
        <p><span>Nome: <?php echo $show[1];?></p>
        <p><span>CNPJ: <?php echo $show[2];?></p>
        <p><span>Especialização: <?php echo $show[3];?></p>

        <!--Botão para atualizar-->
        <a href="crud/update-page.php?id=<?php echo $show[0];?>">Atualizar</a>
        <!--Botão para excluir-->
        <a href="crud/delete.php?id=<?php echo $show[0];?>">Excluir</a>
        </div>
<?php
}
?>
    </div>

</div>

