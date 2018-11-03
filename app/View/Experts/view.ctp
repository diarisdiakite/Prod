<?php
	App::import('controller', array('Users', 'Ministries', 'FinancesResponsibles'));
?>

<div class="experts view">
<h2><?php echo __('Expert'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($expert['Expert']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($expert['Expert']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($expert['Expert']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($expert['Expert']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($expert['Expert']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($expert['User']['username'], array('controller' => 'users', 'action' => 'view', $expert['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team Id'); ?></dt>
		<dd>
			<?php echo h($expert['Expert']['team_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($expert['Expert']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($expert['Expert']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Expert'), array('action' => 'edit', $expert['Expert']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Expert'), array('action' => 'delete', $expert['Expert']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expert['Expert']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Experts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expert'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'admin_add')); ?> </li>
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
	<?php if (!empty($expert['FocalPoint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<!--
		<th><?php echo __('Expert Id'); ?></th>
	-->
		<th><?php echo __('Ministry Id'); ?></th>
		<th><?php echo __('Finances Responsible Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($expert['FocalPoint'] as $focalPoint): ?>
		<!--Afficher user_id -->
		<?php $ucontroller = new UsersController;?>
		<?php $uname = $ucontroller->getUserById($focalPoint['user_id']);?>
		<!--Afficher ministry_id -->
		<?php $mcontroller = new MinistriesController;?>
		<?php $mname = $mcontroller->getMinistryById($focalPoint['ministry_id']);?>
		<!--Afficher finances_responsible_id -->
		<?php $frcontroller = new FinancesResponsiblesController;?>
		<?php $frname = $frcontroller->getFinancesResponsibleById($focalPoint['finances_responsible_id']);?>
		<tr>
			<td><?php echo $focalPoint['id']; ?></td>
			<td><?php echo $focalPoint['name']; ?></td>
			<td><?php echo $focalPoint['position']; ?></td>
			<td><?php echo $focalPoint['tel']; ?></td>
			<td><?php echo $uname['User']['username']; ?></td>
			<!--
			<td><?php echo $focalPoint['expert_id']; ?></td>
		-->
			<td><?php echo $this->Html->link($mname['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $focalPoint['ministry_id'])) ; ?></td>
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
			<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add', $expert['Expert']['id'])); ?> </li>
		</ul>
	</div>
</div>
