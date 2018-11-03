<?php
	App::import('controller', array('Users', 'Experts', 'FinancesResponsibles', 'FocalPoints'));
?>
<div class="ministries view">
<h2><?php echo __('Ministère'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ministry['Name']['title'], array('controller' => 'names', 'action' => 'view', $ministry['Name']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ministry['Team']['name'], array('controller' => 'teams', 'action' => 'view', $ministry['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expert Id'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ministry['Expert']['name'], array('controller' => 'experts', 'action' => 'view', $ministry['Expert']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ministry'), array('action' => 'edit', $ministry['Ministry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ministry'), array('action' => 'delete', $ministry['Ministry']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ministry['Ministry']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planifications'), array('controller' => 'planifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planification'), array('controller' => 'planifications', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'admin_add')); ?> </li>
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
	<h3><?php echo __('Related Focal Points'); ?></h3>
	<?php if (!empty($ministry['FocalPoint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Adress'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<!--
		<th><?php echo __('User'); ?></th>
		<th><?php echo __('Expert Id'); ?></th>
		<th><?php echo __('Ministry Id'); ?></th>
		-->
		<th><?php echo __('Finances Responsible'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ministry['FocalPoint'] as $focalPoint): ?>
		<!--Afficher user_id -->
		<?php $ucontroller = new UsersController;?>
		<?php $uname = $ucontroller->getUserById($focalPoint['user_id']);?>
		<!--Afficher expert name -->
		<?php $econtroller = new ExpertsController;?>
		<?php $ename = $econtroller->getExpertById($focalPoint['expert_id']);?>
		<!--Afficher finances_responsible_id -->
		<?php $frcontroller = new FinancesResponsiblesController;?>
		<?php $frname = $frcontroller->getFinancesResponsibleById($focalPoint['finances_responsible_id']);?>

		<tr>
			<td><?php echo $focalPoint['id']; ?></td>
			<td><?php echo $focalPoint['name']; ?></td>
			<td><?php echo $focalPoint['adress']; ?></td>
			<td><?php echo $focalPoint['tel']; ?></td>
			<td><?php echo $focalPoint['position']; ?></td>
			<!--
			<td><?php echo $this->Html->link($uname['User']['username'], array('controller' => 'users', 'action' => 'view', $focalPoint['user_id'])) ; ?></td>
			<td><?php echo $this->Html->link($ename['Expert']['name'], array('controller' => 'experts', 'action' => 'view', $focalPoint['expert_id'])) ; ?></td>
			<td><?php echo $ministry['Ministry']['slug']; ?></td>
		-->
			<td><?php echo $this->Html->link($frname['FinancesResponsible']['name'], array('controller' => 'financesResponsibles', 'action' => 'view', $focalPoint['finances_responsible_id'])) ; ?></td>
			<td><?php echo $focalPoint['created']; ?></td>
			<td><?php echo $focalPoint['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'focal_points', 'action' => 'view', $focalPoint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'focal_points', 'action' => 'edit', $focalPoint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'focal_points', 'action' => 'delete', $focalPoint['id']), array('confirm' => __('Are you sure you want to delete # %s?', $focalPoint['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add', $ministry['Ministry']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Planifications'); ?></h3>
	<?php if (!empty($ministry['Planification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Ministry Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ministry['Planification'] as $planification): ?>
		<tr>
			<td><?php echo $planification['id']; ?></td>
			<td><?php echo $ministry['Ministry']['slug']; ?></td>
			<td><?php echo $planification['year']; ?></td>
			<td><?php echo $planification['created']; ?></td>
			<td><?php echo $planification['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planifications', 'action' => 'view', $planification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planifications', 'action' => 'edit', $planification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planifications', 'action' => 'delete', $planification['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planification['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planification'), array('controller' => 'planifications', 'action' => 'add', $ministry['Ministry']['id'])); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Structures'); ?></h3>
	<?php if (!empty($ministry['Structure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Responsible'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Focal Point Id'); ?></th>
		<th><?php echo __('Ministry Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ministry['Structure'] as $structure): ?>
		<!--Afficher focal point name -->
		<?php $fpcontroller = new FocalPointsController;?>
		<?php $fpname = $fpcontroller->getFocalPointById($structure['focal_point_id']);?>

		<tr>
			<td><?php echo $structure['id']; ?></td>
			<td><?php echo $structure['name']; ?></td>
			<td><?php echo $structure['responsible']; ?></td>
			<td><?php echo $structure['contact']; ?></td>
			<td><?php echo $this->Html->link($fpname['FocalPoint']['name'], array('controller' => 'focal_points', 'action' => 'view', $structure['focal_point_id'])) ; ?></td>
			<td><?php echo $ministry['Ministry']['slug']; ?></td>
			<td><?php echo $structure['created']; ?></td>
			<td><?php echo $structure['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'structures', 'action' => 'view', $structure['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'structures', 'action' => 'edit', $structure['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'structures', 'action' => 'delete', $structure['id']), array('confirm' => __('Are you sure you want to delete # %s?', $structure['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add', $ministry['Ministry']['id'])); ?> </li>
		</ul>
	</div>
</div>
