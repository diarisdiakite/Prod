<div class="modes view">
<h2><?php echo __('Mode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mode['Type']['name'], array('controller' => 'types', 'action' => 'view', $mode['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mode['Mode']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Mode'), array('action' => 'edit', $mode['Mode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Mode'), array('action' => 'delete', $mode['Mode']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $mode['Mode']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Modes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mode'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>
