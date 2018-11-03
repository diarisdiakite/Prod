<div class="ministriesTrainings view">
<h2><?php echo __('Ministries Training'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ministriesTraining['MinistriesTraining']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ministriesTraining['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $ministriesTraining['Ministry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Training'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ministriesTraining['Training']['id'], array('controller' => 'trainings', 'action' => 'view', $ministriesTraining['Training']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ministriesTraining['MinistriesTraining']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ministriesTraining['MinistriesTraining']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ministries Training'), array('action' => 'edit', $ministriesTraining['MinistriesTraining']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ministries Training'), array('action' => 'delete', $ministriesTraining['MinistriesTraining']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ministriesTraining['MinistriesTraining']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries Trainings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministries Training'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Trainings'), array('controller' => 'trainings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Training'), array('controller' => 'trainings', 'action' => 'add')); ?> </li>
	</ul>
</div>
