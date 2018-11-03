<div class="ministries index">
	<h2><?php echo __('Ministries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('approved'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name_id'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('expert_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ministries as $ministry): ?>
	<tr>
		<td><?php echo h($ministry['Ministry']['id']); ?>&nbsp;</td>
		<td><?php echo h($ministry['Ministry']['approved']); ?>&nbsp;</td>
		<td><?php echo h($ministry['Ministry']['user_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ministry['Name']['title'], array('controller' => 'names', 'action' => 'view', $ministry['Name']['id'])); ?>
		</td>
		<td><?php echo h($ministry['Ministry']['slug']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ministry['Team']['name'], array('controller' => 'teams', 'action' => 'view', $ministry['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ministry['Expert']['name'], array('controller' => 'experts', 'action' => 'view', $ministry['Expert']['id'])); ?>
		</td>
		<td><?php echo h($ministry['Ministry']['created']); ?>&nbsp;</td>
		<td><?php echo h($ministry['Ministry']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ministry['Ministry']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $ministry['Ministry']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ministry['Ministry']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ministry['Ministry']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Ministry'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experts'), array('controller' => 'experts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expert'), array('controller' => 'experts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planifications'), array('controller' => 'planifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planification'), array('controller' => 'planifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
