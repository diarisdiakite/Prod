<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		Connexion
	</title>

  <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('styles');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

</head>
<div class="wrapper2">


  <?php echo $this->Flash->render(); ?>

  <?php echo $this->fetch('content'); ?>
</div>
