<div class="financials index">
	<h2><?php echo __('Données Financières'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_action_id'); ?></th>
			<th><?php echo $this->Paginator->sort('budget'); ?></th>
			<th><?php echo $this->Paginator->sort('finances_responsible_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($financials as $financial): ?>
	<tr>
		<td><?php echo h($financial['Financial']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link($financial['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $financial['Financial']['project_action_id'])); ?>&nbsp;</td>
		<td><?php echo h($financial['Financial']['budget']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($financial['FinancesResponsible']['name'], array('controller' => 'finances_responsibles', 'action' => 'view', $financial['FinancesResponsible']['id'])); ?>
		</td>
		<td><?php echo h($financial['Financial']['created']); ?>&nbsp;</td>
		<td><?php echo h($financial['Financial']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $financial['Financial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $financial['Financial']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financial['Financial']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $financial['Financial']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Financial'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List P. Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P. Actions'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List CDMT'), array('controller' => 'finances_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New CDMT'), array('controller' => 'finances_responsibles', 'action' => 'add')); ?> </li>
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
