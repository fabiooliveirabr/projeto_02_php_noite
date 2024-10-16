<?php    include "verificar_logado.php";  ?>
<!-- pagina_cadastrar.php -->
<h1>Cadastrar produto</h1>
<br>
<form action="cadastrar.php" method="post">
    <label>Nome do produto:</label><br>
    <input type="text" name="descricao_digitada"> <br><br>

    <label>Preço:</label><br>
    <input type="number" step="0.01" name="preco_digitado"> <br><br>

    <label>Estoque:</label><br>
    <input type="number" name="estoque_digitado"> <br><br>

    <label>Foto:</label><br>
    <input type="text" name="foto_escolhida"> <br><br>

    <label>Categoria:</label><br>
    <select name="categoria_escolhida">
        <option value="">Selecione</option>
        <option value="Cesta básica">Cesta básica</option>
        <option value="Limpeza">Limpeza</option>
        <option value="Enlatados">Enlatados</option>
        <option value="Molhos">Molhos</option>
        <option value="Temperos">Temperos</option>
    </select> <br><br>

    <button type="submit">Cadastrar</button>

    
    


</form>