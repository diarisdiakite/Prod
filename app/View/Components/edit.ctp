<div class="components form">
<?php echo $this->Form->create('Component'); ?>
	<fieldset>
		<legend><?php echo __('Edit Component'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Component.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Component.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Components'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Expected Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expected Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
