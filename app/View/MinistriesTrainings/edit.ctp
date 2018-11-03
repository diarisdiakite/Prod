<div class="ministriesTrainings form">
<?php echo $this->Form->create('MinistriesTraining'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ministries Training'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('ministry_id');
		echo $this->Form->input('training_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('MinistriesTraining.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('MinistriesTraining.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ministries Trainings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
