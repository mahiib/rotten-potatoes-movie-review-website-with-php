

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
                <h1>Top Rated Series</h1>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">1) Breaking Bad</h3>
                    <div class="col-md-4">
                        <img src="posters/breakingbad.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/>
                        <h4>Genre: Crime, Drama</h4>
                        <br/>
                        <h4>Year: 2008-2013</h4>                        
                        <br/>
                        <h4>Creator: Vince Gilligan</h4> 
                        <br/>
                        <h4>Starring: Bryan Cranston, Aaron Paul, Anna Gunn, Dean Norris and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Walter White, a chemistry teacher, discovers that he has cancer and decides to get into the meth-making
                             business to repay his medical debts. His priorities begin to change when he partners with Jesse.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">2) Game of Thrones</h3>
                    <div class="col-md-4">
                        <img src="posters/got.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/>
                        <h4>Genre: Drama, Adventure, Action, Fantasy</h4>
                        <br/>
                        <h4>Year: 2008-2013</h4>
                        <br/>
                        <h4>Creators: David Benioff, D. B. Weiss</h4> 
                        <br/>                        
                        <h4>Starring: Emilia Clarke, Kit Harrington, Peter Dinklage, Maise Williams, Sophie Turner, Lena Headey and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>Nine noble families wage war against each other in order to gain control over the mythical land of Westeros. Meanwhile, a force is rising after millenniums and threatens the existence of living men.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">3) The Wire</h3>
                    <div class="col-md-4">
                        <img src="posters/wire.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/>
                        <h4>Genre: Crime</h4>
                        <br/>
                        <h4>Director: David Simon</h4>
                        <br/>                
                        <h4>Starring: Dominic West, Lance Reddick, Sonja Sohn and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>The Baltimore drug scene, as seen through the eyes of drug dealers and law enforcement. </p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">4) Rick and Morty</h3>
                    <div class="col-md-4">
                        <img src="posters/rick.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
                        <br/><br/><br/>
                        <h4>Genre: Crime, Drama</h4>
                        <br/>                        
                        <h4>Director: Francis Ford Coppola</h4>
                        <br/>
                        <h4>Starring: Al Pacino, Robert De Niro, Robert Duvall and (more)</h4>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <p>After having been missing for nearly 20 years, Rick Sanchez suddenly arrives at daughter Beth's doorstep to move in with her and her family. Although Beth welcomes Rick into her home, her husband, Jerry, isn't as happy about the family reunion. Jerry is concerned about Rick, a sociopathic scientist, using the garage as his personal laboratory. In the lab, Rick works on a number of sci-fi gadgets, some of which could be considered dangerous. But that's not all Rick does that concerns Jerry. He also goes on adventures across the universe that often involve his grandchildren, Morty and Summer.</p>
                    </div>
                </div>
            </div>
            <hr/>
            <div class="box">
                <div class="row py-5 px-5">
                    <h3 class="mb-4">5) Avatar: The Last Airbender</h3>
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
                    <h3 class="mb-4">6) The Sopranos</h3>
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
                    <h3 class="mb-4">7) Sherlock</h3>
                    <div class="col-md-4">
                        <img src="posters/slist2.jpg" alt="" class="card-img critics-img">
                    </div>
                    <div class="col-md-8">
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
                    <h3 class="mb-4">8) True Detective</h3>
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
                    <h3 class="mb-4">9) Firefly</h3>
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
                    <h3 class="mb-4">10) Fargo</h3>
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

</html>