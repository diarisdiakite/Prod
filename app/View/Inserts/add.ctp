<div class="inserts form">
<?php echo $this->Form->create('Insert'); ?>
	<fieldset>
		<legend><?php echo __('Add Insert'); ?></legend>
	<?php
		echo $this->Form->input('approved');
		echo $this->Form->input('user_id');
		echo $this->Form->input('structure_id');
		echo $this->Form->input('planification_id');
		echo $this->Form->input('ministry_id');
		echo $this->Form->input('composant_id');
		echo $this->Form->input('expected_result_id');
		echo $this->Form->input('project_action_id');
		echo $this->Form->input('quantity');
		echo $this->Form->input('unity_price');
		echo $this->Form->input('type_id');
		echo $this->Form->input('date_year_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('Activation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Inserts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planifications'), array('controller' => 'planifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planification'), array('controller' => 'planifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Composants'), array('controller' => 'composants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant'), array('controller' => 'composants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expected Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expected Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Date Years'), array('controller' => 'date_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date Year'), array('controller' => 'date_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
	</ul>
</div>
