<?php
App::import('controller', 'ExpectedResults');
?>

<div class="types view">
<h2><?php echo __('Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($type['Type']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($type['Type']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($type['Type']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($type['Type']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($type['Type']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Type'), array('action' => 'edit', $type['Type']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Type'), array('action' => 'delete', $type['Type']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $type['Type']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P. Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P. Action'), array('controller' => 'project_actions', 'action' => 'admin_add')); ?> </li>
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
	<h3><?php echo __('Related Project Actions'); ?></h3>
	<?php if (!empty($type['ProjectAction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Expected Result'); ?></th>
		<th><?php echo __('Project Action Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($type['ProjectAction'] as $projectAction): ?>
		<!--Afficher Expected result -->
		<?php $ercontroller = new ExpectedResultsController;?>
		<?php $ername = $ercontroller->getExpectedResultById($projectAction['expected_result_id']);?>
		<tr>
			<td><?php echo $projectAction['id']; ?></td>
			<td><?php echo $this->Html->link($ername['ExpectedResult']['title'], array('controller' => 'project_actions', 'action' => 'view', $projectAction['expected_result_id'])) ; ?></td>
			<td><?php echo $projectAction['title']; ?></td>
			<td><?php echo $projectAction['description']; ?></td>
			<td><?php echo $type['Type']['name']; ?></td>
			<td><?php echo $projectAction['created']; ?></td>
			<td><?php echo $projectAction['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_actions', 'action' => 'admin_view', $projectAction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_actions', 'action' => 'edit', $projectAction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_actions', 'action' => 'delete', $projectAction['id']), array('confirm' => __('Are you sure you want to delete # %s?', $projectAction['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
