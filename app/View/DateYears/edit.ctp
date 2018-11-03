<div class="dateYears form">
<?php echo $this->Form->create('DateYear', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Edit Date Year'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DateYear.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DateYear.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Date Years'), array('action' => 'index')); ?></li>
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
