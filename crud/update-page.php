<?php
//header
include "./header-pages.php";
//conexao
include "connect.php";
//Id do heroi enviado da pagina rprincipal
$idGet = $_GET["id"];
//Query para selecionar o heroi com esse id
$queryById = mysqli_query($connect,"select * from fornecedores where id = $idGet");
//Percorre a query e coloca os dados no array $show
while($show = mysqli_fetch_array($queryById)){
?>
<br>
<div class="form">
    <form action="./update.php" method="post">
    <p>
    <input type="hidden" name="id" value="<?php echo $show[0]; ?>">
    <label class="create-lbl">Nome:</label>
    <input type="text" name="nome" class="create-in" value="<?php echo $show[1]; ?>">
    </p>
    <p>
    <label class="create-lbl">CNPJ:</label>
    <input type="text" name="cnpj" class="create-in" value="<?php echo $show[2]; ?>">
    </p>
    <p>
    <label class="create-lbl">CNPJ:</label>
    <select name="especialidade" id="espec" class="create-in">
        <option value="comercio">Comércio</option>
        <option value="servico">Serviço</option>
        <option value="industria">Indústria</option>
    </select>
    </p>
    <p class="btn">
    <!--Botão que envia os dados pro update.php-->
    <button type="submit" class="create-btn">Atualizar</button>
    </p>
    </form>
</div>
<?php
}
include "../src/php/footer.php";
?>