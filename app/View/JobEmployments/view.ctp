<?php
	App::import('controller', array('Levels', 'ProjectActions'));
?>
<div class="jobEmployments view">
<h2><?php echo __('Emploi-métier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jobEmployment['JobEmployment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($jobEmployment['JobEmployment']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($jobEmployment['JobEmployment']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leash'); ?></dt>
		<dd>
			<?php echo $this->Html->link($jobEmployment['Leash']['title'], array('controller' => 'leashes', 'action' => 'view', $jobEmployment['Leash']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($jobEmployment['JobEmployment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($jobEmployment['JobEmployment']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Job Emp.'), array('action' => 'edit', $jobEmployment['JobEmployment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Job Emp.'), array('action' => 'delete', $jobEmployment['JobEmployment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $jobEmployment['JobEmployment']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Emp.'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Emp.'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Leashes'), array('controller' => 'leashes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leash'), array('controller' => 'leashes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
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
	<h3><?php echo __('Related Trainings'); ?></h3>
	<?php if (!empty($jobEmployment['Training'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Action Id'); ?></th>
		<th><?php echo __('Job Employment'); ?></th>
		<th><?php echo __('Training Title'); ?></th>
		<th><?php echo __('Level Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jobEmployment['Training'] as $training): ?>
		<!--Afficher noms levels -->
		<?php $lcontroller = new LevelsController;?>
		<?php $lname = $lcontroller->getLevelById($training['level_id']);?>
		<!--Afficher noms Projets actions -->
		<?php $pacontroller = new ProjectActionsController;?>
		<?php $paname = $pacontroller->getProjectActionById($training['project_action_id']);?>

		<tr>
			<td><?php echo $training['id']; ?></td>
			<td><?php echo $this->Html->link($paname['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $training['project_action_id'])) ; ?></td>
			<td><?php echo $jobEmployment['JobEmployment']['title']; ?></td>
			<td><?php echo $training['title']; ?></td>
			<td><?php echo $this->Html->link($lname['Level']['title'], array('controller' => 'levels', 'action' => 'view', $training['level_id'])) ; ?></td>
			<td><?php echo $training['created']; ?></td>
			<td><?php echo $training['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainings', 'action' => 'view', $training['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainings', 'action' => 'edit', $training['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainings', 'action' => 'delete', $training['id']), array('confirm' => __('Are you sure you want to delete # %s?', $training['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add', $jobEmployment['JobEmployment']['id'])); ?> </li>
		</ul>
	</div>
</div>
