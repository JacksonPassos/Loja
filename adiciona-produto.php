<?php 
include ("cabecalho.php");
include ("conecta-banco.php");
?>
<?php
function insereProduto($conexao, $nome, $preco){
	$query = "insert into produtos(nome, preco) values ('{$nome}', '{$preco}')";
	return mysqli_query($conexao, $query);
}

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