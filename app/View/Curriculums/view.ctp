<div class="curriculums view">
<h2><?php echo __('Curriculum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Studies'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['studies']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Trainigs'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['trainigs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Professional Experiences'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['professional_experiences']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Languages'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['languages']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Computer Experiences'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['computer_experiences']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($curriculum['Curriculum']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cv'), array('action' => 'edit', $curriculum['Curriculum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cv'), array('action' => 'delete', $curriculum['Curriculum']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $curriculum['Curriculum']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Curriculums'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curriculum'), array('action' => 'add')); ?> </li>
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
