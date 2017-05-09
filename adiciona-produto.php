<?php 
include ("cabecalho.php");
?>
<?php

$nome = $_GET["nome"];
$preco = $_GET["preco"];

?>

<div class="alert-success">
	<h3>Produto <?= $nome; ?> adicionado com sucesso!</h3>
</div>


<?php 
include ("rodape.php");
?>