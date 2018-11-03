<div class="activationsInserts form">
<?php echo $this->Form->create('ActivationsInsert'); ?>
	<fieldset>
		<legend><?php echo __('Edit Activations Insert'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('activation_id');
		echo $this->Form->input('insert_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ActivationsInsert.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ActivationsInsert.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Activations Inserts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inserts'), array('controller' => 'inserts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insert'), array('controller' => 'inserts', 'action' => 'add')); ?> </li>
	</ul>
</div>
