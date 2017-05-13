<?php 
include ("cabecalho.php");
include ("conecta-banco.php");
include ("banco-produtos.php");

$nome = $_GET["nome"];
$preco = $_GET["preco"];

if(insereProduto($conexao, $nome, $preco)){
?>

<div class="text-success">
	<h3>Produto <?= $nome; ?> adicionado com sucesso! Seu preço é R$ <?= $preco;?>. </h3>
</div>

<?php
}else{
	$msg = mysqli_error($conexao);
?>
<div class="text-danger">
	<h3>Erro no cadastro do produto. <?= $msg ?> </h3>
</div>

<?php
}
?>

<?php 
include ("rodape.php");
?>