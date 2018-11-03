<div class="operations view">
<h2><?php echo __('Operation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assignement'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['Assignement']['name'], array('controller' => 'assignements', 'action' => 'view', $operation['Assignement']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['User']['username'], array('controller' => 'users', 'action' => 'view', $operation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation'), array('action' => 'edit', $operation['Operation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operation'), array('action' => 'delete', $operation['Operation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $operation['Operation']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignements'), array('controller' => 'assignements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignement'), array('controller' => 'assignements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
