<!DOCTYPE html5>
<html>
    <head>
        <title>Software Engineering Project - James Reatherford</title>
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
                                <p>This was our software engineering (CS455) class project.  The goal was to create a system
                                    that would create a schedule for a college department for a semester.  The system would
                                    read from several files and schedule time(s) for a class, match it with an appropriately sized
                                    room, and assign a teacher to teach it.  The program takes into account teacher's preferences (which
                                    can be entered from a form available to the teacher's account.)  The preferences that a teacher may enter
                                    is the class(es) that he/she wishes to teach along with the preferred times to teach the class.
                                    
                                <p>My role on this team was "Software Quality Assurance Advisor" and my responsibilities were
                                <ul>
                                    <li>Creation of test files/scenarios</li>
                                    <li>Creation of Scanners to read input files</li>
                                    <li>Creation of the Teacher Preference form</li>
                                    <li>Testing</li>
                                    <li>Anything else I could find that needed doing...</li>
                                </ul>
                            </div>
                            
                            <br><br><br>
                            <?php include "footer.php"?>
                            
                        </div>
                        
                    </div>
                </div>
            
        </div>
    </body>
</html>