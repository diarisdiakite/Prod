<div class="expectedResults form">
<?php echo $this->Form->create('ExpectedResult', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Modifier un Resultat Attendu'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control'));
		echo $this->Form->input('title', array('class' => 'form-control'));
		echo $this->Form->input('description', array('class' => 'form-control'));
		echo $this->Form->input('composant_id', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExpectedResult.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ExpectedResult.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Exp. Results'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Composants'), array('controller' => 'composants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant'), array('controller' => 'composants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P. Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P. Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
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
