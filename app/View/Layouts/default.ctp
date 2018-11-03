<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PRODEFPE ML</title>

    <!-- Bootstrap -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php
            echo $this->Html->meta('icon');
			echo $this->Html->css('style');
            echo $this->Html->css('bootstrap.min');
            echo $this->Html->css('font-awesome.min');
            echo $this->Html->css('nprogress');
            echo $this->Html->css('daterangepicker');
            echo $this->Html->css('custom.min');
            echo $this->Html->css('animate.min');

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
	?>

  </head>
  <body>
<!--
<head>
	<?php //echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>:
		<?php //echo $this->fetch('title'); ?>
	</title>
	<?php
		//echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');

		//echo $this->fetch('meta');
		//echo $this->fetch('css');
		//echo $this->fetch('script');
	?>
</head>
-->
<body>
<body class="nav-md">
    <div class="container body">
      	<div class="main_container">
			<?php echo $this->element('sidebar');  ?>
			<?php echo $this->element('top_bar');  ?>
			<div class="right_col" role="main">
				<?php echo $this->Flash->render(); ?>

				<?php echo $this->fetch('content'); ?>
		</div>
		
        <?php echo $this->element('footer');  ?>
        </div>
			
	</div>
	<!-- jQuery -->
	<?php
            echo $this->Html->script('jquery.min');
            echo $this->Html->script('bootstrap.min.js');
            echo $this->Html->script('fastclick');
            echo $this->Html->script('nprogress');
            echo $this->Html->script('raphael.min');
            echo $this->Html->script('morris.min');
            echo $this->Html->script('bootstrap-progressbar.min');
            echo $this->Html->script('moment.min');
            echo $this->Html->script('daterangepicker');
            echo $this->Html->script('custom.min');
            echo $this->Html->script('gulpfile');
            echo $this->Html->script('npm');
	?>

  </body>
</html>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
