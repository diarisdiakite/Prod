<div class="inserts view">
<h2><?php echo __('Données Générales'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($insert['Insert']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved'); ?></dt>
		<dd>
			<?php echo h($insert['Insert']['approved']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insert['User']['username'], array('controller' => 'users', 'action' => 'view', $insert['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Structure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insert['Structure']['name'], array('controller' => 'structures', 'action' => 'view', $insert['Structure']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Planification'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insert['Planification']['title'], array('controller' => 'planifications', 'action' => 'view', $insert['Planification']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ministry'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insert['Ministry']['slug'], array('controller' => 'ministries', 'action' => 'view', $insert['Ministry']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Composant'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insert['Composant']['title'], array('controller' => 'composants', 'action' => 'view', $insert['Composant']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expected Result'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insert['ExpectedResult']['title'], array('controller' => 'expected_results', 'action' => 'view', $insert['ExpectedResult']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Action'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insert['ProjectAction']['title'], array('controller' => 'project_actions', 'action' => 'view', $insert['ProjectAction']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($insert['Insert']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unity Price'); ?></dt>
		<dd>
			<?php echo h($insert['Insert']['unity_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insert['Type']['name'], array('controller' => 'types', 'action' => 'view', $insert['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Year'); ?></dt>
		<dd>
			<?php echo h($insert['Insert']['date_year_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($insert['Insert']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($insert['Insert']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($insert['Insert']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Insert'), array('action' => 'edit', $insert['Insert']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Insert'), array('action' => 'delete', $insert['Insert']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $insert['Insert']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Inserts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insert'), array('action' => 'add')); ?> </li>
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
