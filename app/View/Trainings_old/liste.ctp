<div class="trainings index">
	<h2><?php echo __('Formations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('job_employment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('level_id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_action_id'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($trainings as $training): ?>
	<tr>
		<td><?php echo h($training['Training']['id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['title']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['description']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($training['JobEmployment']['title'], array('controller' => 'job_employments', 'action' => 'view', $training['JobEmployment']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($training['Level']['title'], array('controller' => 'levels', 'action' => 'view', $training['Level']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($training['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $training['ProjectAction']['id'])); ?>
		</td>
		<td><?php echo h($training['Training']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $training['Training']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $training['Training']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $training['Training']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $training['Training']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Training'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Emp.'), array('controller' => 'job_employments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Emp.'), array('controller' => 'job_employments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P. Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P. Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
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
