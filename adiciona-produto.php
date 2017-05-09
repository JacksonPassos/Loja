<?php 
include ("cabecalho.php");
include ("conecta-banco.php");
?>
<?php
$nome = $_GET["nome"];
$preco = $_GET["preco"];

$query = "insert into produtos(nome, preco) values ('{$nome}', '{$preco}')";

if(mysqli_query($conexao, $query)){

?>

<div class="alert-success">
	<h3>Produto <?= $nome; ?> adicionado com sucesso! Seu preço é R$ <?= $preco;?>. </h3>
</div>

<?php
}else{

?>
<div class="alert-danger">
	<h3>Erro no cadastro do produto. Tente Novamente. </h3>
</div>

<?php
}
?>

<?php 
include ("rodape.php");
?>