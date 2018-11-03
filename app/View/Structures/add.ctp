<!-- Utiliser class="form-inline" pour mettre sur la meme ligne -->


    <div class="structures form">
        <?php echo $this->Form->create('Structure', array('class' => 'form')); ?>
            <fieldset>
                <legend><?php echo __('Ajouter une nouvelle Structure'); ?></legend>
            <?php
                echo $this->Form->input('user_id', array('class' => 'form-control'));
                echo $this->Form->input('name', array('class' => 'form-control'));
                echo $this->Form->input('responsible', array('class' => 'form-control'));
                echo $this->Form->input('contact', array('class' => 'form-control'));
                echo $this->Form->input('focal_point_id', array('class' => 'form-control'));
                echo $this->Form->input('ministry_id', array('class' => 'form-control'));
                echo $this->Form->input('active', array('class' => 'checkbox'));
            ?>
            </fieldset>
        <?php echo $this->Form->end(__('Submit'), array('class' => 'btn-btn-primary btn-block')); ?>

        </div>





<div class="actions">
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Structures'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Focal Points'), array('controller' => 'focal_points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Focal Point'), array('controller' => 'focal_points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ministries'), array('controller' => 'ministries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ministry'), array('controller' => 'ministries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Attributes'), array('controller' => 'attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Attribute'), array('controller' => 'attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Technicals'), array('controller' => 'technicals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical'), array('controller' => 'technicals', 'action' => 'add')); ?> </li>
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
