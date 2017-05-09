<?php 
include ("cabecalho.php");
?>

<h2>Cadastro de Produto</h2>

<form action="adiciona-produto.php">
	Nome:
	<input type="text" name="nome"><br/>
	Preço:
	<input type="number" name="preco"><br/>

	<input class="btn btn-primary" type="submit" value="Cadastrar">
</form>

<?php 
include ("rodape.php");
?>