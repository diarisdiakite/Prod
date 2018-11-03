<div class="trainings view">
<h2><?php echo __('Formation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($training['Training']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($training['Training']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($training['Training']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Employment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($training['JobEmployment']['title'], array('controller' => 'job_employments', 'action' => 'view', $training['JobEmployment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo $this->Html->link($training['Level']['title'], array('controller' => 'levels', 'action' => 'view', $training['Level']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($training['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $training['ProjectAction']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($training['Training']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Training'), array('action' => 'edit', $training['Training']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Training'), array('action' => 'delete', $training['Training']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $training['Training']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Emp.'), array('controller' => 'job_employments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Emp.'), array('controller' => 'job_employments', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'admin_add')); ?> </li>
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
