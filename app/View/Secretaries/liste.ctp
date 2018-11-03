<div class="secretaries index">
	<h2><?php echo __('Secretaires'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('adress'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($secretaries as $secretary): ?>
	<tr>
		<td><?php echo h($secretary['Secretary']['id']); ?>&nbsp;</td>
		<td><?php echo h($secretary['Secretary']['name']); ?>&nbsp;</td>
		<td><?php echo h($secretary['Secretary']['adress']); ?>&nbsp;</td>
		<td><?php echo h($secretary['Secretary']['tel']); ?>&nbsp;</td>
		<td><?php echo h($secretary['Secretary']['position']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($secretary['User']['username'], array('controller' => 'users', 'action' => 'view', $secretary['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($secretary['Post']['title'], array('controller' => 'posts', 'action' => 'view', $secretary['Post']['id'])); ?>
		</td>
		<td><?php echo h($secretary['Secretary']['created']); ?>&nbsp;</td>
		<td><?php echo h($secretary['Secretary']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $secretary['Secretary']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $secretary['Secretary']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $secretary['Secretary']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $secretary['Secretary']['id']))); ?>
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
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Secretary'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
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
