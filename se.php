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
                                <a href ="https://github.com/jreatherford/SoftwareEngineeringProject">
                                    View the source
                                </a>
                            </button>
                        </div>

                        <!--Main window content-->
                        <div class="span10">

                            <!--Thumbnail images of the program-->
                            <ul class="thumbnails">
                                <li class="span5">
                                    <a href="img/SE.png" class="thumbnail">
                                        <img src="img/SE.png" data-src="holder.js/300x200" alt="">
                                    </a>
                                </li>
                                <li class="span6">
                                    <a href="img/SEintro.png" class="thumbnail">
                                        <img src="img/SEintro.png" data-src="holder.js/300x200" alt="">
                                    </a>
                                </li>
                            </ul>

                            <!--Project description-->
                            <div align ='left'>
                                <p>insert project description here
                            </div>
                            
                            <br><br><br>
                            <?php include "footer.php"?>
                            
                        </div>
                        
                    </div>
                </div>
            
        </div>
    </body>
</html>