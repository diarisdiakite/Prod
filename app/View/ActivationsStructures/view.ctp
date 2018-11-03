<div class="activationsStructures view">
<h2><?php echo __('Activations Structure'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activationsStructure['ActivationsStructure']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsStructure['User']['username'], array('controller' => 'users', 'action' => 'view', $activationsStructure['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsStructure['Activation']['title'], array('controller' => 'activations', 'action' => 'view', $activationsStructure['Activation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Structure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsStructure['Structure']['name'], array('controller' => 'structures', 'action' => 'view', $activationsStructure['Structure']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($activationsStructure['ActivationsStructure']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($activationsStructure['ActivationsStructure']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activations Structure'), array('action' => 'edit', $activationsStructure['ActivationsStructure']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activations Structure'), array('action' => 'delete', $activationsStructure['ActivationsStructure']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $activationsStructure['ActivationsStructure']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations Structures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activations Structure'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
