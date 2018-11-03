<div class="projectActions index">
	<h2><?php echo __('Projets Actions'); ?></h2>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('expected_result_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($projectActions as $projectAction): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($projectAction['ExpectedResult']['title'], array('controller' => 'expected_results', 'action' => 'view', $projectAction['ExpectedResult']['id'])); ?>
		</td>
		<td><?php echo h($projectAction['ProjectAction']['title']); ?>&nbsp;</td>
		<td><?php echo h($projectAction['ProjectAction']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectAction['Type']['name'], array('controller' => 'types', 'action' => 'view', $projectAction['Type']['id'])); ?>
		</td>
		<td><?php echo h($projectAction['ProjectAction']['created']); ?>&nbsp;</td>
		<td><?php echo h($projectAction['ProjectAction']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $projectAction['ProjectAction']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projectAction['ProjectAction']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projectAction['ProjectAction']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $projectAction['ProjectAction']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New P. Action'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exp. Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exp. Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
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
