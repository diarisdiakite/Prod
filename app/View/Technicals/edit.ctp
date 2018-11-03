<div class="technicals form">
<?php echo $this->Form->create('Technical', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Modifier une Donnée Technique'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('structure_id', array('class' => 'form-control'));
		echo $this->Form->input('project_action_id', array('class' => 'form-control'));
		echo $this->Form->input('quantity', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Technical.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Technical.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Technicals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P. Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P. Actions'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
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
