<div class="structures view">
<h2><?php echo __('Structure'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsible'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['responsible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Focal Point'); ?></dt>
		<dd>
			<?php echo $this->Html->link($structure['FocalPoint']['name'], array('controller' => 'focal_points', 'action' => 'view', $structure['FocalPoint']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($structure['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $structure['Ministry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($structure['Structure']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Structure'), array('action' => 'edit', $structure['Structure']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Structure'), array('action' => 'delete', $structure['Structure']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $structure['Structure']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Attributes'); ?></h3>
	<?php if (!empty($structure['Attribute'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Structure Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($structure['Attribute'] as $attribute): ?>
		<tr>
			<td><?php echo $attribute['id']; ?></td>
			<td><?php echo $attribute['approved']; ?></td>
			<td><?php echo $attribute['user_id']; ?></td>
			<td><?php echo $attribute['title']; ?></td>
			<td><?php echo $attribute['description']; ?></td>
			<td><?php echo $attribute['structure_id']; ?></td>
			<td><?php echo $attribute['created']; ?></td>
			<td><?php echo $attribute['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'attributes', 'action' => 'admin_view', $attribute['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'attributes', 'action' => 'edit', $attribute['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'attributes', 'action' => 'delete', $attribute['id']), array('confirm' => __('Are you sure you want to delete # %s?', $attribute['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Technicals'); ?></h3>
	<?php if (!empty($structure['Technical'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Structure Id'); ?></th>
		<th><?php echo __('Project Action Id'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($structure['Technical'] as $technical): ?>
		<tr>
			<td><?php echo $technical['id']; ?></td>
			<td><?php echo $technical['user_id']; ?></td>
			<td><?php echo $technical['structure_id']; ?></td>
			<td><?php echo $technical['project_action_id']; ?></td>
			<td><?php echo $technical['approved']; ?></td>
			<td><?php echo $technical['quantity']; ?></td>
			<td><?php echo $technical['created']; ?></td>
			<td><?php echo $technical['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'technicals', 'action' => 'admin_view', $technical['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'technicals', 'action' => 'edit', $technical['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'technicals', 'action' => 'delete', $technical['id']), array('confirm' => __('Are you sure you want to delete # %s?', $technical['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Technical'), array('controller' => 'technicals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
