<div class="realizations form">
<?php echo $this->Form->create('Realization'); ?>
	<fieldset>
		<legend><?php echo __('Edit Realization'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('insert_id');
		echo $this->Form->input('training_id');
		echo $this->Form->input('structure_id');
		echo $this->Form->input('description');
		echo $this->Form->input('focal_point_id');
		echo $this->Form->input('finances_responsible_id');
		echo $this->Form->input('beginning');
		echo $this->Form->input('duration');
		echo $this->Form->input('quantity');
		echo $this->Form->input('price');
		echo $this->Form->input('amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Realization.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Realization.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Realizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inserts'), array('controller' => 'inserts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insert'), array('controller' => 'inserts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Finances Responsibles'), array('controller' => 'finances_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finances Responsible'), array('controller' => 'finances_responsibles', 'action' => 'add')); ?> </li>
	</ul>
</div>
