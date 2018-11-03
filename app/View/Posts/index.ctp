<!doctype html>
<div class="container">
<table>
<div class="menu">
       
                    
                <div class="row">
                    
                    
                        <div class="caption">
                                <h2><?php echo __('Actualité'); ?></h2>
                                
                                    <?php foreach ($posts as $post): ?>
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="thumbnail">
                                <?php //echo $this->Html->image('icon_info.PNG', array('alt' => 'www.prodefpe.ml', 'border' => '0'))
                                ;
                                ?>
                                <?php echo $this->Html->link($post['Type']['name'], array('controller' => 'types', 'action' => 'adminview', $post['Type']['id'])); ?>
                                <br><?php echo $this->Html->link($post['Post']['title'], array('action' => 'admin_view', $post['Post']['id'])); ?>
                                <!-- <br><?php echo h($post['Post']['body']); ?>&nbsp; -->
                                <br>Publié le : <?php echo h($post['Post']['created']); ?>&nbsp;
                                <br><?php echo $this->Html->link($post['User']['username'], array('controller' => 'users', 'action' => 'admin_view', $post['User']['id'])); ?>
                                    <br><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id'])); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $post['Post']['id']))); ?>
                                    <br><br>
                                </div>
                                </div>
                                    <?php endforeach; ?>
    
                                
                          
                        </div>
           
                </div>
         </div>
           
            
    </div>

</table>
</div>

<!--
<div class="container">  
	<div class="paging">
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
	<?php if (AuthComponent::user('group_id')==1): ?>
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
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
</div>
-->
</html>