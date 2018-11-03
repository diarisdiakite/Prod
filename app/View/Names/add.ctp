<div class="names form">
<?php echo $this->Form->create('Name', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Ajouter un Nom'); ?></legend>
	<?php
		echo $this->Form->input('approved', array('class' => 'form-control'));
		echo $this->Form->input('user_id', array('class' => 'form-control'));
		echo $this->Form->input('title', array('class' => 'form-control'));
		echo $this->Form->input('description_id', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Names'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
	</ul>
<?php else: ?>
<?php echo $this->Html->link(
		$this->Html->image('icon_info.png', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
		array('controller' => 'posts', 'action' => 'information'),
		array('target' => '_blank', 'escape' => false)
	);
?>
<?php endif; ?>
</div>
