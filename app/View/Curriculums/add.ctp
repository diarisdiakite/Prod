<div class="curriculums form">
<?php echo $this->Form->create('Curriculum', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Add Curriculum'); ?></legend>
	<?php
		echo $this->Form->input('name', array('class' => 'form-control'));
		echo $this->Form->input('studies', array('class' => 'form-control'));
		echo $this->Form->input('trainigs', array('class' => 'form-control'));
		echo $this->Form->input('professional_experiences', array('class' => 'form-control'));
		echo $this->Form->input('languages', array('class' => 'form-control'));
		echo $this->Form->input('computer_experiences', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Curriculums'), array('action' => 'index')); ?></li>
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
