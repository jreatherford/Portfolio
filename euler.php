<!DOCTYPE html5>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    </head>

    <body>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <div class='container' align='center'>
            <?php include "header.php"?>

            <div class="container-fluid">
                <div class="row-fluid">
                    
                    <!--Sidebar Buttons-->
                    <div class="span2">
                         <button class="btn btn-large" type="button">
                            <a href ="http://projecteuler.net/">
                                Visit Project Euler
                            </a>
                        </button>
                        <br><br>
                        <button class="btn btn-large" type="button">
                            <a href ="https://github.com/jreatherford/Euler">
                                See my project Euler files
                            </a>
                        </button> 
                    </div>
                    
                    <!--Main window content-->
                    <div class="span10">
                        <!-- Things go here-->
                    </div>
                    
                </div>
            </div>

            <br><br><br>
            <?php include "footer.php"?>
        </div>
    </body>
</html>
