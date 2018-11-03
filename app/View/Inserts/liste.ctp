<div class="inserts index">
	<h2><?php echo __('Inserts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ministry_id'); ?></th>
			<th><?php echo $this->Paginator->sort('composant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('expected_result_id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_action_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('unity_price'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_year_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inserts as $insert): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($insert['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $insert['Ministry']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($insert['Composant']['title'], array('controller' => 'composants', 'action' => 'view', $insert['Composant']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($insert['ExpectedResult']['title'], array('controller' => 'expected_results', 'action' => 'view', $insert['ExpectedResult']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($insert['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $insert['ProjectAction']['id'])); ?>
		</td>
		<td><?php echo h($insert['Insert']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($insert['Insert']['unity_price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($insert['Type']['name'], array('controller' => 'types', 'action' => 'view', $insert['Type']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($insert['DateYear']['year'], array('controller' => 'date_years', 'action' => 'view', $insert['DateYear']['id'])); ?>
		</td>
		<td><?php echo h($insert['Insert']['amount']); ?>&nbsp;</td>
		<td><?php echo h($insert['Insert']['created']); ?>&nbsp;</td>
		<td><?php echo h($insert['Insert']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $insert['Insert']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $insert['Insert']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $insert['Insert']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $insert['Insert']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Insert'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planifications'), array('controller' => 'planifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planification'), array('controller' => 'planifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Composants'), array('controller' => 'composants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composant'), array('controller' => 'composants', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Expected Results'), array('controller' => 'expected_results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expected Result'), array('controller' => 'expected_results', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Action'), array('controller' => 'project_actions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Date Years'), array('controller' => 'date_years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date Year'), array('controller' => 'date_years', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('controller' => 'activations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('controller' => 'activations', 'action' => 'add')); ?> </li>
	</ul>
</div>
