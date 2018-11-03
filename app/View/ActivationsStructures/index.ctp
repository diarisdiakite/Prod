<div class="activationsStructures index">
	<h2><?php echo __('Activations Structures'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('activation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('structure_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($activationsStructures as $activationsStructure): ?>
	<tr>
		<td><?php echo h($activationsStructure['ActivationsStructure']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($activationsStructure['User']['username'], array('controller' => 'users', 'action' => 'view', $activationsStructure['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activationsStructure['Activation']['title'], array('controller' => 'activations', 'action' => 'view', $activationsStructure['Activation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activationsStructure['Structure']['name'], array('controller' => 'structures', 'action' => 'view', $activationsStructure['Structure']['id'])); ?>
		</td>
		<td><?php echo h($activationsStructure['ActivationsStructure']['created']); ?>&nbsp;</td>
		<td><?php echo h($activationsStructure['ActivationsStructure']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activationsStructure['ActivationsStructure']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activationsStructure['ActivationsStructure']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activationsStructure['ActivationsStructure']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $activationsStructure['ActivationsStructure']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Activations Structure'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
