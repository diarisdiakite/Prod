<div class="leashes form">
<?php echo $this->Form->create('Leash', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Ajouter une Filière'); ?></legend>
	<?php
		echo $this->Form->input('title', array('class' => 'form-control'));
		echo $this->Form->input('description', array('class' => 'form-control'));
		//echo $this->Form->input('sector_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Leashes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Emp.'), array('controller' => 'job_employments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Emp.'), array('controller' => 'job_employments', 'action' => 'add')); ?> </li>
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
