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
                <h1>Top Comedy</h1>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">1) Monthy Python and the Holy Grail</h3>
                    <div class="col-md-4">
                        <img src="./posters/holy_grail_poster.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/><br/>
                        <h4>Year of Release : 1975</h4>
                        <br/>
                        <h4>Director: Terry Gilliam, Terry Jones</h4>
                        <br/>
                        <h4>Actors : Graham Chapman, John Cleese and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>King Arthur and his Knights of the Round Table embark on a surreal, low-budget search for the Holy Grail, encountering many, very silly obstacles.</p>                  
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">2) The Big Lebowski</h3>
                    <div class="col-md-4">
                        <img src="./posters/lebowski.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release : 1998</h4>
                        <br/>
                        <h4>Director: Ethan Coen, Joel Coel</h4>
                        <br/>
                        <h4>Actors : Jeff Bridges, John Goodman and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Jeff "The Dude" Lebowski, mistaken for a millionaire of the same name, seeks restitution for his ruined rug and enlists his bowling buddies to help get it.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">3) Groundhog Day</h3>
                    <div class="col-md-4">
                        <img src="./posters/groundhog.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release : 1993</h4>
                        <br/>
                        <h4>Director: Harnold Ramis</h4>
                        <br/>
                        <h4>Actors : Bill Murray, Andie MacDowell and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A weatherman finds himself inexplicably living the same day over and over again.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">4) Shaun of the Dead</h3>
                    <div class="col-md-4">
                        <img src="./posters/shaun.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release : 2004</h4>
                        <br/>
                        <h4>Director: Edgar Wright</h4>
                        <br/>
                        <h4>Actors : Simon Pegg, Nick Frost and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A man's uneventful life is disrupted by the zombie apocalypse.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">5) Ferris Bueller's Day Off</h3>
                    <div class="col-md-4">
                        <img src="./posters/dayoff.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release : 1986</h4>
                        <br/>
                        <h4>Director: John Hughes</h4>
                        <br/>
                        <h4>Actors : Matthew Broderick, Alan Ruck and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A high school wise guy is determined to have a day off from school, despite what the Principal thinks of that.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">6) Hot Fuzz</h3>
                    <div class="col-md-4">
                        <img src="./posters/fuzz.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release : 2007</h4>
                        <br/>
                        <h4>Director: Edgar Wright</h4>
                        <br/>
                        <h4>Actors : Simon Pegg, Nick Frost and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A skilled London police officer is transferred to a small town with a dark secret.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">7) The Hangover</h3>
                    <div class="col-md-4">
                        <img src="./posters/hangover.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release : 2009</h4>
                        <br/>
                        <h4>Director: Todd Philips</h4>
                        <br/>
                        <h4>Actors : Zach Galifianakis, Bradley Cooper and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Three buddies wake up from a bachelor party in Las Vegas, with no memory of the previous night and the bachelor missing. They make their way around the city in order to find their friend before his wedding.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">8) Superbad</h3>
                    <div class="col-md-4">
                        <img src="./posters/Superbad_Poster.png" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release : 2007</h4>
                        <br/>
                        <h4>Director: Greg Mottola</h4>
                        <br/>
                        <h4>Actors : Michael Cera, Jonah Hill and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Two co-dependent high school seniors are forced to deal with separation anxiety after their plan to stage a booze-soaked party goes awry.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">9) Home Alone</h3>
                    <div class="col-md-4">
                        <img src="./posters/homalone.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release : 1990</h4>
                        <br/>
                        <h4>Director: Peter Hewitt, Rod Daniel, Raja Gosnell, Chris Columbus</h4>
                        <br/>
                        <h4>Actors : Macaulay Culkin, Joe Pesci and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>An eight-year-old troublemaker must protect his house from a pair of burglars when he is accidentally left home alone by his family during Christmas vacation.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">10) Meet The Parents</h3>
                    <div class="col-md-4">
                        <img src="./posters/parent.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release : 2000</h4>
                        <br/>
                        <h4>Director: Jay Roach</h4>
                        <br/>
                        <h4>Actors : Ben Stiller, Robert De Niro and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Male nurse Greg Focker meets his girlfriend's parents before proposing, but her suspicious father is every date's worst nightmare.</p>
                    </div>
                </div>
            </div>
            <hr/>            
        </div>
    </main>
    <?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."footer.html");
    ?>
</body>

</html>