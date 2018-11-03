<?php
App::import('controller', 'ExpectedResults');
?>

<div class="composants view">
<h2><?php echo __('Composante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($composant['Composant']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Composant'), array('action' => 'edit', $composant['Composant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Composant'), array('action' => 'delete', $composant['Composant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $composant['Composant']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Composants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exp. Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exp. Result'), array('controller' => 'expected_results', 'action' => 'admin_add')); ?> </li>
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
	<h3><?php echo __('Related Expected Results'); ?></h3>
	<?php if (!empty($composant['ExpectedResult'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Composant'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($composant['ExpectedResult'] as $expectedResult): ?>
		<tr>
			<td><?php echo $expectedResult['id']; ?></td>
			<td><?php echo $expectedResult['title']; ?></td>
			<td><?php echo $expectedResult['description']; ?></td>
			<td><?php echo $composant['Composant']['title']; ?></td>
			<td><?php echo $expectedResult['created']; ?></td>
			<td><?php echo $expectedResult['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'expected_results', 'action' => 'admin_view', $expectedResult['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'expected_results', 'action' => 'edit', $expectedResult['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'expected_results', 'action' => 'delete', $expectedResult['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expectedResult['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Expected Result'), array('controller' => 'expected_results', 'action' => 'add', $composant['Composant']['id'])); ?> </li>
		</ul>
	</div>
</div>
