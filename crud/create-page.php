<?php
include "./header-pages.php";
include "connect.php";
?>

    <!--Manda os dados dos inputs para o create.php que manda pro banco-->
    <form action="create.php" method="post" id="cadastro-form">
    <input type="hidden" name="max_file_size" value="99999999">
    <p>
    <label class="create-lbl">Nome:</label>
    <input type="text" name="nome" class="create-in">
    </p>   
    <p>
    <label class="create-lbl">CNPJ:</label>
    <input type="number" max='99999999999999' name="cnpj" class="create-in">
    </p>
    <p>
    <label class="create-lbl">especialidade:</label>
    <select name="especialidade" id="espec" class="create-in">
        <option value="comercio">Comércio</option>
        <option value="servico">Serviço</option>
        <option value="industria">Indústria</option>
    </select>
    </p>
    <p class="btn">
    <button type="submit" class="create-btn" id="cadastro-btn">Cadastrar</button>
    </p>
    </form>


<?php
include "../src/php/footer.php";
?>