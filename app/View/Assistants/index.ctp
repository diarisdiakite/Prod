<div class="assistants index">
	<h2><?php echo __('Assistants'); ?></h2>
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
	<?php foreach ($assistants as $assistant): ?>
	<tr>
		<td><?php echo h($assistant['Assistant']['id']); ?>&nbsp;</td>
		<td><?php echo h($assistant['Assistant']['name']); ?>&nbsp;</td>
		<td><?php echo h($assistant['Assistant']['adress']); ?>&nbsp;</td>
		<td><?php echo h($assistant['Assistant']['tel']); ?>&nbsp;</td>
		<td><?php echo h($assistant['Assistant']['position']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($assistant['User']['username'], array('controller' => 'users', 'action' => 'view', $assistant['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($assistant['Post']['title'], array('controller' => 'posts', 'action' => 'view', $assistant['Post']['id'])); ?>
		</td>
		<td><?php echo h($assistant['Assistant']['created']); ?>&nbsp;</td>
		<td><?php echo h($assistant['Assistant']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $assistant['Assistant']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $assistant['Assistant']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $assistant['Assistant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $assistant['Assistant']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Assistant'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
