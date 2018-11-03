<?php
			/*	require 'admin/database.php'; */
			 
                echo '<nav>
                        <ul class="nav nav-pills">';

/*               
                $db = Database::connect();
                $statement = $db->query('SELECT * FROM assignments');
                $assignments = $statement->fetchAll();
*/
                foreach ($assignments as $assignment) 
                {
                    if($assignment['id'] == '1')
                        echo '<li role="presentation" class="active"><a href="#'. $assignment['id'] . '" data-toggle="tab">' . $assignment['name'] . '</a></li>';
                    else
                        echo '<li role="presentation"><a href="#'. assignment['id'] . '" data-toggle="tab">' . $assignment['name'] . '</a></li>';
                }

                echo    '</ul>
                      </nav>';

                echo '<div class="tab-content">';

                foreach ($assignments as $assignment) 
                {
                    if($assignment['id'] == '1')
                        echo '<div class="tab-pane active" id="' . $assignment['id'] .'">';
                    else
                        echo '<div class="tab-pane" id="' . $assignment['id'] .'">';
                    
                    echo '<div class="row">';

                    
                    $statement = $db->prepare('SELECT * FROM operations WHERE operations.assignment = ?');
                    $statement->execute(array($assignment['id']));
                    while ($operation = $statement->fetch()) 
                    {
                        echo '<div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="images/' . $operation['image'] . '" alt="...">
                                    <div class="price">' . number_format($operation['duration'], 2, '.', ''). ' €</div>
                                    <div class="caption">
                                        <h4>' . $operation['name'] . '</h4>
                                        <p>' . $operation['description'] . '</p>
                                        <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                    </div>
                                </div>
                            </div>';
                    }
                   
                   echo    '</div>
                        </div>';
                }
/*
                Database::disconnect();
*/
                echo  '</div>';
            ?>