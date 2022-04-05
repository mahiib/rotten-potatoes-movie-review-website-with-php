<?php
session_start();

include("connection.php");
include("functions.php");

$user_data=check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotten Potatoes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/b486dd5239.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."header.php");
    ?>
    <main>
        <div class="container critics">
            <div class="text-center pt-3">
                <h1>Top Sci-Fi</h1>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">1) Inception</h3>
                    <div class="col-md-4">
                        <img src="posters/inception.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Year of Release: 2010</h4>
                        <br/>
                        <h4>Director: Christopher Nolan</h4>
                        <br/>                        
                        <h4>Starring: Leonardo DiCaprio, Joseph Gordon-Levitt, Elliot Page and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">2) The Matrix</h3>
                    <div class="col-md-4">
                        <img src="posters/matrix.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 1999</h4>
                        <br/>
                        <h4>Director: Lana Wachowski, Lilly Wachowski</h4>
                        <br/>                        
                        <h4>Starring: Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>When a beautiful stranger leads computer hacker Neo to a forbidding underworld,
                             he discovers the shocking truth--the life he knows is the elaborate deception of an evil cyber-intelligence.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">3) Star Wars Episode V- The Empire Strikes Back</h3>
                    <div class="col-md-4">
                        <img src="posters/star5.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 1980</h4>
                        <br/>
                        <h4>Director: Irvin Kershner</h4>
                        <br/>                
                        <h4>Starring: Mark Hamil, Harrison Ford, Carrie Fisher, Billy Dee Williams and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>After the Rebels are brutally overpowered by the Empire on the ice planet Hoth, Luke Skywalker begins Jedi training with Yoda, while his friends are pursued
                            by Darth Vader and a bounty hunter named Boba Fett all over the galaxy.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">4) Interstellar</h3>
                    <div class="col-md-4">
                        <img src="posters/interstellar.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 2014</h4>
                        <br/>                        
                        <h4>Director: Christopher Nolan</h4>
                        <br/>
                        <h4>Starring: Matthew McConaughey, Anne Hathaway, Jessica Chastain and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A team of explorers travel through a wormhole in space in an attempt to ensure humanity's survival.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">5) Star Wars Episode IV - A New Hope</h3>
                    <div class="col-md-4">
                        <img src="posters/infinty.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Year of Release: 1977</h4>
                        <br/>
                        <h4>Director: George Lucas</h4>
                        <br/>                  
                        <h4>Starring: Mark Hamil, Harrison Ford, Carrie Fisher, Alec Guinness and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire's world-destroying
                             battle station, while also attempting to rescue Princess Leia from the mysterious Darth Vader.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">6) The Prestige</h3>
                    <div class="col-md-4">
                        <img src="posters/634831-b.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 2006</h4>
                        <br/>
                        <h4>Director: Christopher Nolan</h4>
                        <br/>
                        <h4>Starring: Christian Bale, Hugh Jackman, Scarlett Johansson. Michael Caine and (more)</h4>                        
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>After a tragic accident, two stage magicians engage in a battle to create the ultimate
                             illusion while sacrificing everything they have to outwit each other.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">7) Terminator 2: The Judgement Day</h3>
                    <div class="col-md-4">
                        <img src="posters/terminator2.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 1991</h4>
                        <br/>
                        <h4>Director: James Cameron</h4>                        
                        <br/>
                        <h4>Starring: Arnold Schwarzeneggar, Linda Hamilton, Edward Furlong and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A cyborg, identical to the one who failed to kill Sarah Connor, must now protect her teenage son, John Connor, from a more advanced and powerful cyborg.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">8) Back to the Future</h3>
                    <div class="col-md-4">
                        <img src="posters/btofuture.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 1985</h4>
                        <br/>
                        <h4>Director: Robert Zemeckis</h4>
                        <br/>                        
                        <h4>Starring: Michael J. Fox, Christopher Lloyd, Lea Thompson and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Marty McFly, a 17-year-old high school student, is accidentally sent thirty years into the past in a time-traveling DeLorean invented by his close friend, the eccentric scientist Doc Brown.
                        </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">9) Alien</h3>
                    <div class="col-md-4">
                        <img src="posters/alien.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 1979</h4>
                        <br/>
                        <h4>Director: Ridley Scott</h4>
                        <br/>                        
                        <h4>Starring: Sigourney Weaver, Tom Skerritt, Jon Hurt and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Marty McFly, a 17-year-old high school student, is accidentally sent thirty years into the past in a
                             time-traveling DeLorean invented by his close friend, the eccentric scientist Doc Brown.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">10) Arrival</h3>
                    <div class="col-md-4">
                        <img src="posters/arrival.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 2016</h4>
                        <br/>
                        <h4>Director: Denis Villeneuve</h4>
                        <br/>                        
                        <h4>Starring: Amy Adams, Jeremy Renner, Forest Whitaker and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Louise Banks, a linguistics expert, along with her team, must interpret the language of aliens who've come to earth in a mysterious spaceship.</p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </main>
    <?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."footer.html");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>