<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="styles.css" rel="stylesheet">
        
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel="stylesheet">  
        <link href='http://fonts.googleapis.com/css?family=Tangerine' rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Tangerine' rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=BenchNine' rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Yantramanav' rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=BenchNine|Indie+Flower|Khand|Yantramanav' rel="stylesheet">
<!-- Bootstrap CDN -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
 <!-- Fin Bootstrap CDN     
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS 
        <link rel="stylesheet" href="bootstrap.min.css">
   
<!--Mettre les scripts dans le Body si ca ne marche pas  
        <!-- jQuery en premier, puis Popper.js et enfin Bootstrap JS 
        <script src="jquery-3.2.1.slim.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
    

        <!--
        BenchNine|Indie+Flower|Khand|Yantramanav
        -->
        <title>Prodefpe</title>
        <?php
            echo $this->Html->meta('icon');

            echo $this->Html->css('styles');

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
	   ?>
    </head>
    
    <body>
        
        
            <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <h1><?php echo $this->Html->link('PRODEFPE', array('controller' => 'posts', 'action' => 'logout')); ?></h1>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                            <li><?php echo $this->Html->link('Voir le Site', array('controller' => 'posts', 'action' => 'index')); ?></li>
                            <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
                        
                            
                        <!-- <span class="glyphicon glyphicon-log-in">  --><!--  </span> -->
                        <!-- 
                        <li> 
                            <?php
                            if(AuthComponent::user()){
                                echo $this->HTML->link('logout', array('controller'=>'users', 'action'=>'logout'));
                                //echo $user['User']['id'];
                            }else {
                                echo $this->HTML->link('login', array('controller'=>'users', 'action'=>'login'));
                            }
                            ?>
                        </li>
                        
                        -->
                        
                    </ul>
                </div>
            
            </div>
        
        </nav>
        
        
        <br><br><br><br><br>
        
            
            <section class="container">
                <div class="content"> </div>

                        <?php echo $this->Flash->render(); ?>

                        <?php echo $this->fetch('content'); ?>


                
            </section>
        <!--
        <section id="steps">
             <div class="wrapper">
                 <ul>
                    <li id="step-1">
                        <h4>Option 1</h4>
                        <p>Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text .</p>
                     </li>
                     <li id="step-2">
                        <h4>Option 2</h4>
                        <p>ext text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text .</p>
                     </li>
                     <li id="step-3">
                        <h4>Option 3</h4>
                        <p>ext text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text Text text text .</p>
                     </li>
                     <div class="clear"></div>
                 </ul>
            </div>
        </section>
        
       <section id="possibilities">
			<div class="wrapper">
                <article style="background-image: url(images/article-image-1.jpg);">
                    <div class="overlay">
                        <h4>Partez en famille</h4>
                        <p><small>Offrez le meilleur à ceux que vous aimez et partagez des moments fabuleux !</small></p>
                        <a href="#" class="button-2">Plus d'infos</a>
                    </div>
                </article>
                
                <article style="background-image: url(images/article-image-2.jpg);">
                    <div class="overlay">
                        <h4>Envie de s'evader</h4>
                        <p><small>Parfois un peu d'évasion serait le bienvenue et ferait le plus grand bien !</small></p>
                        <a href="#" class="button-2">Plus d'infos</a>
                    </div>
                </article>
                
                <div class="clear"></div>
                
			</div>
		</section>
        -->
        
        
        
        
        
        
    
    </body>

</html>






