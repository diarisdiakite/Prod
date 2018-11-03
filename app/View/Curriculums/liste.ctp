<div class="curriculums index">
	<h2><?php echo __('Curriculums'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('studies'); ?></th>
			<th><?php echo $this->Paginator->sort('trainigs'); ?></th>
			<th><?php echo $this->Paginator->sort('professional_experiences'); ?></th>
			<th><?php echo $this->Paginator->sort('languages'); ?></th>
			<th><?php echo $this->Paginator->sort('computer_experiences'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($curriculums as $curriculum): ?>
	<tr>
		<td><?php echo h($curriculum['Curriculum']['id']); ?>&nbsp;</td>
		<td><?php echo h($curriculum['Curriculum']['name']); ?>&nbsp;</td>
		<td><?php echo h($curriculum['Curriculum']['studies']); ?>&nbsp;</td>
		<td><?php echo h($curriculum['Curriculum']['trainigs']); ?>&nbsp;</td>
		<td><?php echo h($curriculum['Curriculum']['professional_experiences']); ?>&nbsp;</td>
		<td><?php echo h($curriculum['Curriculum']['languages']); ?>&nbsp;</td>
		<td><?php echo h($curriculum['Curriculum']['computer_experiences']); ?>&nbsp;</td>
		<td><?php echo h($curriculum['Curriculum']['created']); ?>&nbsp;</td>
		<td><?php echo h($curriculum['Curriculum']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $curriculum['Curriculum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $curriculum['Curriculum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $curriculum['Curriculum']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $curriculum['Curriculum']['id']))); ?>
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
<?php if (AuthComponent::user('group_id')==1): ?>
<h3><?php echo __('Actions'); ?></h3>

	<ul>
		<li><?php echo $this->Html->link(__('New Curriculum'), array('action' => 'add')); ?></li>
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
