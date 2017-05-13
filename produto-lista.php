<?php 	include ("cabecalho.php");
		include ("conecta-banco.php");
		include ("banco-produtos.php");
?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') : ?>
	<p class="alert-success">Produto removido com sucesso!</p>
<?php endif;?>

<table class="table table-striped table-bordered">
	<thead>
		<tr><th style="text-align: center; background: black; color: white " colspan="3">Produtos Cadastrados</th></tr>
	</thead>

	<?php 
		$produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) : 
	?>

	<tr>
		<td><?=$produto['nome']?></td>
		<td><?=$produto['preco']?></td>
		<td><a href="remove-produto.php?id=<?=$produto['id']?>" class="text-danger">Remover</a></td>
	</tr>

	<?php endforeach; ?>
	
</table>


<?php include ("rodape.php");?>