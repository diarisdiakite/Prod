<div class="focalPoints index">
	<h2><?php echo __('Point Focaux'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('tel'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('expert_id'); ?></th>
			<th><?php echo $this->Paginator->sort('ministry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('finances_responsible_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<?php if(AuthComponent::user('group_id')==5): ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
		<?php endif; ?>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($focalPoints as $focalPoint): ?>
	<?php if(AuthComponent::user('group_id')==5): ?>
	<tr>
		<td><?php echo h($focalPoint['FocalPoint']['name']); ?>&nbsp;</td>
		<td><?php echo h($focalPoint['FocalPoint']['tel']); ?>&nbsp;</td>
		<td><?php echo h($focalPoint['FocalPoint']['position']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($focalPoint['Expert']['name'], array('controller' => 'experts', 'action' => 'view', $focalPoint['Expert']['id'])); ?>
		</td>
		<!--
		<td>
			<?php echo $this->Html->link($focalPoint['Ministry']['id'], array('controller' => 'ministries', 'action' => 'view', $focalPoint['Ministry']['id'])); ?>
		</td>
	-->
		<td>
			<?php echo h($focalPoint['Ministry']['slug']);//, array('controller' => 'ministries', 'action' => 'view', $focalPoint['Ministry']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($focalPoint['FinancesResponsible']['name'], array('controller' => 'finances_responsibles', 'action' => 'view', $focalPoint['FinancesResponsible']['id'])); ?>
		</td>
		<td><?php echo h($focalPoint['FocalPoint']['created']); ?>&nbsp;</td>
		<td><?php echo h($focalPoint['FocalPoint']['modified']); ?>&nbsp;</td>
		<?php if(AuthComponent::user('group_id')==5): ?>
			<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $focalPoint['FocalPoint']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $focalPoint['FocalPoint']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $focalPoint['FocalPoint']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $focalPoint['FocalPoint']['id']))); ?>
		</td>
	<?php endif; ?>
	</tr>
<?php endif; ?>

<?php if(AuthComponent::user('group_id')!=5 || !AuthComponent::user()): ?>
<?php if($focalPoint['FocalPoint']['active']==1): ?>
<tr>
	<td><?php echo h($focalPoint['FocalPoint']['name']); ?>&nbsp;</td>
	<td><?php echo h($focalPoint['FocalPoint']['tel']); ?>&nbsp;</td>
	<td><?php echo h($focalPoint['FocalPoint']['position']); ?>&nbsp;</td>
	<!--
	<td>
		<?php echo $this->Html->link($focalPoint['User']['id'], array('controller' => 'users', 'action' => 'view', $focalPoint['User']['id'])); ?>
	</td>
	-->
	<td>
		<?php echo $this->Html->link($focalPoint['Expert']['name'], array('controller' => 'experts', 'action' => 'view', $focalPoint['Expert']['id'])); ?>
	</td>
	<!--
	<td>
		<?php echo $this->Html->link($focalPoint['Ministry']['id'], array('controller' => 'ministries', 'action' => 'view', $focalPoint['Ministry']['id'])); ?>
	</td>
-->
	<td>
		<?php echo h($focalPoint['Ministry']['slug']);//, array('controller' => 'ministries', 'action' => 'view', $focalPoint['Ministry']['id'])); ?>
	</td>
	<td>
		<?php echo $this->Html->link($focalPoint['FinancesResponsible']['name'], array('controller' => 'finances_responsibles', 'action' => 'view', $focalPoint['FinancesResponsible']['id'])); ?>
	</td>
	<td><?php echo h($focalPoint['FocalPoint']['created']); ?>&nbsp;</td>
	<td><?php echo h($focalPoint['FocalPoint']['modified']); ?>&nbsp;</td>
	<?php if(AuthComponent::user('group_id')==5): ?>
		<td class="actions">
		<?php echo $this->Html->link(__('View'), array('action' => 'view', $focalPoint['FocalPoint']['id'])); ?>
		<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $focalPoint['FocalPoint']['id'])); ?>
		<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $focalPoint['FocalPoint']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $focalPoint['FocalPoint']['id']))); ?>
	</td>
<?php endif; ?>
</tr>
<?php endif; ?>
<?php endif; ?>

<?php endforeach; ?>
<?php unset($focalPoint); ?>
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
		<li><?php echo $this->Html->link(__('New Focal Point'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experts'), array('controller' => 'experts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expert'), array('controller' => 'experts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List CDMT'), array('controller' => 'finances_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New CDMT'), array('controller' => 'finances_responsibles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
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
