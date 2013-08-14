<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html5>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
        <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <body>
        
        <div class='container' align='center'>
        <?php include "header.php"?>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2">
                    <!--Sidebar content-->
                    
                   <button class="btn btn-large" type="button">
                        <a href ="https://github.com/jreatherford/SolarSystem">
                            View the source
                        </a>
                    </button>
                    
                    <br> <br>
                    
                    <button class="btn btn-large" type="button">
                        <a href="content/system.jar" download = "SolarSystem.jar">
                            Download the Original Java Program
                        </a>
                    </button>
                    
                    
                </div>
                <div class="span10">
                    <!-- Things go here-->
                    
                    <ul class="thumbnails">
                        <li class="span6">
                        <a href="img/moon.png" class="thumbnail">
                          <img src="img/moon.png" data-src="holder.js/300x200" alt="">
                        </a>
                      </li>
                      <li class="span5">
                        <a href="img/javaapp.png" class="thumbnail">
                          <img src="img/javaapp.png" data-src="holder.js/300x200" alt="">
                        </a>
                      </li>
                      <li class="span11">
                        <a href="img/system.png" class="thumbnail">
                          <img src="img/system.png" data-src="holder.js/300x200" alt="">
                        </a>
                      </li>
                    </ul>
                    
                    <div align ='left'>
                    <p>The Solar System Project started as a simple Java program written by myself and Jared Cox as a class project for our astronomy class.
                    The idea seemed simple enough: We would build an interactive map of the solar system that would allow students to click on an object and
                    view information on the planet.  I would create the graphics using <a href="http://www.blender.org/">blender</a> to bind maps of the planets
                    found on NASA's website to models while Jared did research on the planets.  Then, we would use Java to create an interface to link the planets
                    and information togather.
                    
                    <p>While the project was a success (We made an 'A' on the assignment), we both felt that the project failed to meet our personal expectations.
                       Between working on projects for our CS courses and working at our jobs, we did not put the time into the project that we felt it deserved.
                       It just felt a little rushed.
                       
                    <p>Therefore, I have decided to remake the project.  It will be reimagined as a web based program and improved upon.
                        
                    <p>Unfortunately, at the time of writing this project is still in development.  However, if you are interested, you can see my work in progress
                        by checking out <a href ="https://github.com/jreatherford/SolarSystem">my github repository on the program</a>.  Also, I am putting 
                            <a href="content/system.jar" download = "SolarSystem.jar">the original java program</a> up for download as well.
                    </div>
                    <br><br><br>
                    <?php include "footer.php"?>
                </div>
            </div>
        </div>
            
        
        </div>
    </body>
</html>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
