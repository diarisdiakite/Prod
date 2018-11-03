<div class="assignements form">
    <?php echo $this->Form->create('Assignement', array('class' => 'form')); ?>
    
	<fieldset>
		<legend><?php echo __('Ajouter une Tache'); ?></legend>
	<?php
		echo $this->Form->input('group_id', array('class' => 'form-control'));
		echo $this->Form->input('user_id', array('class' => 'form-control'));
		echo $this->Form->input('name', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Assignements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
