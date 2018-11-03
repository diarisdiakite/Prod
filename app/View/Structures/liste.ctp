<div class="structures index">
	<h2><?php echo __('Structures'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('responsible'); ?></th>
			<th><?php echo $this->Paginator->sort('contact'); ?></th>
			<th><?php echo $this->Paginator->sort('focal_point_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ministry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($structures as $structure): ?>
	<tr>
		<td><?php echo h($structure['Structure']['name']); ?>&nbsp;</td>
		<td><?php echo h($structure['Structure']['responsible']); ?>&nbsp;</td>
		<td><?php echo h($structure['Structure']['contact']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($structure['FocalPoint']['name'], array('controller' => 'focal_points', 'action' => 'view', $structure['FocalPoint']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($structure['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $structure['Ministry']['id'])); ?>
		</td>
		<td><?php echo h($structure['Structure']['created']); ?>&nbsp;</td>
		<td><?php echo h($structure['Structure']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $structure['Structure']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $structure['Structure']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $structure['Structure']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $structure['Structure']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Structure'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Technicals'), array('controller' => 'technicals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical'), array('controller' => 'technicals', 'action' => 'add')); ?> </li>
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
