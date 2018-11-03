<div class="financials view">
<h2><?php echo __('Données Financières'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($financial['Financial']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($financial['Financial']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Action Id'); ?></dt>
		<dd>
			<?php echo h($financial['Financial']['project_action_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo h($financial['Financial']['budget']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finances Responsible'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financial['FinancesResponsible']['name'], array('controller' => 'finances_responsibles', 'action' => 'view', $financial['FinancesResponsible']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($financial['Financial']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Financial'), array('action' => 'edit', $financial['Financial']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Financial'), array('action' => 'delete', $financial['Financial']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $financial['Financial']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Financials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financial'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List P. Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New P. Actions'), array('controller' => 'project_actions', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List CDMT'), array('controller' => 'finances_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New CDMT'), array('controller' => 'finances_responsibles', 'action' => 'admin_add')); ?> </li>
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
