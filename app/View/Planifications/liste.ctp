<div class="planifications index">
	<h2><?php echo __('Planifications'); ?></h2>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
	<br>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ministry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($planifications as $planification): ?>
	<tr>
		<td><?php echo h($planification['Planification']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($planification['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $planification['Ministry']['id'])); ?>
		</td>
		<td><?php echo h($planification['Planification']['year']); ?>&nbsp;</td>
		<td><?php echo h($planification['Planification']['title']); ?>&nbsp;</td>
		<td><?php echo h($planification['Planification']['created']); ?>&nbsp;</td>
		<td><?php echo h($planification['Planification']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $planification['Planification']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $planification['Planification']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $planification['Planification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planification['Planification']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Planification'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
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
