<div class="inserts form">
<?php echo $this->Form->create('Insert', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Modifier une Insertion'); ?></legend>
	<!--
        <?php
        //echo $this->Form->input('id');
		//echo $this->Form->input('approved');
		//echo $this->Form->input('user_id');
		//echo $this->Form->input('structure_id');
		//echo $this->Form->input('planification_id');
		//echo $this->Form->input('ministry_id');
		//echo $this->Form->input('composant_id');
		//echo $this->Form->input('expected_result_id');
		//echo $this->Form->input('project_action_id');
		//echo $this->Form->input('quantity');
		//echo $this->Form->input('unity_price');
		//echo $this->Form->input('type_id');
		//echo $this->Form->input('date_year_id');
		//echo $this->Form->input('amount');
	?>
        -->
    <?php
		echo $this->Form->input('approved', array('class' => 'form-control'));
		echo $this->Form->input('user_id', array('class' => 'form-control'));
		echo $this->Form->input('structure_id', array('class' => 'form-control'));
		echo $this->Form->input('planification_id', array('class' => 'form-control'));
		echo $this->Form->input('ministry_id', array('class' => 'form-control'));
		echo $this->Form->input('composant_id', array('class' => 'form-control'));
		echo $this->Form->input('expected_result_id', array('class' => 'form-control'));
		echo $this->Form->input('project_action_id', array('class' => 'form-control'));
		echo $this->Form->input('quantity', array('class' => 'form-control'));
		echo $this->Form->input('unity_price', array('class' => 'form-control'));
		echo $this->Form->input('type_id', array('class' => 'form-control'));
		echo $this->Form->input('date_year_id', array('class' => 'form-control'));
		echo $this->Form->input('amount', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Insert.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Insert.id')))); ?></li>
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
		<li><?php echo $this->Html->link(__('List Exp. Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exp. Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P. Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P. Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
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
