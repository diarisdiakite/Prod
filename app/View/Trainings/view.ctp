<div class="trainings view">
<h2><?php echo __('Training'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($training['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $training['ProjectAction']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($training['Training']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministry Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['ministry_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['sector_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leash Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['leash_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Job Employment'); ?></dt>
		<dd>
			<?php echo $this->Html->link($training['JobEmployment']['title'], array('controller' => 'job_employments', 'action' => 'view', $training['JobEmployment']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type Id'); ?></dt>
		<dd>
			<?php echo h($training['Training']['type_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($training['Training']['created']); ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Training'), array('action' => 'edit', $training['Training']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Training'), array('action' => 'delete', $training['Training']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $training['Training']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Employments'), array('controller' => 'job_employments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Employment'), array('controller' => 'job_employments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Levels'), array('controller' => 'levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Level'), array('controller' => 'levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
	</ul>
</div>
