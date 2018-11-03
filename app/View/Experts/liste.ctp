<div class="experts index">
	<h2><?php echo __('Experts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<!--
			<th><?php echo $this->Paginator->sort('adress'); ?></th>
			-->
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<?php if(AuthComponent::user('group_id')==2): ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
			<?php endif; ?>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($experts as $expert): ?>
	<?php if(AuthComponent::user('group_id')==2): ?>
	<tr>
		<td><?php echo h($expert['Expert']['id']); ?>&nbsp;</td>
		<td><?php echo h($expert['Expert']['name']); ?>&nbsp;</td>
		<!--
		<td><?php echo h($expert['Expert']['adress']); ?>&nbsp;</td>
		-->
		<td><?php echo h($expert['Expert']['tel']); ?>&nbsp;</td>
		<td><?php echo h($expert['Expert']['position']); ?>&nbsp;</td>
		<!--
		<td>
			<?php echo $this->Html->link($expert['User']['id'], array('controller' => 'users', 'action' => 'view', $expert['User']['id'])); ?>
		</td>
	-->
		<td>
			<?php echo h($expert['User']['username']); ?>
		</td>
		<td><?php echo h($expert['Team']['name']); ?>&nbsp;</td>
		<td><?php echo h($expert['Expert']['created']); ?>&nbsp;</td>
		<td><?php echo h($expert['Expert']['modified']); ?>&nbsp;</td>
		<?php if(AuthComponent::user('group_id')==2): ?>
			<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $expert['Expert']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $expert['Expert']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $expert['Expert']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expert['Expert']['id']))); ?>
		</td>
	<?php endif; ?>
	</tr>
	<?php endif; ?>
	<?php if(AuthComponent::user('group_id')!=2 || !AuthComponent::user()): ?>
	<?php if($expert['Expert']['active']==1): ?>
	<tr>
		<td><?php echo h($expert['Expert']['id']); ?>&nbsp;</td>
		<td><?php echo h($expert['Expert']['name']); ?>&nbsp;</td>
		<!--
		<td><?php echo h($expert['Expert']['adress']); ?>&nbsp;</td>
		-->
		<td><?php echo h($expert['Expert']['tel']); ?>&nbsp;</td>
		<td><?php echo h($expert['Expert']['position']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($expert['User']['username'], array('controller' => 'users', 'action' => 'view', $expert['User']['id'])); ?>
		</td>
		<td><?php echo h($expert['Expert']['team_id']); ?>&nbsp;</td>
		<td><?php echo h($expert['Expert']['created']); ?>&nbsp;</td>
		<td><?php echo h($expert['Expert']['modified']); ?>&nbsp;</td>
		<?php if(AuthComponent::user('group_id')==2): ?>
			<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $expert['Expert']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $expert['Expert']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $expert['Expert']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expert['Expert']['id']))); ?>
		</td>
	<?php endif; ?>
	</tr>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php unset($expert); ?>
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
		<li><?php echo $this->Html->link(__('New Expert'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
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
