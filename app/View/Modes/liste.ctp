<div class="trainings index">
	<h2><?php echo __('Trainings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_action_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('ministry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sector_id'); ?></th>
			<th><?php echo $this->Paginator->sort('leash_id'); ?></th>
			<th><?php echo $this->Paginator->sort('job_employment_id'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($trainings as $training): ?>
	<tr>
		<td><?php echo h($training['Training']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($training['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $training['ProjectAction']['id'])); ?>
		</td>
		<td><?php echo h($training['Training']['description']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['ministry_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['sector_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['leash_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($training['JobEmployment']['title'], array('controller' => 'job_employments', 'action' => 'view', $training['JobEmployment']['id'])); ?>
		</td>
		<td><?php echo h($training['Training']['type_id']); ?>&nbsp;</td>
		<td><?php echo h($training['Training']['created']); ?>&nbsp;</td>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Training'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Job Employments'), array('controller' => 'job_employments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Employment'), array('controller' => 'job_employments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
