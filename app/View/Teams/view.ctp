<?php
	App::import('controller', array('Experts','Names'));
?>
<div class="teams view">
<h2><?php echo __('Equipe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($team['Team']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($team['Team']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head'); ?></dt>
		<dd>
			<?php echo h($team['Team']['head']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($team['Team']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($team['Team']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Team'), array('action' => 'edit', $team['Team']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Team'), array('action' => 'delete', $team['Team']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $team['Team']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experts'), array('controller' => 'experts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expert'), array('controller' => 'experts', 'action' => 'add')); ?> </li>
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
	<h3><?php echo __('Related Experts'); ?></h3>
	<?php if (!empty($team['Expert'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Adress'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($team['Expert'] as $expert): ?>
		<tr>
			<td><?php echo $expert['id']; ?></td>
			<td><?php echo $expert['name']; ?></td>
			<td><?php echo $expert['adress']; ?></td>
			<td><?php echo $expert['tel']; ?></td>
			<td><?php echo $expert['position']; ?></td>
			<td><?php echo $team['Team']['name']; ?></td>
			<td><?php echo $expert['created']; ?></td>
			<td><?php echo $expert['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experts', 'action' => 'view', $expert['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experts', 'action' => 'edit', $expert['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experts', 'action' => 'delete', $expert['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expert['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Expert'), array('controller' => 'experts', 'action' => 'add', $team['Team']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Ministries'); ?></h3>
	<?php if (!empty($team['Ministry'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name Id'); ?></th>
		<th><?php echo __('Slug'); ?></th>
		<th><?php echo __('Team'); ?></th>
		<th><?php echo __('Expert'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($team['Ministry'] as $ministry): ?>
		<!--Afficher Ministry name -->
		<?php $ncontroller = new NamesController;?>
		<?php $nname = $ncontroller->getNameById($ministry['name_id']);?>
		<!--Afficher Expert -->
		<?php $econtroller = new ExpertsController;?>
		<?php $ename = $econtroller->getExpertById($ministry['expert_id']);?>

		<tr>
			<td><?php echo $ministry['id']; ?></td>
			<td><?php echo $this->Html->link($nname['Name']['title'], array('controller' => 'ministries', 'action' => 'view', $ministry['name_id'])) ; ?></td>
			<td><?php echo $ministry['slug']; ?></td>
			<td><?php echo $team['Team']['name']; ?></td>
			<td><?php echo $this->Html->link($ename['Expert']['name'], array('controller' => 'experts', 'action' => 'view', $ministry['expert_id'])) ; ?></td>
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
			<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add', $team['Team']['id'])); ?> </li>
		</ul>
	</div>
</div>
