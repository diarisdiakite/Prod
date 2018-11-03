<div class="attributes index">
	<h2><?php echo __('Attributes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('structure_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($attributes as $attribute): ?>

	<tr>
		<td><?php echo h($attribute['Attribute']['id']); ?>&nbsp;</td>
		<td><?php echo h($attribute['Attribute']['title']); ?>&nbsp;</td>
		<td><?php echo h($attribute['Attribute']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($attribute['Structure']['name'], array('controller' => 'structures', 'action' => 'view', $attribute['Structure']['id'])); ?>
		</td>
		<td><?php echo h($attribute['Attribute']['created']); ?>&nbsp;</td>
		<td><?php echo h($attribute['Attribute']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'admin_view', $attribute['Attribute']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $attribute['Attribute']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $attribute['Attribute']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $attribute['Attribute']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Attribute'), array('action' => 'admin_add')); ?></li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'admin_add')); ?> </li>
	</ul>
	<?php else: ?>
	<?php echo $this->Html->link(
			$this->Html->image('icon_info.png', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
			array('controller' => 'posts', 'action' => 'information'),
			array('target' => '_blank', 'escape' => false)
		);
	?>
<?php endif; ?>
<?php //echo $this->Html->image('icon_info.png');?>

</div>
