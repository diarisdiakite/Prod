<div class="ministriesTrainings index">
	<h2><?php echo __('Ministries Trainings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('ministry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('training_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ministriesTrainings as $ministriesTraining): ?>
	<tr>
		<td><?php echo h($ministriesTraining['MinistriesTraining']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ministriesTraining['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $ministriesTraining['Ministry']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ministriesTraining['Training']['id'], array('controller' => 'trainings', 'action' => 'view', $ministriesTraining['Training']['id'])); ?>
		</td>
		<td><?php echo h($ministriesTraining['MinistriesTraining']['created']); ?>&nbsp;</td>
		<td><?php echo h($ministriesTraining['MinistriesTraining']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ministriesTraining['MinistriesTraining']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ministriesTraining['MinistriesTraining']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ministriesTraining['MinistriesTraining']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ministriesTraining['MinistriesTraining']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Ministries Training'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
