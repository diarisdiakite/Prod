<div class="components index">
	<h2><?php echo __('Components'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($components as $component): ?>
	<tr>
		<td><?php echo h($component['Component']['id']); ?>&nbsp;</td>
		<td><?php echo h($component['Component']['title']); ?>&nbsp;</td>
		<td><?php echo h($component['Component']['description']); ?>&nbsp;</td>
		<td><?php echo h($component['Component']['created']); ?>&nbsp;</td>
		<td><?php echo h($component['Component']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $component['Component']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $component['Component']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $component['Component']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $component['Component']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Component'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Expected Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expected Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
