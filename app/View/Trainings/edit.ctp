<div class="trainings form">
<?php echo $this->Form->create('Training'); ?>
	<fieldset>
		<legend><?php echo __('Edit Training'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('project_action_id');
		echo $this->Form->input('description');
		echo $this->Form->input('ministry_id');
		echo $this->Form->input('sector_id');
		echo $this->Form->input('leash_id');
		echo $this->Form->input('job_employment_id');
		echo $this->Form->input('type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Training.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Training.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Employments'), array('controller' => 'job_employments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Employment'), array('controller' => 'job_employments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
