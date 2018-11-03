<div class="activationsStructures form">
<?php echo $this->Form->create('ActivationsStructure'); ?>
	<fieldset>
		<legend><?php echo __('Add Activations Structure'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('activation_id');
		echo $this->Form->input('structure_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Activations Structures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
