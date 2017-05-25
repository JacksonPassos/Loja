<?php 	include ("cabecalho.php");
		include ("conecta-banco.php");
		include ("banco-produtos.php");
?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') : ?>
	<p class="alert-success">Produto removido com sucesso!</p>
<?php endif;?>

<table class="table table-striped table-bordered">
	<thead>
		<tr><th style="text-align: center; background: black; color: white " colspan="4">Produtos Cadastrados</th></tr>
	</thead>

	<?php 
		$produtos = listaProdutos($conexao);
		foreach ($produtos as $produto) : 
	?>

	<tr>
		<td><?=$produto['nome']?></td>
		<td><?=$produto['preco']?></td>
		<td><?= substr($produto['descricao'], 0, 40) ?></td>
		<td><form action="remove-produto.php" method="POST">
				<input type="hidden" name="id" value="<?=$produto['id']?>"/>
				<button class="btn btn-danger">Remover</button>
			</form>
		</td>
	</tr>

	<?php endforeach; ?>
	
</table>


<?php include ("rodape.php");?>