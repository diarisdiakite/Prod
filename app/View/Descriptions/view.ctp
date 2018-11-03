<div class="descriptions view">
<h2><?php echo __('Description'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($description['Description']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($description['Description']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($description['Description']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($description['Description']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Description'), array('action' => 'edit', $description['Description']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Description'), array('action' => 'delete', $description['Description']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $description['Description']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Descriptions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Description'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Names'); ?></h3>
	<?php if (!empty($description['Name'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($description['Name'] as $name): ?>
		<tr>
			<td><?php echo $name['id']; ?></td>
			<td><?php echo $name['approved']; ?></td>
			<td><?php echo $name['user_id']; ?></td>
			<td><?php echo $name['title']; ?></td>
			<td><?php echo $name['description_id']; ?></td>
			<td><?php echo $name['created']; ?></td>
			<td><?php echo $name['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'names', 'action' => 'view', $name['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'names', 'action' => 'edit', $name['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'names', 'action' => 'delete', $name['id']), array('confirm' => __('Are you sure you want to delete # %s?', $name['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
