<div class="realizations index">
	<h2><?php echo __('Realizations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('insert_id'); ?></th>
			<th><?php echo $this->Paginator->sort('structure_id'); ?></th>
			<th><?php echo $this->Paginator->sort('focal_point_id'); ?></th>
			<th><?php echo $this->Paginator->sort('finances_responsible_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($realizations as $realization): ?>
	<tr>
		<td><?php echo h($realization['Realization']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($realization['User']['username'], array('controller' => 'users', 'action' => 'view', $realization['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($realization['Insert']['id'], array('controller' => 'inserts', 'action' => 'view', $realization['Insert']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($realization['Structure']['name'], array('controller' => 'structures', 'action' => 'view', $realization['Structure']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($realization['FocalPoint']['name'], array('controller' => 'focal_points', 'action' => 'view', $realization['FocalPoint']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($realization['FinancesResponsible']['name'], array('controller' => 'finances_responsibles', 'action' => 'view', $realization['FinancesResponsible']['id'])); ?>
		</td>
		<td><?php echo h($realization['Realization']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($realization['Realization']['price']); ?>&nbsp;</td>
		<td><?php echo h($realization['Realization']['amount']); ?>&nbsp;</td>
		<td><?php echo h($realization['Realization']['created']); ?>&nbsp;</td>
		<td><?php echo h($realization['Realization']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $realization['Realization']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $realization['Realization']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $realization['Realization']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $realization['Realization']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Realization'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inserts'), array('controller' => 'inserts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insert'), array('controller' => 'inserts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Finances Responsibles'), array('controller' => 'finances_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finances Responsible'), array('controller' => 'finances_responsibles', 'action' => 'add')); ?> </li>
	</ul>
</div>
