<div class="sectors view">
<h2><?php echo __('Secteur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($sector['Sector']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sector'), array('action' => 'edit', $sector['Sector']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sector'), array('action' => 'delete', $sector['Sector']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $sector['Sector']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leashes'), array('controller' => 'leashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leash'), array('controller' => 'leashes', 'action' => 'admin_add')); ?> </li>
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
	<h3><?php echo __('Related Leashes'); ?></h3>
	<?php if (!empty($sector['Leash'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Sector'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sector['Leash'] as $leash): ?>
		<tr>
			<td><?php echo $leash['id']; ?></td>
			<td><?php echo $leash['title']; ?></td>
			<td><?php echo $leash['description']; ?></td>
			<td><?php echo $sector['Sector']['title']; ?></td>
			<td><?php echo $leash['created']; ?></td>
			<td><?php echo $leash['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'leashes', 'action' => 'view', $leash['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'leashes', 'action' => 'edit', $leash['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'leashes', 'action' => 'delete', $leash['id']), array('confirm' => __('Are you sure you want to delete # %s?', $leash['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Leash'), array('controller' => 'leashes', 'action' => 'add', $sector['Sector']['id'])); ?> </li>
		</ul>
	</div>
</div>
