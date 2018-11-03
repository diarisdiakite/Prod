<?php
	App::import('controller', 'Ministries');
?>
<div class="focalPoints view">
<h2><?php echo __('Point Focal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($focalPoint['FocalPoint']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($focalPoint['FocalPoint']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Adress'); ?></dt>
		<dd>
			<?php echo h($focalPoint['FocalPoint']['adress']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel'); ?></dt>
		<dd>
			<?php echo h($focalPoint['FocalPoint']['tel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($focalPoint['FocalPoint']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($focalPoint['User']['username'], array('controller' => 'users', 'action' => 'view', $focalPoint['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expert'); ?></dt>
		<dd>
			<?php echo $this->Html->link($focalPoint['Expert']['name'], array('controller' => 'experts', 'action' => 'view', $focalPoint['Expert']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($focalPoint['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $focalPoint['Ministry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finances Responsible'); ?></dt>
		<dd>
			<?php echo $this->Html->link($focalPoint['FinancesResponsible']['name'], array('controller' => 'finances_responsibles', 'action' => 'view', $focalPoint['FinancesResponsible']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($focalPoint['FocalPoint']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($focalPoint['FocalPoint']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Focal Point'), array('action' => 'edit', $focalPoint['FocalPoint']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Focal Point'), array('action' => 'delete', $focalPoint['FocalPoint']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $focalPoint['FocalPoint']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experts'), array('controller' => 'experts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expert'), array('controller' => 'experts', 'action' => 'admin_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'admn_add')); ?> </li>
		<li><?php echo $this->Html->link(__('List CDMT'), array('controller' => 'finances_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New CDMT'), array('controller' => 'finances_responsibles', 'admin_action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'admin_add')); ?> </li>
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
	<h3><?php echo __('Related Structures'); ?></h3>
	<?php if (!empty($focalPoint['Structure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Responsible'); ?></th>
		<th><?php echo __('Contact'); ?></th>
		<!--    -->
		<th><?php echo __('Focal Point Id'); ?></th>
		<th><?php echo __('Ministry Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($focalPoint['Structure'] as $structure): ?>
		<!--Afficher user_id -->
		<?php $mcontroller = new MinistriesController;?>
		<?php $mname = $mcontroller->getMinistryById($structure['ministry_id']);?>

		<tr>
			<td><?php echo $structure['id']; ?></td>
			<td><?php echo $structure['name']; ?></td>
			<td><?php echo $structure['responsible']; ?></td>
			<td><?php echo $structure['contact']; ?></td>
			<!--   -->
			<td><?php echo $focalPoint['FocalPoint']['name']; ?></td>
			<td><?php echo $this->Html->link($mname['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $structure['ministry_id'])) ; ?></td>
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
			<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add', $focalPoint['FocalPoint']['id'])); ?> </li>
		</ul>
	</div>
</div>
