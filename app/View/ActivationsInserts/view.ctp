<div class="activationsInserts view">
<h2><?php echo __('Activations Insert'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activationsInsert['ActivationsInsert']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsInsert['User']['username'], array('controller' => 'users', 'action' => 'view', $activationsInsert['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsInsert['Activation']['title'], array('controller' => 'activations', 'action' => 'view', $activationsInsert['Activation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insert'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsInsert['Insert']['id'], array('controller' => 'inserts', 'action' => 'view', $activationsInsert['Insert']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($activationsInsert['ActivationsInsert']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($activationsInsert['ActivationsInsert']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activations Insert'), array('action' => 'edit', $activationsInsert['ActivationsInsert']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activations Insert'), array('action' => 'delete', $activationsInsert['ActivationsInsert']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $activationsInsert['ActivationsInsert']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations Inserts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activations Insert'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inserts'), array('controller' => 'inserts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insert'), array('controller' => 'inserts', 'action' => 'add')); ?> </li>
	</ul>
</div>
