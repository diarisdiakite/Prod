<div class="leashes view">
<h2><?php echo __('Filière'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leash['Leash']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($leash['Leash']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($leash['Leash']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sector'); ?></dt>
		<dd>
			<?php echo $this->Html->link($leash['Sector']['title'], array('controller' => 'sectors', 'action' => 'view', $leash['Sector']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($leash['Leash']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($leash['Leash']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Leash'), array('action' => 'edit', $leash['Leash']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Leash'), array('action' => 'delete', $leash['Leash']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $leash['Leash']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Leashes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leash'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sectors'), array('controller' => 'sectors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sector'), array('controller' => 'sectors', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Job Emp.'), array('controller' => 'job_employments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Job Emp.'), array('controller' => 'job_employments', 'action' => 'admin_add')); ?> </li>
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
	<h3><?php echo __('Related Job Employments'); ?></h3>
	<?php if (!empty($leash['JobEmployment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Leash(Filière)'); ?></th>
		<th><?php echo __('Job Employment Title'); ?></th>
		<!--
		<th><?php echo __('Description'); ?></th>
		-->
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($leash['JobEmployment'] as $jobEmployment): ?>
		<tr>
			<td><?php echo $jobEmployment['id']; ?></td>
			<td><?php echo $leash['Leash']['title']; ?></td>
			<td><?php echo $jobEmployment['title']; ?></td>
			<!--
			<td><?php echo $jobEmployment['description']; ?></td>
		-->
			<td><?php echo $jobEmployment['created']; ?></td>
			<td><?php echo $jobEmployment['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'job_employments', 'action' => 'admin_view', $jobEmployment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'job_employments', 'action' => 'edit', $jobEmployment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'job_employments', 'action' => 'delete', $jobEmployment['id']), array('confirm' => __('Are you sure you want to delete # %s?', $jobEmployment['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Job Employment'), array('controller' => 'job_employments', 'action' => 'add', $leash['Leash']['id'])); ?> </li>
		</ul>
	</div>
</div>
