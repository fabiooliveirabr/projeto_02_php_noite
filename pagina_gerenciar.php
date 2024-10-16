<?php
    include "verificar_logado.php";
?>
<!-- pagina_gerenciar.php -->
<h1>Produtos cadastrados</h1>
<form action="" method="get">
    <input type="text" 
           name="palavra_pesquisada"
           placeholder="Digite um termo para pesquisar"
           size="60">

    <button type="submit">🔎Pesquisar</button>
</form>

<div id="produtos">
<link rel='stylesheet' href='estilo.css'>
<?php
include "conexao.php";

// 1º Passo - Comando SQL
$sql = "SELECT * FROM tb_produtos";

if(isset($_GET['palavra_pesquisada'])){
    $termo = $_GET['palavra_pesquisada'];
    $sql = "SELECT * FROM tb_produtos
            WHERE nome_produto LIKE '%$termo%' ";
}
// 2º Passo - Preparar a conexão
$consultar = $pdo->prepare($sql);
// 3º Passo - Tentar executar
try{
   $consultar->execute();
   if($consultar->rowCount() == 0){
       echo "Nenhum produto encontrado";
   }
   $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
   foreach($resultados as $item){
        $id_encontrado = $item['id_produto'];
        $nome_encontrado = $item['nome_produto'];
        $preco_encontrado = $item['preco'];
        $estoque_encontrado = $item['estoque'];
        $categoria_encontrada = $item['categoria'];
        $imagem_encontrada = $item['imagem'];
        echo "
            <div class='cartoes'>
                Cod. do produto: $id_encontrado <br>
                <img src='$imagem_encontrada' height='50'> <br>
                $nome_encontrado <br>
                R$ $preco_encontrado <br>
                Disponível: $estoque_encontrado <br>
                Categoria: $categoria_encontrada<br><br>
                <button> ✏️Editar</button>
                <a href='confirmar.php?cod=$id_encontrado'>
                    <button>🗑️Deletar</button>
                </a>
            </div>
        ";

   }

}catch(PDOException $erro){
    echo "Falhar ao consultar!".$erro->getMessage();
}
?>

</div>