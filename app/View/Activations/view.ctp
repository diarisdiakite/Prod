<div class="activations view">
<h2><?php echo __('Activation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activation['Activation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activation['User']['username'], array('controller' => 'users', 'action' => 'view', $activation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Administrator'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activation['Administrator']['name'], array('controller' => 'administrators', 'action' => 'view', $activation['Administrator']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($activation['Activation']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($activation['Activation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($activation['Activation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activation'), array('action' => 'edit', $activation['Activation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activation'), array('action' => 'delete', $activation['Activation']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $activation['Activation']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Activations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Administrators'), array('controller' => 'administrators', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Administrator'), array('controller' => 'administrators', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inserts'), array('controller' => 'inserts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insert'), array('controller' => 'inserts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Structures'), array('controller' => 'structures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Structure'), array('controller' => 'structures', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Administrators'); ?></h3>
	<?php if (!empty($activation['Administrator'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Adress'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Activation Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activation['Administrator'] as $administrator): ?>
		<tr>
			<td><?php echo $administrator['id']; ?></td>
			<td><?php echo $administrator['name']; ?></td>
			<td><?php echo $administrator['adress']; ?></td>
			<td><?php echo $administrator['tel']; ?></td>
			<td><?php echo $administrator['position']; ?></td>
			<td><?php echo $administrator['user_id']; ?></td>
			<td><?php echo $administrator['post_id']; ?></td>
			<td><?php echo $administrator['activation_id']; ?></td>
			<td><?php echo $administrator['created']; ?></td>
			<td><?php echo $administrator['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'administrators', 'action' => 'view', $administrator['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'administrators', 'action' => 'edit', $administrator['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'administrators', 'action' => 'delete', $administrator['id']), array('confirm' => __('Are you sure you want to delete # %s?', $administrator['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Administrator'), array('controller' => 'administrators', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Inserts'); ?></h3>
	<?php if (!empty($activation['Insert'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Structure Id'); ?></th>
		<th><?php echo __('Planification Id'); ?></th>
		<th><?php echo __('Ministry Id'); ?></th>
		<th><?php echo __('Composant Id'); ?></th>
		<th><?php echo __('Expected Result Id'); ?></th>
		<th><?php echo __('Project Action Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Unity Price'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('Date Year'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activation['Insert'] as $insert): ?>
		<tr>
			<td><?php echo $insert['id']; ?></td>
			<td><?php echo $insert['approved']; ?></td>
			<td><?php echo $insert['user_id']; ?></td>
			<td><?php echo $insert['structure_id']; ?></td>
			<td><?php echo $insert['planification_id']; ?></td>
			<td><?php echo $insert['ministry_id']; ?></td>
			<td><?php echo $insert['composant_id']; ?></td>
			<td><?php echo $insert['expected_result_id']; ?></td>
			<td><?php echo $insert['project_action_id']; ?></td>
			<td><?php echo $insert['quantity']; ?></td>
			<td><?php echo $insert['unity_price']; ?></td>
			<td><?php echo $insert['type_id']; ?></td>
			<td><?php echo $insert['date_year']; ?></td>
			<td><?php echo $insert['amount']; ?></td>
			<td><?php echo $insert['created']; ?></td>
			<td><?php echo $insert['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inserts', 'action' => 'view', $insert['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inserts', 'action' => 'edit', $insert['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inserts', 'action' => 'delete', $insert['id']), array('confirm' => __('Are you sure you want to delete # %s?', $insert['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Insert'), array('controller' => 'inserts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($activation['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($activation['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['type_id']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['body']; ?></td>
			<td><?php echo $post['published']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Structures'); ?></h3>
	<?php if (!empty($activation['Structure'])): ?>
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
	<?php foreach ($activation['Structure'] as $structure): ?>
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
