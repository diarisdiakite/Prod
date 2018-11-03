<div class="planifications view">
<h2><?php echo __('Planification'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($planification['Planification']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($planification['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $planification['Ministry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($planification['Planification']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($planification['Planification']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($planification['Planification']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($planification['Planification']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Planification'), array('action' => 'edit', $planification['Planification']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Planification'), array('action' => 'delete', $planification['Planification']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planification['Planification']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Planifications'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planification'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'admin_add')); ?> </li>
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
