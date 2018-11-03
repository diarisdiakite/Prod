       <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Prodefpe Ml</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><td class="pmenu" width="16%">
	<?php
	if(AuthComponent::user()){
		echo $this->HTML->link('logout', array('controller'=>'users', 'action'=>'logout'));
		//echo $user['User']['id'];
	}else {
		echo $this->HTML->link('login', array('controller'=>'users', 'action'=>'login'));
	}
	?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>ADMINS</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Programme <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo $this->Html->link(__('Ministères'), array('controller' => 'ministries', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Composantes'), array('controller' => 'composants', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Resultats attendus'), array('controller' => 'expected_results', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Projets Actions'), array('controller' => 'project_actions', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Emplois Métiers'), array('controller' => 'job_employments', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Filières'), array('controller' => 'leashes', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Formations'), array('controller' => 'trainings', 'action' => 'index')); ?></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo $this->Html->link(__('Experts'), array('controller' => 'experts', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Assistants'), array('controller' => 'assistants', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Secretaires'), array('controller' => 'secretaries', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Points focaux'), array('controller' => 'focal_points', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('CDMT'), array('controller' => 'finances_responsibles', 'action' => 'index')); ?></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Validations <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo $this->Html->link(__('Structures'), array('controller' => 'structures', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Données Techniques'), array('controller' => 'technicals', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Données Financières'), array('controller' => 'financials', 'action' => 'index')); ?></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-home"></i> Annonces <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo $this->Html->link(__('Nouveau'), array('controller' => 'posts', 'action' => 'add')); ?></li>
                    </ul>
                  </li>
                  
                </ul>
              </div>
              

            <div class="menu_section">
                <h3>ADMINISTRATION</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Secretariat <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><?php echo $this->Html->link(__('Annonces'), array('controller' => 'posts', 'action' => 'add')); ?></li>
                      <li><?php echo $this->Html->link(__('Demandes Infos'), array('controller' => 'contacts', 'action' => 'index')); ?></li>
                      <li><?php echo $this->Html->link(__('Aff. Courriers'), array('controller' => 'assignements', 'action' => 'add')); ?></li>
                    </ul>
                  </li>
                <li><a><i class="fa fa-sitemap"></i> Experts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        
                        <li><a>Ministères<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><?php echo $this->Html->link(__('Liste'), array('controller' => 'ministries', 'action' => 'liste')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('Points focaux'), array('controller' => 'focal_points', 'action' => 'index')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('CDMT'), array('controller' => 'financials_responsibles', 'action' => 'index')); ?></li>
                          </li>
                          </ul>
                        </li>
                        
                        <li><a>Données<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><?php echo $this->Html->link(__('Liste'), array('controller' => 'users', 'action' => 'liste')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('Ajouter Données techniques'), array('controller' => 'technicals', 'action' => 'add')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('Ajouter Données financières'), array('controller' => 'financials', 'action' => 'add')); ?></li>
                          </li>
                          </ul>
                        </li>

                        <li><a>Posts<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><?php echo $this->Html->link(__('Liste'), array('controller' => 'posts', 'action' => 'index')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('Ajouter un post'), array('controller' => 'posts', 'action' => 'add')); ?></li>
                          </li>
                          </ul>
                        </li>
                        
                    </ul>
                    
                  </li> 
                  <li><a><i class="fa fa-sitemap"></i> Assistants <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        
                        <li><a>Ministères<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><?php echo $this->Html->link(__('Liste'), array('controller' => 'ministries', 'action' => 'liste')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('Points focaux'), array('controller' => 'focal_points', 'action' => 'index')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('CDMT'), array('controller' => 'financials_responsibles', 'action' => 'index')); ?></li>
                          </li>
                          </ul>
                        </li>
                        
                        <li><a>Données<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><?php echo $this->Html->link(__('Liste'), array('controller' => 'users', 'action' => 'liste')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('Ajouter Données techniques'), array('controller' => 'technicals', 'action' => 'add')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('Ajouter Données financières'), array('controller' => 'financials', 'action' => 'add')); ?></li>
                          </li>
                          </ul>
                        </li>

                        <li><a>Posts<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                          <li><?php echo $this->Html->link(__('Liste'), array('controller' => 'posts', 'action' => 'index')); ?></li>
                          </li>
                          <li><?php echo $this->Html->link(__('Ajouter un post'), array('controller' => 'posts', 'action' => 'add')); ?></li>
                          </li>
                          </ul>
                        </li>
                        
                    </ul>
                    
                  </li>                
                  </ul>
              </div>

            </div>

            
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        