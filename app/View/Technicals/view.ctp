<div class="technicals view">
<h2><?php echo __('Donnée Technique'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($technical['Technical']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Structure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($technical['Structure']['name'], array('controller' => 'structures', 'action' => 'view', $technical['Structure']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($technical['Technical']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Action Id'); ?></dt>
		<dd>
			<?php echo h($technical['Technical']['project_action_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($technical['Technical']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($technical['Technical']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Technical'), array('action' => 'edit', $technical['Technical']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Technical'), array('action' => 'delete', $technical['Technical']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $technical['Technical']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Technicals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P. Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P. Actions'), array('controller' => 'project_actions', 'action' => 'admin_add')); ?> </li>
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
