<div class="realizations view">
<h2><?php echo __('Realization'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($realization['Realization']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($realization['User']['username'], array('controller' => 'users', 'action' => 'view', $realization['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Insert'); ?></dt>
		<dd>
			<?php echo $this->Html->link($realization['Insert']['id'], array('controller' => 'inserts', 'action' => 'view', $realization['Insert']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Structure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($realization['Structure']['name'], array('controller' => 'structures', 'action' => 'view', $realization['Structure']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Focal Point'); ?></dt>
		<dd>
			<?php echo $this->Html->link($realization['FocalPoint']['name'], array('controller' => 'focal_points', 'action' => 'view', $realization['FocalPoint']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Finances Responsible'); ?></dt>
		<dd>
			<?php echo $this->Html->link($realization['FinancesResponsible']['name'], array('controller' => 'finances_responsibles', 'action' => 'view', $realization['FinancesResponsible']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($realization['Realization']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($realization['Realization']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($realization['Realization']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($realization['Realization']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($realization['Realization']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Realization'), array('action' => 'edit', $realization['Realization']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Realization'), array('action' => 'delete', $realization['Realization']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $realization['Realization']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Realizations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Realization'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inserts'), array('controller' => 'inserts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insert'), array('controller' => 'inserts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Finances Responsibles'), array('controller' => 'finances_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Finances Responsible'), array('controller' => 'finances_responsibles', 'action' => 'add')); ?> </li>
	</ul>
</div>
