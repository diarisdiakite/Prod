<div class="operations form">
<?php echo $this->Form->create('Operation', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Edit Operation'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('assignement_id', array('class' => 'form-control'));
		echo $this->Form->input('user_id', array('class' => 'form-control'));
		echo $this->Form->input('name', array('class' => 'form-control'));
		echo $this->Form->input('duration', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Operation.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Operation.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Operations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Assignements'), array('controller' => 'assignements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignement'), array('controller' => 'assignements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
