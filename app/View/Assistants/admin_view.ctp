<div class="assistants view">
<h2><?php echo __('Assistant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assistant['User']['username'], array('controller' => 'users', 'action' => 'view', $assistant['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Post'); ?></dt>
		<dd>
			<?php echo $this->Html->link($assistant['Post']['title'], array('controller' => 'posts', 'action' => 'view', $assistant['Post']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($assistant['Assistant']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Assistant'), array('action' => 'edit', $assistant['Assistant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Assistant'), array('action' => 'delete', $assistant['Assistant']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $assistant['Assistant']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Assistants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Assistant'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
