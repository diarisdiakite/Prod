<div class="administrators view">
<h2><?php echo __('Administrateur'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($administrator['User']['username'], array('controller' => 'users', 'action' => 'view', $administrator['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($administrator['Post']['title'], array('controller' => 'posts', 'action' => 'view', $administrator['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($administrator['Activation']['title'], array('controller' => 'activations', 'action' => 'view', $administrator['Activation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($administrator['Administrator']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Administrator'), array('action' => 'edit', $administrator['Administrator']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Administrator'), array('action' => 'delete', $administrator['Administrator']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administrator['Administrator']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Administrators'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrator'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Activations'); ?></h3>
	<?php if (!empty($administrator['Activation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Administrator Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($administrator['Activation'] as $activation): ?>
		<tr>
			<td><?php echo $activation['id']; ?></td>
			<td><?php echo $activation['user_id']; ?></td>
			<td><?php echo $activation['administrator_id']; ?></td>
			<td><?php echo $activation['title']; ?></td>
			<td><?php echo $activation['created']; ?></td>
			<td><?php echo $activation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activations', 'action' => 'view', $activation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'activations', 'action' => 'edit', $activation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'activations', 'action' => 'delete', $activation['id']), array('confirm' => __('Are you sure you want to delete # %s?', $activation['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
