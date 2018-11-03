<div class="assignements form">
<?php echo $this->Form->create('Assignement', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Modifier une Tache'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_id', array('class' => 'form-control'));
		echo $this->Form->input('user_id', array('class' => 'form-control'));
		echo $this->Form->input('name', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Assignement.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Assignement.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Assignements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
