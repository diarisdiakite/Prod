<?php
	App::import('controller', 'Types');
?>

<div class="expectedResults view">
<h2><?php echo __('Resultat Attendu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($expectedResult['ExpectedResult']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($expectedResult['ExpectedResult']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($expectedResult['ExpectedResult']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Composant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expectedResult['Composant']['title'], array('controller' => 'composants', 'action' => 'view', $expectedResult['Composant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($expectedResult['ExpectedResult']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($expectedResult['ExpectedResult']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exp. Result'), array('action' => 'edit', $expectedResult['ExpectedResult']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exp. Result'), array('action' => 'delete', $expectedResult['ExpectedResult']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expectedResult['ExpectedResult']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Exp. Results'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exp. Result'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Composants'), array('controller' => 'composants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant'), array('controller' => 'composants', 'action' => 'admin_add')); ?> </li>
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
	<?php if (!empty($expectedResult['ProjectAction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<!--
		<th><?php echo __('Description'); ?></th>
		-->
		<th><?php echo __('Type Id'); ?></th>
		<!-- <th><?php echo __('Expected Result Id'); ?></th> -->
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($expectedResult['ProjectAction'] as $projectAction): ?>
		<!--Afficher user_id -->
		<?php $tcontroller = new TypesController;?>
		<?php $tname = $tcontroller->getTypeById($projectAction['type_id']);?>

		<tr>
			<td><?php echo $projectAction['id']; ?></td>
			<td><?php echo $projectAction['title']; ?></td>
			<!--
			<td><?php echo $projectAction['description']; ?></td>
		-->
			<td><?php echo $this->Html->link($tname['Type']['name'], array('controller' => 'types', 'action' => 'view', $projectAction['type_id'])) ; ?></td>
			<td><?php echo $projectAction['created']; ?></td>
			<td><?php echo $projectAction['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_actions', 'action' => 'view', $projectAction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_actions', 'action' => 'edit', $projectAction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_actions', 'action' => 'delete', $projectAction['id']), array('confirm' => __('Are you sure you want to delete # %s?', $projectAction['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Action'), array('controller' => 'project_actions', 'action' => 'add', $expectedResult['ExpectedResult']['id'])); ?> </li>
		</ul>
	</div>
</div>
