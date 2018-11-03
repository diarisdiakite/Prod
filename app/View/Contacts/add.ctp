<div class="contacts form">
<?php echo $this->Form->create('Contact', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Nous Contacter'); ?></legend>
	<?php
		//echo $this->Form->input('user_id', array('class' => 'form-control'));
		echo $this->Form->input('name', array('class' => 'form-control'));
		echo $this->Form->input('email', array('class' => 'form-control'));
		echo $this->Form->input('message', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contacts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
