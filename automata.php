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
                        <a href ="https://github.com/jreatherford/AutomataProject">
                            View the source
                        </a>
                    </button>
                    
                    
                </div>
                <div class="span10">
                    
                    <ul class="thumbnails">
                      <li class="span5">
                        <a href="img/code.png" class="thumbnail">
                          <img src="img/code.png" data-src="holder.js/300x200" alt="">
                        </a>
                      </li>
                      <li class="span6">
                        <a href="img/parse.png" class="thumbnail">
                          <img src="img/parse.png" data-src="holder.js/300x200" alt="">
                        </a>
                      </li>
                    </ul>
                    
                    <div align ='left'>
                        
                    <p>Out of all the projects I had to do while earning my CS degree, this was my second favorite.
                        (My favorite project was a Genetic Algorithm project for my AI class.  Unfortunately, I no longer have the
                         source code for it)
                    
                    <p>For my Automata Theory and Compiler Construction class, we were given the BNF for a small language.  It was a
                        subset of Pascal called Mini-P.  We simply had to write a Scanner and Parser that would check if the input file
                        was a valid program in the language.
                        
                    <p>The program was to be written in C.
                        
                    <p>Sadly, one semester was not long enough for us to be able to code generation so that Mini-P ran through the program could be executed.
                       However, this project has made me quite interested in Automata theory and I have many ideas for future side projects involving it.  
                       (Who knows, I may even pick this program back up and try to add code generation)
                        
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
