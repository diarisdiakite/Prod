<div class="operations index">
	<h2><?php echo __('Operations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('assignement_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($operations as $operation): ?>
	<tr>
		<td><?php echo h($operation['Operation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($operation['Assignement']['name'], array('controller' => 'assignements', 'action' => 'view', $operation['Assignement']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($operation['User']['username'], array('controller' => 'users', 'action' => 'view', $operation['User']['id'])); ?>
		</td>
		<td><?php echo h($operation['Operation']['name']); ?>&nbsp;</td>
		<td><?php echo h($operation['Operation']['duration']); ?>&nbsp;</td>
		<td><?php echo h($operation['Operation']['created']); ?>&nbsp;</td>
		<td><?php echo h($operation['Operation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $operation['Operation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $operation['Operation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $operation['Operation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $operation['Operation']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Operation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Assignements'), array('controller' => 'assignements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignement'), array('controller' => 'assignements', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
