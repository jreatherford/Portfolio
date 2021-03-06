<!DOCTYPE html5>
<html>
    
    <head>
        <title>
            James Reatherford
        </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>
    
    <body>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!--Bootstrap container.  Makes everything nice and centered-->
        <div class='container' align='center'>
            
            <?php include "header.php"?>
       
            <!--Create a carousel using bootstrap-->
            <div id="myCarousel" class="carousel slide">

                <!--This is to indicate how many slides will be in the carousel-->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Carousel items start here -->
                <div class="carousel-inner">

                    
                    <div class="active item">
                        <a href="space.php">
                            <img src="img/moon.png">
                            <div class="carousel-caption">
                                <p><b>Solar System Project</b>
                                <p> Solar System Educational Tool
                            </div>  
                        </a>
                    </div>

                    <div class="item">
                        <a href="se.php">
                            <img src="img/SE.png">
                            <div class="carousel-caption">
                                <p><b>Software Engineering Project 2013</b>
                                <p> College Schedule Management System
                            </div>
                        </a>
                    </div>
                    
                    <div class="item">
                        <a href="spark.php">
                            <img src="img/spark.png">
                            <div class="carousel-caption">
                                <p><b>The Spark</b>
                                <p> Planechase Simulator
                            </div>  
                        </a>
                    </div>

                    <div class="item">
                        <a href="automata.php">
                            <img src="img/code.png">
                            <div class="carousel-caption">
                                <p><b>Automata Project</b>
                                <p> Mini-P Scanner & Parser
                            </div>
                        </a>
                    </div>

                </div>

                <!-- Carousel navigation buttons -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
            </div>
       
            <?php include "footer.php"?>
            
        </div>
    </body>
</html>
