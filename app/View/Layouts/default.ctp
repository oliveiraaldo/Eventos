<?php

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
	Prime Eventos - Eventos de Fina Grandeza
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="menu">
			
				<?php echo $this->Html->link('Home', '/'); ?>
				<?php echo $this->Html->link('Eventos', '/eventos'); ?>
				<?php echo $this->Html->link('Sobre', '/sobre'); ?>
				<?php echo $this->Html->link('Contato', '/contato'); ?>
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			Desenvolvido por <?php echo $this->Html->link('Aldo Oliveira', 'http://www.logotiposdeempresas.com.br/'); ?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
