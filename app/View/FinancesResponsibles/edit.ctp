<div class="financesResponsibles form">
<?php echo $this->Form->create('FinancesResponsible', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Modifier un CDMT'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('name', array('class' => 'form-control'));
		echo $this->Form->input('adress', array('class' => 'form-control'));
		echo $this->Form->input('tel', array('class' => 'form-control'));
		echo $this->Form->input('position', array('class' => 'form-control'));
		echo $this->Form->input('user_id', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FinancesResponsible.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('FinancesResponsible.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List CDMT'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financials'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financial'), array('controller' => 'financials', 'action' => 'add')); ?> </li>
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
