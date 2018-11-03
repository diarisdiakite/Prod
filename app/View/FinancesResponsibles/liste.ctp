<div class="financesResponsibles index">
	<h2><?php echo __('CDMTs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('adress'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($financesResponsibles as $financesResponsible): ?>
	<?php if(AuthComponent::user('group_id')==2): ?>

	<tr>
		<td><?php echo h($financesResponsible['FinancesResponsible']['id']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['name']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['adress']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['tel']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['position']); ?>&nbsp;</td>
		<!--
		<td>
			<?php echo $this->Html->link($financesResponsible['User']['id'], array('controller' => 'users', 'action' => 'view', $financesResponsible['User']['id'])); ?>
		</td>
	-->
		<td>
			<?php echo h($financesResponsible['User']['username']); ?>
		</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['created']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $financesResponsible['FinancesResponsible']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $financesResponsible['FinancesResponsible']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financesResponsible['FinancesResponsible']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $financesResponsible['FinancesResponsible']['id']))); ?>
		</td>
	</tr>
<?php endif; ?>

<?php if(AuthComponent::user('group_id')!=5 || !AuthComponent::user()): ?>
<?php if($financesResponsible['FinancesResponsible']['active']==1): ?>
	<tr>
		<td><?php echo h($financesResponsible['FinancesResponsible']['id']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['name']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['adress']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['tel']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['position']); ?>&nbsp;</td>
		<!--
		<td>
			<?php echo $this->Html->link($financesResponsible['User']['id'], array('controller' => 'users', 'action' => 'view', $financesResponsible['User']['id'])); ?>
		</td>
	-->
		<td>
			<?php echo h($financesResponsible['User']['username']); ?>
		</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['created']); ?>&nbsp;</td>
		<td><?php echo h($financesResponsible['FinancesResponsible']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $financesResponsible['FinancesResponsible']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $financesResponsible['FinancesResponsible']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $financesResponsible['FinancesResponsible']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $financesResponsible['FinancesResponsible']['id']))); ?>
		</td>
	</tr>
	<?php endif; ?>
	<?php endif; ?>
<?php endforeach; ?>
<?php unset($financesResponsible); ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New CDMT'), array('action' => 'add')); ?></li>
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
