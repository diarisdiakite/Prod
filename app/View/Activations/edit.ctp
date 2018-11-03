<div class="activations form">
        <?php echo $this->Form->create('Activation', array('class' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Edit Activation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id', array('class' => 'form-control'));
		echo $this->Form->input('administrator_id', array('class' => 'form-control'));
		echo $this->Form->input('title', array('class' => 'form-control'));
		echo $this->Form->input('Insert', array('class' => 'form-control'));
		echo $this->Form->input('Post', array('class' => 'form-control'));
		echo $this->Form->input('Structure', array('class' => 'form-control'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Activation.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Activation.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Activations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administrators'), array('controller' => 'administrators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrator'), array('controller' => 'administrators', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inserts'), array('controller' => 'inserts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insert'), array('controller' => 'inserts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
