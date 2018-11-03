<?php
	App::import('controller', array('JobEmployments', 'ProjectActions'));
?>
<div class="levels view">
<h2><?php echo __('Niveau de formation Initiale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($level['Level']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($level['Level']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($level['Level']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($level['Level']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($level['Level']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Level'), array('action' => 'edit', $level['Level']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Level'), array('action' => 'delete', $level['Level']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $level['Level']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'admin_add')); ?> </li>
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
	<?php if (!empty($level['Training'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Action'); ?></th>
		<th><?php echo __('Job Employment'); ?></th>
		<th><?php echo __('Training Title'); ?></th>
		<!--
		<th><?php echo __('Description'); ?></th>
		-->
		<th><?php echo __('Level'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($level['Training'] as $training): ?>
		<!--Afficher JobEmployments title -->
		<?php $jecontroller = new JobEmploymentsController;?>
		<?php $jename = $jecontroller->getJobEmploymentById($training['job_employment_id']);?>
		<!--Afficher ProjectAction Title -->
		<?php $pacontroller = new ProjectActionsController;?>
		<?php $paname = $pacontroller->getProjectActionById($training['project_action_id']);?>

		<tr>
			<td><?php echo $training['id']; ?></td>
			<td><?php echo $this->Html->link($paname['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $training['project_action_id'])) ; ?></td>
			<td><?php echo $this->Html->link($jename['JobEmployment']['title'], array('controller' => 'job_employments', 'action' => 'view', $training['job_employment_id'])) ; ?></td>
			<td><?php echo $training['title']; ?></td>
			<!--
			<td><?php echo $training['description']; ?></td>
		-->
			<td><?php echo $level['Level']['title']; ?></td>
			<td><?php echo $training['created']; ?></td>
			<td><?php echo $training['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'trainings', 'action' => 'admin_view', $training['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'trainings', 'action' => 'edit', $training['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'trainings', 'action' => 'delete', $training['id']), array('confirm' => __('Are you sure you want to delete # %s?', $training['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
