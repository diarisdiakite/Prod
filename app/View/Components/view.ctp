<div class="components view">
<h2><?php echo __('Component'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($component['Component']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($component['Component']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($component['Component']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($component['Component']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($component['Component']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Component'), array('action' => 'edit', $component['Component']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Component'), array('action' => 'delete', $component['Component']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $component['Component']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Components'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Component'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exp. Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exp. Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Expected Results'); ?></h3>
	<?php if (!empty($component['ExpectedResult'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Component Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($component['ExpectedResult'] as $expectedResult): ?>
		<tr>
			<td><?php echo $expectedResult['id']; ?></td>
			<td><?php echo $expectedResult['title']; ?></td>
			<td><?php echo $expectedResult['description']; ?></td>
			<td><?php echo $expectedResult['component_id']; ?></td>
			<td><?php echo $expectedResult['created']; ?></td>
			<td><?php echo $expectedResult['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'expected_results', 'action' => 'view', $expectedResult['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'expected_results', 'action' => 'edit', $expectedResult['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'expected_results', 'action' => 'delete', $expectedResult['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expectedResult['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Expected Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
