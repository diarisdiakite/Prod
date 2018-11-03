<div class="activationsPosts view">
<h2><?php echo __('Activations Post'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activationsPost['ActivationsPost']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsPost['User']['username'], array('controller' => 'users', 'action' => 'view', $activationsPost['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsPost['Activation']['title'], array('controller' => 'activations', 'action' => 'view', $activationsPost['Activation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activationsPost['Post']['title'], array('controller' => 'posts', 'action' => 'view', $activationsPost['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($activationsPost['ActivationsPost']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($activationsPost['ActivationsPost']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activations Post'), array('action' => 'edit', $activationsPost['ActivationsPost']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activations Post'), array('action' => 'delete', $activationsPost['ActivationsPost']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $activationsPost['ActivationsPost']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations Posts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activations Post'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
