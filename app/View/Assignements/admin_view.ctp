<div class="assignements view">
<h2><?php echo __('Tache'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assignement['Assignement']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Id'); ?></dt>
		<dd>
			<?php echo h($assignement['Assignement']['group_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assignement['User']['username'], array('controller' => 'users', 'action' => 'view', $assignement['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($assignement['Assignement']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($assignement['Assignement']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($assignement['Assignement']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assignement'), array('action' => 'edit', $assignement['Assignement']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assignement'), array('action' => 'delete', $assignement['Assignement']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $assignement['Assignement']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Assignements'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assignement'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Operations'); ?></h3>
	<?php if (!empty($assignement['Operation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Assignement Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($assignement['Operation'] as $operation): ?>
		<tr>
			<td><?php echo $operation['id']; ?></td>
			<td><?php echo $operation['assignement_id']; ?></td>
			<td><?php echo $operation['name']; ?></td>
			<td><?php echo $operation['duration']; ?></td>
			<td><?php echo $operation['created']; ?></td>
			<td><?php echo $operation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operations', 'action' => 'admin_view', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operations', 'action' => 'edit', $operation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operations', 'action' => 'delete', $operation['id']), array('confirm' => __('Are you sure you want to delete # %s?', $operation['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
