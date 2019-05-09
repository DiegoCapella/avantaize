<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="container">
		<div class="text-center div-error">
			<p class="_404">404</p>
			<p class="_1">Esta Página</p>
			<p class="_2">Não Existe</p>
			<a href="<?php echo home_url(); ?>" class="btn btn-warning">Voltar para a página inicial</a>
		</div>
	</div>
</body>
</html>