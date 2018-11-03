<div class="projectActions form">
<?php echo $this->Form->create('ProjectAction', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Ajouter un Project Action'); ?></legend>
	<?php
		echo $this->Form->input('title', array('class' => 'form-control'));
		echo $this->Form->input('description', array('class' => 'form-control'));
		echo $this->Form->input('type_id', array('class' => 'form-control'));
		//echo $this->Form->input('expected_result_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Project Actions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expected Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expected Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
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
