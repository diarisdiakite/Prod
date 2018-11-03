<?php
	App::import('controller', array('Posts', 'Experts','Names'));
?>

<br><br><br><br> 
    <div class="menu">
       <nav>
           
           <ul class="nav nav-pills">
       <!-- --> 
                <li role="dashboard" class="active"><a href="#1" data-toggle="tab">Actualité</a></li>
          
                           
                <li role="dashboard" ><a href="#2" data-toggle="tab">Mon Profil</a></li>
           
                <li role="dashboard" ><a href="#3" data-toggle="tab">Experts</a></li>
               
                <li role="dashboard" ><a href="#4" data-toggle="tab">Points focaux</a></li>
               
                <li role="dashboard" ><a href="#5" data-toggle="tab">CDMT</a></li>
               
                <li role="dashboard" ><a href="#6" data-toggle="tab">Structures</a></li>
               
                <li role="dashboard" ><a href="#7" data-toggle="tab">Données</a></li>
           
               <!--
                <li role="dashboard" ><?php echo $this->Html->link('CDMT', array('controller' => 'posts', 'action' => 'index', 'data-toggle' => 'tab')); ?></li>
       
                <li role="dashboard" ><?php echo $this->Html->link('Structures', array('controller' => 'posts', 'action' => 'index', 'data-toggle' => 'tab')); ?></li>
                -->
                
           </ul>
        </nav>
        <div class="tab-content">
            <!-- Actualité -->
            <div class="tab-pane active" id="1">
             <br><br>       
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
         </div>
           
            <!-- Tableau de bord -->
         
            <div class="tab-pane" id="2">
                <br><br>    
                <div class="users view">
                    
                    <dl>
                        <h3><?php echo __('Mes Informations personnelles'); ?></h3>
                        <br>
                        <dt><?php echo __('Id'); ?></dt>
                        <dd>
                            <?php echo h($user['User']['id']); ?>
                            &nbsp;
                        </dd>
                        <dt><?php echo __('Username'); ?></dt>
                        <dd>
                            <?php echo h($user['User']['username']); ?>
                            &nbsp;
                        </dd>
                        <dt><?php echo __('Password'); ?></dt>
                        <dd>
                            <?php echo h($user['User']['password']); ?>
                            &nbsp;
                        </dd>
                        <dt><?php echo __('Group'); ?></dt>
                        <dd>
                            <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
                            &nbsp;
                        </dd>
                        <dt><?php echo __('Created'); ?></dt>
                        <dd>
                            <?php echo h($user['User']['created']); ?>
                            &nbsp;
                        </dd>
                        <dt><?php echo __('Modified'); ?></dt>
                        <dd>
                            <?php echo h($user['User']['modified']); ?>
                            &nbsp;
                        </dd>
                    </dl>
                </div>
           </div>
        
            <!-- Données -->
            <div class="tab-pane " id="3">
                    <br><br>                    
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
           </div>
         
    
        <!-- Points focaux -->
       <div class="tab-pane" id="4">
            <br><br>
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
            
           
         </div>  
            
            <!-- CDMT -->
        <div class="tab-pane" id="5">
                <br><br>
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
                
           </div>
        
            <!-- Structures -->
            <div class="tab-pane " id="6">
                    
                <div class="row">
                    <div class="col-m-6">
                                    
                        <div class="thumbnail">
    
                                <?php echo $this->Html->image('icon_info.PNG', array('alt' => 'www.prodefpe.ml', 'border' => '0'))
                                ;
                                ?>
                            
                                <div class="caption">
                                    <a href="">Ajouter une structure</a>
    
                                </div>
                          </div>
                          <div class="thumbnail">
    
                                <?php echo $this->Html->image('icon_info.PNG', array('alt' => 'www.prodefpe.ml', 'border' => '0'))
                                ;
                                ?>
                            
                                <div class="caption">
                                    <a href="">Modifier une structure</a>
    
                                </div>
                          </div>
                          
                      </div>
                </div>
           </div>
            
            <div class="tab-pane " id="6">
                    
                <div class="row">
                    <div class="col-m-6">
                                    
                        <div class="thumbnail">
    
                                <?php echo $this->Html->image('icon_info.PNG', array('alt' => 'www.prodefpe.ml', 'border' => '0'))
                                ;
                                ?>
                            
                                <div class="caption">
                                    <a href="">Ajouter une structure</a>
    
                                </div>
                          </div>
                          <div class="thumbnail">
    
                                <?php echo $this->Html->image('icon_info.PNG', array('alt' => 'www.prodefpe.ml', 'border' => '0'))
                                ;
                                ?>
                            
                                <div class="caption">
                                    <a href="">Modifier une structure</a>
    
                                </div>
                          </div>
                          
                      </div>
                </div>
           </div>
       </div>
    </div>
        
        






