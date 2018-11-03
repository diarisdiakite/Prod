<div class="dateYears view">
<h2><?php echo __('Date Year'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dateYear['DateYear']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($dateYear['DateYear']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($dateYear['DateYear']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($dateYear['DateYear']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3><ul>
		<ul>
		<li><?php echo $this->Html->link(__('Edit Date Year'), array('action' => 'edit', $dateYear['DateYear']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Date Year'), array('action' => 'delete', $dateYear['DateYear']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dateYear['DateYear']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Date Years'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date Year'), array('action' => 'add')); ?> </li>
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
