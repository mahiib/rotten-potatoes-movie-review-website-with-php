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
                <h1>Top Drama</h1>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">1) Shawshank Redemption</h3>
                    <div class="col-md-4">
                        <img src="posters/shawshank2.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Year of Release: 1994</h4>
                        <br/>
                        <h4>Director: William Sadler</h4>                        
                        <br/>
                        <h4>Starring: Tim Robbins, Morgan Freeman, Bob Gunton and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">2) 12 Angry Men</h3>
                    <div class="col-md-4">
                        <img src="posters/12angry.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br><br/>
                        <h4>Year of Release: 1957</h4>
                        <br/>
                        <h4>Director: Sidney Lumet</h4>
                        <br/>                        
                        <h4>Starring: Henry Fonda, Lee J. Cobb, Jack Klugman and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A dissenting juror in a murder trial slowly manages to convince the others that the case is not as obviously clear as it seemed in court.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">3) Pulp Fiction</h3>
                    <div class="col-md-4">
                        <img src="posters/pupl.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Year of Release: 1994</h4>
                        <br/>
                        <h4>Director: Quentin Tarantino</h4>
                        <br/>
                        <h4>Starring: John Travolta, Uma Thrman, Samuel L. Jackson and (more)</h4>                        
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">4) Schindler's List</h3>
                    <div class="col-md-4">
                        <img src="posters/slist3.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                    <br/><br/><br/>
                        <h4>Year of Release: 1993</h4>
                        <br/>
                        <h4>Director: Steven Speilberg</h4>                        
                        <br/>
                        <h4>Starring: Liam Neeson, Ralph Fiennes, Ben Kingsley and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">5) Forrest Gump</h3>
                    <div class="col-md-4">
                        <img src="posters/forrest.png" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 1994</h4>
                        <br/>
                        <h4>Director: Robert Zemeckis</h4>
                        <br/>                        
                        <h4>Starring: Tom Hanks, Robin Wright, Gary Sinise and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>The presidencies of Kennedy and Johnson, the events of Vietnam, Watergate and other historical events unfold through the perspective of an Alabama man with an IQ of 75,
                        whose only desire is to be reunited with his childhood sweetheart.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">6) Fight Club</h3>
                    <div class="col-md-4">
                        <img src="posters/fight club.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/>
                        <h4>Year of Release: 1998</h4>
                        <br/>
                        <h4>Director: David Fincher</h4>
                        <br/>                        
                        <h4>Starring: Brad Pitt, Edward Norton, Meat Loaf and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">7) The Green Mile</h3>
                    <div class="col-md-4">
                        <img src="posters/greeenmile.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 1999</h4>
                        <br/>
                        <h4>Director: Frank Darabont</h4>
                        <br/>                        
                        <h4>Starring: Tom Hanks, Michael Clarke Duncan, Sam Rockwell and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Paul Edgecomb, the head guard of a prison, meets an inmate, John Coffey, a black man who is accused of murdering two girls. His life changes drastically when he discovers that John has a special gift.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">8) Saving Private Ryan</h3>
                    <div class="col-md-4">
                        <img src="posters/saving.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release: 1998</h4>
                        <br/>
                        <h4>Director: Steven Speilberg</h4>
                        <br/>
                        <h4>Starring: TOm Hanks, Matt Damon, Edward Burns and (more)</h4>                        
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>During the Normandy invasion of World War II, Captain John Miller is
                             assigned the task of searching for Private James Ryan, whose three brothers have already been killed in the war.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">9) The Prestige</h3>
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
                    <h3 class="mb-4">10) Gladiator</h3>
                    <div class="col-md-4">
                        <img src="./posters/gladiator.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Year of Release : 2000</h4>
                        <br/>
                        <h4>Director: Ridley Scott</h4>
                        <br/>
                        <h4>Actors : Russell Crowe, Joaquin Phoenix, Connie Nielson</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.</p>                  
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."footer.html");
    ?>

</html>