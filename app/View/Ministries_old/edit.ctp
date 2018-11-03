<div class="ministries form">
<?php echo $this->Form->create('Ministry', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Modifier un Ministère'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('name_id', array('class' => 'form-control'));
		echo $this->Form->input('slug', array('class' => 'form-control'));
		echo $this->Form->input('team_id', array('class' => 'form-control'));
		echo $this->Form->input('expert_id', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ministry.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Ministry.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planifications'), array('controller' => 'planifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planification'), array('controller' => 'planifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
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
