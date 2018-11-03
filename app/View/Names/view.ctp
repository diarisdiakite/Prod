<div class="names view">
<h2><?php echo __('Nom'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($name['Name']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved'); ?></dt>
		<dd>
			<?php echo h($name['Name']['approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($name['Name']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($name['Name']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description Id'); ?></dt>
		<dd>
			<?php echo h($name['Name']['description_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($name['Name']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($name['Name']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Name'), array('action' => 'edit', $name['Name']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Name'), array('action' => 'delete', $name['Name']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $name['Name']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
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
	<h3><?php echo __('Related Ministries'); ?></h3>
	<?php if (!empty($name['Ministry'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name Id'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Expert Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($name['Ministry'] as $ministry): ?>
		<tr>
			<td><?php echo $ministry['id']; ?></td>
			<td><?php echo $ministry['approved']; ?></td>
			<td><?php echo $ministry['user_id']; ?></td>
			<td><?php echo $ministry['name_id']; ?></td>
			<td><?php echo $ministry['slug']; ?></td>
			<td><?php echo $ministry['team_id']; ?></td>
			<td><?php echo $ministry['expert_id']; ?></td>
			<td><?php echo $ministry['created']; ?></td>
			<td><?php echo $ministry['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ministries', 'action' => 'view', $ministry['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ministries', 'action' => 'edit', $ministry['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ministries', 'action' => 'delete', $ministry['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ministry['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
