
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo h($user['User']['username']); ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			            </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo h($user['User']['created']); ?>
                        </li>

                        
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />

                      
                    </div>


<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experts'), array('controller' => 'experts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Expert'), array('controller' => 'experts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List CDMT'), array('controller' => 'financial_responsibles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New CDMT'), array('controller' => 'financial_responsibles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
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
	<h3><?php echo __('Related Experts'); ?></h3>
	<?php if (!empty($user['Expert'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Adress'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Expert'] as $expert): ?>
		<tr>
			<td><?php echo $expert['id']; ?></td>
			<td><?php echo $expert['name']; ?></td>
			<td><?php echo $expert['adress']; ?></td>
			<td><?php echo $expert['tel']; ?></td>
			<td><?php echo $expert['position']; ?></td>
			<td><?php echo $expert['user_id']; ?></td>
			<td><?php echo $expert['created']; ?></td>
			<td><?php echo $expert['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experts', 'action' => 'view', $expert['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experts', 'action' => 'edit', $expert['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experts', 'action' => 'delete', $expert['id']), array('confirm' => __('Are you sure you want to delete # %s?', $expert['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
<br>
<!--
	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Expert'), array('controller' => 'experts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
-->
<div class="related">
	<h3><?php echo __('Related Financial Responsibles'); ?></h3>
	<?php if (!empty($user['FinancialResponsible'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Adress'); ?></th>
		<th><?php echo __('Tel'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['FinancesResponsible'] as $financesResponsible): ?>
		<tr>
			<td><?php echo $financesResponsible['id']; ?></td>
			<td><?php echo $financesResponsible['name']; ?></td>
			<td><?php echo $financesResponsible['adress']; ?></td>
			<td><?php echo $financesResponsible['tel']; ?></td>
			<td><?php echo $financesResponsible['position']; ?></td>
			<td><?php echo $financesResponsible['user_id']; ?></td>
			<td><?php echo $financesResponsible['created']; ?></td>
			<td><?php echo $financesResponsible['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'finances_responsibles', 'action' => 'view', $financialResponsible['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'finances_responsibles', 'action' => 'edit', $financialResponsible['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'finances_responsibles', 'action' => 'delete', $financialResponsible['id']), array('confirm' => __('Are you sure you want to delete # %s?', $financialResponsible['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New CDMT'), array('controller' => 'finances_responsibles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Focal Points'); ?></h3>
	<?php if (!empty($user['FocalPoint'])): ?>
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
		<th><?php echo __('Financial Responsible Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['FocalPoint'] as $focalPoint): ?>
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
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($user['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['body']; ?></td>
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
