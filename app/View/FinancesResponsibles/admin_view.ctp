<div class="financesResponsibles view">
<h2><?php echo __('CDMT'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($financesResponsible['FinancesResponsible']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($financesResponsible['FinancesResponsible']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($financesResponsible['FinancesResponsible']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($financesResponsible['FinancesResponsible']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($financesResponsible['FinancesResponsible']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($financesResponsible['User']['id'], array('controller' => 'users', 'action' => 'view', $financesResponsible['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($financesResponsible['FinancesResponsible']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($financesResponsible['FinancesResponsible']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit CDMT'), array('action' => 'edit', $financesResponsible['FinancesResponsible']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete CDMT'), array('action' => 'delete', $financesResponsible['FinancesResponsible']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $financesResponsible['FinancesResponsible']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List CDMT'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New CDMT'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Financials'), array('controller' => 'financials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Financial'), array('controller' => 'financials', 'action' => 'add')); ?> </li>
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
	<h3><?php echo __('Related Financials'); ?></h3>
	<?php if (!empty($financesResponsible['Financial'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Project Action Id'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th><?php echo __('Finances Responsible Id'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($financesResponsible['Financial'] as $financial): ?>
		<tr>
			<td><?php echo $financial['id']; ?></td>
			<td><?php echo $financial['created']; ?></td>
			<td><?php echo $financial['project_action_id']; ?></td>
			<td><?php echo $financial['budget']; ?></td>
			<td><?php echo $financial['finances_responsible_id']; ?></td>
			<td><?php echo $financial['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'financials', 'action' => 'admin_view', $financial['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'financials', 'action' => 'edit', $financial['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'financials', 'action' => 'delete', $financial['id']), array('confirm' => __('Are you sure you want to delete # %s?', $financial['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Financial'), array('controller' => 'financials', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
