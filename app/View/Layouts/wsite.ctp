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
        
        <div class="wrapper"> </div>
        <!-- Possible de changer en class="navbar navbar-default-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <h1><a href="bonjour.php" class=navbar-brand>Prodefpe MALI</a></h1>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                            <li><?php echo $this->Html->link('Accueil', array('controller' => 'posts', 'action' => 'liste')); ?></li>
                        
                            <li><?php echo $this->Html->link('Général', array('controller' => 'inserts', 'action' => 'liste')); ?></li>
                        
                            <li><?php echo $this->Html->link('Composantes', array('controller' => 'composants', 'action' => 'liste')); ?></li>
                        
                            <li><?php echo $this->Html->link('Ministères', array('controller' => 'ministries', 'action' => 'liste')); ?></li>
                            
                            <li><?php echo $this->Html->link('Points focaux', array('controller' => 'focal_points', 'action' => 'liste')); ?></li>
                            <li><?php echo $this->Html->link('Partenaires', array('controller' => 'structures', 'action' => 'liste')); ?></li>
                            <li><?php echo $this->Html->link('Ressources', array('controller' => 'medias', 'action' => 'liste')); ?></li>
                            <li><?php echo $this->Html->link('Nous contacter', array('controller' => 'contacts', 'action' => 'add')); ?></li>
                        
                        
                        <li><!--  <span class="glyphicon glyphicon-log-in">  -->
                            <?php
                            if(AuthComponent::user()){
                                echo $this->HTML->link('Mon tableau de bord', array('controller'=>'posts', 'action'=>'index'));
                                //echo $this->HTML->link('logout', array('controller'=>'users', 'action'=>'logout'));
                                //echo $user['User']['id'];
                            }else {
                                echo $this->HTML->link('login', array('controller'=>'users', 'action'=>'login'));
                            }
                            ?><!--  </span> -->
                        </li>
                        
                        
                        
                    </ul>
                </div>
            
            </div>
        
        </nav>
                
        <header>
     <!--       
            <section id="actualites">
            <div class="container">
                <div class="red-divider"></div>
                <div class="heading">
                    <h2>Actualité</h2>
                </div>
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <ol class="carousel-indicators">
                         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                         <li data-target="#myCarousel" data-slide-to="1"></li>
                         <li data-target="#myCarousel" data-slide-to="2"></li>  
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <h3>"John t'es le meilleur! Merci pour tout..."</h3>
                            <h4>Larry Page, Google Co-Founder</h4>       
                        </div>
                          <div class="item">
                            <h3>"L'esprit le plus créatif que j'ai vu de toute ma vie..."</h3>
                            <h4>Jack Dorsey, Twitter Founder and CEO</h4>       
                        </div>
                          <div class="item">
                            <h3>"Merci John de m'avoir appris à coder... Tout ça c'est grâce à toi!"</h3>
                            <h4>Mark Zuckerberg, Facebook Founder and CEO</h4>       
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" role="button">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next" role="button">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                
                </div>
            
            </div>
        
        
        </section>
    -->
        </header>
        
         <div class="wrapper"> </div>
        <!-- -->
                <section id="main-image">
                    <div class="wrapper"></div>
                        <?php echo $this->Html->image('Entete4.JPG');
                        ?>
                    
                </section>
        
            <section class="menu">
                <div>
                    <ul>
                            <li><?php //echo $this->Html->link('Accueil', array('controller' => 'posts', 'action' => 'liste')); ?></li>
                        
                            <li><?php //echo $this->Html->link('Général', array('controller' => 'inserts', 'action' => 'liste')); ?></li>
                        
                            <li><?php //echo $this->Html->link('Composantes', array('controller' => 'composants', 'action' => 'liste')); ?></li>
                        
                            <li><?php //echo $this->Html->link('Ministères', array('controller' => 'ministries', 'action' => 'liste')); ?></li>
                            
                            <li><?php //echo $this->Html->link('Points focaux', array('controller' => 'focal_points', 'action' => 'liste')); ?></li>
                            <li><?php //echo $this->Html->link('Partenaires', array('controller' => 'structures', 'action' => 'liste')); ?></li>
                            <li><?php //echo $this->Html->link('Ressources', array('controller' => 'medias', 'action' => 'liste')); ?></li>
                            <li><?php //echo $this->Html->link('Nous contacter', array('controller' => 'contacts', 'action' => 'add')); ?></li>
                        
                        <!-- -->
                        <li> <!-- <span class="glyphicon glyphicon-log-in"> -->
                            <?php
                            if(AuthComponent::user()){
                                echo $this->HTML->link('Mon tableau de bord', array('controller'=>'posts', 'action'=>'index'));
                                //echo $user['User']['id'];
                            }else {
                                //echo $this->HTML->link('login', array('controller'=>'users', 'action'=>'login'));
                            }
                            ?><!--  </span> -->
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </section>
        
        <div class="wrapper">
            <section class="menu">
                    <nav>
                        <ul>
                            
                            
                        </ul>
                    </nav>
                </section>
            </div>
                                    
            
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
        <section id="contact">
            
                <h3>Nos partenaires</h3>
                <ul> 
                    <li>
                        <?php echo $this->Html->link(
                            $this->Html->image('cake.power.GIF', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
                            array('controller' => 'posts', 'action' => 'information'),
                            array('target' => '_blank', 'escape' => false)
                            );
                        ?>
                    </li>
                    <li><?php echo $this->Html->link(
                            $this->Html->image('cake.power.GIF', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
                            array('controller' => 'posts', 'action' => 'information'),
                            array('target' => '_blank', 'escape' => false)
                            );
                        ?>
                    </li>
                    <li><?php echo $this->Html->link(
                            $this->Html->image('cake.power.GIF', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
                            array('controller' => 'posts', 'action' => 'information'),
                            array('target' => '_blank', 'escape' => false)
                            );
                        ?>
                    </li>
                    <li><?php echo $this->Html->link(
                            $this->Html->image('cake.power.GIF', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
                            array('controller' => 'posts', 'action' => 'information'),
                            array('target' => '_blank', 'escape' => false)
                            );
                        ?>
                    </li>
                    <li>
                        <?php echo $this->Html->link(
                            $this->Html->image('cake.power.GIF', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
                            array('controller' => 'posts', 'action' => 'information'),
                            array('target' => '_blank', 'escape' => false)
                            );
                        ?>
                    </li>
                    <li><?php echo $this->Html->link(
                            $this->Html->image('cake.power.GIF', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
                            array('controller' => 'posts', 'action' => 'information'),
                            array('target' => '_blank', 'escape' => false)
                            );
                        ?>
                    </li>
                    <li><?php echo $this->Html->link(
                            $this->Html->image('cake.power.GIF', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
                            array('controller' => 'posts', 'action' => 'information'),
                            array('target' => '_blank', 'escape' => false)
                            );
                        ?>
                    </li>
                    <li><?php echo $this->Html->link(
                            $this->Html->image('cake.power.GIF', array('alt' => 'www.prodefpe.ml', 'border' => '0')),
                            array('controller' => 'posts', 'action' => 'information'),
                            array('target' => '_blank', 'escape' => false)
                            );
                        ?>
                    </li>                    
                </ul>
             <!--   
                <form>
                    <label for="name">Nom</label>
                    <input type="text" id="name" placeholder="Votre nom">
                    <label for="email">Email</label>
                    <input type="text" id="email" placeholder="Votre email">
                    <input type="submit" value="OK" class="button-3">
                </form>
            -->
           
            
        </section>
        
        
        <footer>
            <div class="container">
                <h1>Prodefpe Ml</h1>
                <div class="copyright"><span class="blue">Copyright © 2018. Tous droits réservés.</span></div>
			</div>
        </footer>
        
        
    
    </body>

</html>






