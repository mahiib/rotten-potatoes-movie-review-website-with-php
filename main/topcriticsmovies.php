

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
                <h1>Top Critically Acclaimed</h1>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">1) Shawshank Redemption</h3>
                    <div class="col-md-4">
                        <img src="posters/shawshank2.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Drama</h4>
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
                    <h3 class="mb-4">2) The Godfather</h3>
                    <div class="col-md-4">
                        <img src="posters/godfather.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Crime, Drama</h4>
                        <br/>
                        <h4>Director: Francis Ford Coppola</h4>
                        <br/>                        
                        <h4>Starring: Marlon Brando, Al Pacino, James Caan and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>An organized crime dynasty's aging patriarch transfers control of his clandestine empire to his reluctant son.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">3) The Dark Knight</h3>
                    <div class="col-md-4">
                        <img src="posters/darkknight.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Action, Crime, Thriller</h4>
                        <br/>
                        <h4>Director: Christopher Nolan</h4>
                        <br/>                
                        <h4>Starring: Christian Bale, Heath Ledger, Aaron Eckhart and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>When the menace known as the Joker wreaks havoc and chaos on the people of Gotham,
                             Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">4) The Godfather Part 2</h3>
                    <div class="col-md-4">
                        <img src="posters/godfather2.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Crime, Drama</h4>
                        <br/>                        
                        <h4>Director: Francis Ford Coppola</h4>
                        <br/>
                        <h4>Starring: Al Pacino, Robert De Niro, Robert Duvall and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>The early life and career of Vito Corleone in 1920s New York City is portrayed, while his son, Michael, expands and tightens his grip on the family crime syndicate.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">5) The Lord of the Rings: The Return of the King</h3>
                    <div class="col-md-4">
                        <img src="posters/lotr.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Fantasy, Adventure, Action, Drama</h4>
                        <br/>
                        <h4>Director: Peter Jackson</h4>
                        <br/>                  
                        <h4>Starring: Elijah Wood, Viggo Mortensen, Ian McKellen and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Gandalf and Aragorn lead the World of Men against Sauron's army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">6) Pulp Fiction</h3>
                    <div class="col-md-4">
                        <img src="posters/pupl.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Crime, Drama</h4>
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
                    <h3 class="mb-4">7) Schindler's List</h3>
                    <div class="col-md-4">
                        <img src="posters/slist3.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Biography, Drama, History</h4>
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
                    <h3 class="mb-4">8) Inception</h3>
                    <div class="col-md-4">
                        <img src="posters/inception.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <h4>Genre: Sci-Fi, Action, Thriller</h4>
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
                    <h3 class="mb-4">9) Fight Club</h3>
                    <div class="col-md-4">
                        <img src="posters/fight club.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/>
                        <h4>Genre: Drama, Thriller</h4>
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
                    <h3 class="mb-4">10) Forrest Gump</h3>
                    <div class="col-md-4">
                        <img src="posters/forrest.png" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Drama</h4>
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
            
            
        </div>
    </main>
    <?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."footer.html");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

</html>