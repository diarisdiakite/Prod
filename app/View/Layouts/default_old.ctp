<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<div id="entete">
		<?php echo $this->Html->link(
				$this->Html->image('Entete1.jpg', array('alt' => $cakeDescription, 'border' => '0')),
				'http://www.magegroupcf.com/',
				array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
			);
		?>

</div>
<table class="menuprincipal">
<center>

<td class="pmenu" style="text-decoration: underline" width="20%">
	<?php echo $this->Html->link('Home', array('controller' => 'posts', 'action' => 'index')); ?>
</td>
<td class="pmenu" style="text-decoration: underline" width="20%">
	<?php echo $this->Html->link('Composantes', array('controller' => 'composants', 'action' => 'index')); ?>
</td>
<td class="pmenu" width="16%">
	<?php echo $this->Html->link('Ministères', array('controller' => 'ministries', 'action' => 'index')); ?>
</td>
<td class="pmenu" width="16%">
	<?php echo $this->Html->link('Partenaires', array('controller' => 'structures', 'action' => 'index')); ?>
</td>
<td class="pmenu" width="16%">
	<?php echo $this->Html->link('Points focaux', array('controller' => 'focal_points', 'action' => 'index')); ?>
</td>
<td class="pmenu" width="16%">
	<?php
	if(AuthComponent::user()){
		echo $this->HTML->link('logout', array('controller'=>'users', 'action'=>'logout'));
		//echo $user['User']['id'];
	}else {
		echo $this->HTML->link('login', array('controller'=>'users', 'action'=>'login'));
	}
	?>
</td>
</table>

</head>
<body>
	<div id="container">
		<div id="header">
			<?php
			//if(AuthComponent::user()){
			//	echo $this->HTML->link('logout', array('controller'=>'users', 'action'=>'logout'));
				//echo $user['User']['id'];
			//}else {
			//	echo $this->HTML->link('login', array('controller'=>'users', 'action'=>'login'));
		//	}
			?>
		</div>
		<div id="content">


			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php //echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
