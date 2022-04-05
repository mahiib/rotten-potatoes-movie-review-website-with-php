
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
                <h1>Top Grossing</h1>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">1) Avengers: Endgame</h3>
                    <div class="col-md-4">
                        <img src="posters/endgame.webp" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Action, Adventure, Drama</h4>
                        <br/>
                        <h4>Director: Joe Russo, Anthony Russo</h4>                        
                        <br/>
                        <h4>Starring: Robert Downey Jr., Chris Evans, Chris Hemsworth, Scarlett johansson,
                            Jeremy Renner, Mark Ruffalo and (more)
                        </h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies,
                             the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe. </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">2) Avatar</h3>
                    <div class="col-md-4">
                        <img src="posters/avatar2.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Action, Adventure, Fantasy</h4>
                        <br/>
                        <h4>Director: James Cameron</h4>
                        <br/>                        
                        <h4>Starring: Sam Worthington, Zoe Saldana, Sigourney Weaver and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A paraplegic Marine dispatched to the moon Pandora on a unique mission becomes torn between following his orders and protecting the world he feels is his home.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">3) Titanic</h3>
                    <div class="col-md-4">
                        <img src="posters/titanic.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Drama, Romance</h4>
                        <br/>
                        <h4>Director: James Cameron</h4>
                        <br/>                
                        <h4>Starring: Leonardo DiCaprio, Kate Winslet, Billy Zane and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic. </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">4) Star Wars: The Force Awakens</h3>
                    <div class="col-md-4">
                        <img src="posters/starwars2.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Action, Adventure, Sci-Fi</h4>
                        <br/>                        
                        <h4>Director: J.J. Abrams</h4>
                        <br/>
                        <h4>Starring: Daisy Ridley, John Boyega, Oscar Isaac and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>As a new threat to the galaxy rises, Rey, a desert scavenger, and Finn, an ex-stormtrooper, must join Han Solo and Chewbacca to search for the one hope of restoring peace.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">5) Avengers: Inifinity War</h3>
                    <div class="col-md-4">
                        <img src="posters/infinty.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Action, Adventure, Sci-Fi</h4>
                        <br/>
                        <h4>Director: Anthony Russo, Joe Russo</h4>
                        <br/>                  
                        <h4>Starring:  Robert Downey Jr., Chris Evans, Chris Hemsworth, Scarlett johansson,
                             Mark Ruffalo, Chris Pratt and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful 
                            Thanos before his blitz of devastation and ruin puts an end to the universe. </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">6) Jurassic World</h3>
                    <div class="col-md-4">
                        <img src="posters/jurassic.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Action, Adventure, Sci-Fi</h4>
                        <br/>
                        <h4>Director: Colin Trevorrow</h4>
                        <br/>
                        <h4>Starring: Chris Pratt, Bryce Dallas Howard, Ty Simpkins and (more)</h4>                        
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>A new theme park, built on the original site of Jurassic Park, creates a genetically modified hybrid dinosaur, the Indominus Rex, which escapes containment and goes on a killing spree. </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">7) The Lion King</h3>
                    <div class="col-md-4">
                        <img src="posters/lionking.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Animation, Adventure, Drama</h4>
                        <br/>
                        <h4>Director: Roger Allers, Rob Minkoff</h4>                        
                        <br/>
                        <h4>Starring: Mathew Broderick, Jeremy Irons, James Earl Jones and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Lion prince Simba and his father are targeted by his bitter uncle, who wants to ascend the throne himself. </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">8) The Avengers</h3>
                    <div class="col-md-4">
                        <img src="posters/avengers.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Action, Adventure, Sci-Fi</h4>
                        <br/>
                        <h4>Director: Joss Wheldon</h4>
                        <br/>                        
                        <h4>Starring: Robert Downey Jr., Chris Evans, Chris Hemsworth, Scarlett johansson,
                            Jeremy Renner, Mark Ruffalo and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p> Earth's mightiest heroes must come together and learn to fight as a team if they are going to stop the mischievous Loki and his alien army from enslaving humanity.
                        </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">9) Fast & Furious 7</h3>
                    <div class="col-md-4">
                        <img src="posters/f7.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Action, Thriller</h4>
                        <br/>
                        <h4>Director: James Wan</h4>
                        <br/>                        
                        <h4>Starring: Paul Walker, Vin Diesel, Dwayne Johnson and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Deckard Shaw seeks revenge against Dominic Toretto and his family for his comatose brother. </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">10) Frozen 2</h3>
                    <div class="col-md-4">
                        <img src="posters/frozen22.webp" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Animation, Adventure, Comedy</h4>
                        <br/>
                        <h4>Director: Chris Buck, Jennifer Lee</h4>
                        <br/>                        
                        <h4>Starring: Kristen Bell, Idina Menzel, Josh Gad and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Anna, Elsa, Kristoff, Olaf and Sven leave Arendelle to travel to an ancient, autumn-bound forest of an enchanted land.
                             They set out to find the origin of Elsa's powers in order to save their kingdom. </p>
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