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
                    
                    <!--Sidebar buttons-->
                    <div class="span2">
                        <button class="btn btn-large" type="button">
                            <a href ="http://mtg.jreatherford.com/">
                                Visit the Site
                            </a>
                        </button>

                        <br> <br>

                        <button class="btn btn-large" type="button">
                            <a href ="https://github.com/jreatherford/TheSpark">
                                View the source
                            </a>
                        </button>
                    </div>
                    
                    <!--Main window content-->
                    <div class="span10">

                        <!--Project thumbails-->
                        <ul class="thumbnails">
                            <li class="span4">
                                <a href="img/sparkintro.png" class="thumbnail">
                                    <img src="img/sparkintro.png" data-src="holder.js/300x200" alt="">
                                </a>
                            </li>
                            <li class="span7">
                                <a href="img/spark.png" class="thumbnail">
                                    <img src="img/spark.png" data-src="holder.js/300x200" alt="">
                                </a>
                            </li>
                        </ul>

                        <!--Main window text-->
                        <div align ='left'>
                            <p>The only thing I like as much as staying up all night working on a programming project is staying up all night
                            playing Magic: The Gathering with my friends.  Planechase, if you are not familar with MTG, is a special variant
                            of the game that employs a small deck of giant cards (the Planechase cards).  

                            <p>It is a very popular variant with my friends,
                            but we get tired of using the same planechase cards over and over.  One night, a friend asked me a question.
                            I don't remember the exact wording of the question, but it went something like this: "James, why can't you write a 
                            program that can act as a planechase deck and get information for all the planechase cards from the internet?"

                            <p>I could not think of an answer.  The data is out there.  I know how to code.  There really was no reason to not write the program...

                            <p>...and thus, the spark was born!

                            <p>The program uses PHP to scan the official MTG database of cards for planechase cards and keeps an index of hyperlinks to each planechase card's information
                            page.  It then randomly picks a card anytime the user clicks "planeswalk" and displays a picture of the card that acts as a link to the card's page.
                            Additionally the site features a simulated "planar die" for the players to roll (it's part of the game mode).

                            <p>I had to get my friend <a href='https://github.com/tlindsay'>Patrick</a> to help me out with a little of the styling (this was my first
                            real experience with CSS) but we managed to get it looking great.  And my friends, love it.
                        </div>

                        <br><br><br>
                        <?php include "footer.php"?>
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

