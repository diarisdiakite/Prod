<div class="ministries view">
<h2><?php echo __('Ministry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ministry['Name']['title'], array('controller' => 'names', 'action' => 'view', $ministry['Name']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slug'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['slug']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ministry['Team']['name'], array('controller' => 'teams', 'action' => 'view', $ministry['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expert'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ministry['Expert']['name'], array('controller' => 'experts', 'action' => 'view', $ministry['Expert']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ministry['Ministry']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ministry'), array('action' => 'edit', $ministry['Ministry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ministry'), array('action' => 'delete', $ministry['Ministry']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $ministry['Ministry']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Names'), array('controller' => 'names', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Name'), array('controller' => 'names', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experts'), array('controller' => 'experts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expert'), array('controller' => 'experts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Planifications'), array('controller' => 'planifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Planification'), array('controller' => 'planifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Focal Points'); ?></h3>
	<?php if (!empty($ministry['FocalPoint'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Adress'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Expert Id'); ?></th>
		<th><?php echo __('Ministry Id'); ?></th>
		<th><?php echo __('Finances Responsible Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ministry['FocalPoint'] as $focalPoint): ?>
		<tr>
			<td><?php echo $focalPoint['id']; ?></td>
			<td><?php echo $focalPoint['name']; ?></td>
			<td><?php echo $focalPoint['adress']; ?></td>
			<td><?php echo $focalPoint['tel']; ?></td>
			<td><?php echo $focalPoint['position']; ?></td>
			<td><?php echo $focalPoint['user_id']; ?></td>
			<td><?php echo $focalPoint['expert_id']; ?></td>
			<td><?php echo $focalPoint['ministry_id']; ?></td>
			<td><?php echo $focalPoint['finances_responsible_id']; ?></td>
			<td><?php echo $focalPoint['active']; ?></td>
			<td><?php echo $focalPoint['created']; ?></td>
			<td><?php echo $focalPoint['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'focal_points', 'action' => 'view', $focalPoint['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'focal_points', 'action' => 'edit', $focalPoint['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'focal_points', 'action' => 'delete', $focalPoint['id']), array('confirm' => __('Are you sure you want to delete # %s?', $focalPoint['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Planifications'); ?></h3>
	<?php if (!empty($ministry['Planification'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Ministry Id'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ministry['Planification'] as $planification): ?>
		<tr>
			<td><?php echo $planification['id']; ?></td>
			<td><?php echo $planification['approved']; ?></td>
			<td><?php echo $planification['user_id']; ?></td>
			<td><?php echo $planification['ministry_id']; ?></td>
			<td><?php echo $planification['year']; ?></td>
			<td><?php echo $planification['title']; ?></td>
			<td><?php echo $planification['created']; ?></td>
			<td><?php echo $planification['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'planifications', 'action' => 'view', $planification['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'planifications', 'action' => 'edit', $planification['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'planifications', 'action' => 'delete', $planification['id']), array('confirm' => __('Are you sure you want to delete # %s?', $planification['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Planification'), array('controller' => 'planifications', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Structures'); ?></h3>
	<?php if (!empty($ministry['Structure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Responsible'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<th><?php echo __('Focal Point Id'); ?></th>
		<th><?php echo __('Ministry Id'); ?></th>
		<th><?php echo __('Active'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($ministry['Structure'] as $structure): ?>
		<tr>
			<td><?php echo $structure['id']; ?></td>
			<td><?php echo $structure['user_id']; ?></td>
			<td><?php echo $structure['name']; ?></td>
			<td><?php echo $structure['responsible']; ?></td>
			<td><?php echo $structure['contact']; ?></td>
			<td><?php echo $structure['focal_point_id']; ?></td>
			<td><?php echo $structure['ministry_id']; ?></td>
			<td><?php echo $structure['active']; ?></td>
			<td><?php echo $structure['created']; ?></td>
			<td><?php echo $structure['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'structures', 'action' => 'view', $structure['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'structures', 'action' => 'edit', $structure['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'structures', 'action' => 'delete', $structure['id']), array('confirm' => __('Are you sure you want to delete # %s?', $structure['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
