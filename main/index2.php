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
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/Cine critic/";
    include($IPATH."header.php");
    ?>
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <div class="trending">
                        <h2>Top Trending...</h2>
                        <a href = "iframe.html">Click Me!</a>
                    </div>
                    <div class="banner">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
                                <li data-bs-target="#carouselExampleDark" data-bs-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="posters/godzilla_vs_kong.png" class="d-block w-100" style="padding: 20px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row">
                                            <div class="col">
                                                <img src="posters/godzilla_vs_kongv.jpg" width="186px" height="271px" >
                                            </div>

                                            <div class="col details">
                                                <h5>Godzilla vs Kong</h5>
                                                <p>Kong and his protectors undertake a perilous journey to find his true home. Along for the ride is Jia, an orphaned girl who has a unique and powerful bond with the mighty beast. However, they soon find themselves in the path of an enraged Godzilla as he cuts a swath of destruction across the globe.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="posters/Justiceleague.png" class="d-block w-100"  style="padding: 20px;"alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row">
                                            <div class="col">
                                                <img src="posters/Justiceleaguev.png"  width="186px" height="271px" alt="" class="poster">
                                            </div>
                                            
                                            <div class="col details">
                                                <h5>Justice League Snyder's Cut</h5>
                                                <p>
                                                Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne enlists newfound ally Diana Prince to face an even greater threat. Together, Batman and Wonder Woman work quickly to recruit a team to stand against this newly awakened enemy.                                            
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="posters/tenet.jpg" class="d-block w-100" style="padding: 20px;" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="row">
                                            <div class="col">
                                                <img src="posters/tenetv.jpg" width="186px" height="271px" alt="" class="poster">
                                            </div>

                                            <div class="col details">
                                                <h5>Tenet</h5>
                                                <p>A secret agent is given a single word as his weapon and sent to prevent the onset of World War III. He must travel through time and bend the laws of nature in order to be successful in his mission.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <h2 class="text-right mt-3">Trending Stories</h2>
                    <?php                    
                    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/stories/";
                    $i=mt_rand(1,19);
                    include($IPATH.$i.".html");
                    echo'<hr class="divider"/>';
                    $j=mt_rand(1,19);
                    while($i==$j)
                        $j=mt_rand(1,19);
                    include($IPATH.$j.".html");
                    echo'<hr class="divider"/>';
                    $k=mt_rand(1,19);
                    while($k==$j || $k==$i)
                        $k=mt_rand(1,19);
                    include($IPATH.$k.".html");
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <a href="mcqscifi.php" >
                    <div class="card Genres-card my-3">
                        <img src="./posters/genre/scifi.jpg" alt="" class="card-img Genres-img">
                        
                        <div class="card-img-overlay" style="background-color: rgba(0, 0, 139, 0.404);">
                           <h5 class="card-title overlay-title">Sci-Fi</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card Genres-card my-3">
                        <img src="./posters/genre/action.jpg" alt="" class="card-img Genres-img">
                        <div class="card-img-overlay" style="background-color: rgba(139, 0, 0, 0.404);">
                           <h5 class="card-title overlay-title">Action</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <a href="mcqcomedy.php">
                    <div class="card Genres-card my-3">
                        <img src="./posters/genre/comedy.jpg" alt="" class="card-img Genres-img">
                        <div class="card-img-overlay" style="background-color: rgba(139, 137, 0, 0.404);">
                           <h5 class="card-title overlay-title">Comedy</h5>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                     <a href="mcqdrama.php">
                    <div class="card Genres-card my-3">
                        <img src="./posters/genre/drama.jpg" alt="" class="card-img Genres-img">
                        <div class="card-img-overlay" style="background-color: rgba(10, 104, 23, 0.404);">
                           <h5 class="card-title overlay-title">Drama</h5>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="movies-area my-3">
                <div class="section-heading d-flex justify-content-md-between">
                    <h5 class="heading">
                        Random picks
                    </h5>
                    <h6>more <i class="fa fa-chevron-right"></i> </h6>
                </div>
                <div class="owl-carousel">
                    <a href="tenet.php" style="text-decoration: none;">
                        <div class="card">
                            <img src="./posters/tenet.jpg" alt="" class="card-img">
                            <div class="card-body">
                                <h5 class="card-title">Tenet</h5>
                            </div>
                        </div>
                    </a>
                    <a href="silicon.php" style="text-decoration: none;">
                    <div class="card">
                        <img src="./posters/silicon.jpg" alt="" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title">Silcon Valley</h5>
                        </div>
                    </div>
                    </a>
                    <a href="mrrobot.php" style="text-decoration: none;">
                    <div class="card">
                        <img src="./posters/mrrobot.jpg" alt="" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title">Mr. Robot</h5>
                        </div>
                    </div>
                    </a>
                    <a href="stein.php" style="text-decoration: none;">
                    <div class="card">
                        <img src="./posters/steins.png" alt="" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title">Steins;Gate</h5>
                        </div>
                    </div>
                    </a>
                    <a href="troy.php" style="text-decoration: none;">
                    <div class="card">
                        <img src="./posters/troyy.jpg" alt="" class="card-img">
                        <div class="card-body">
                            <h5 class="card-title">Troy</h5>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="trailers-area my-3">
                <div class="section-heading d-flex justify-content-md-between">
                    <h5 class="heading">
                        Recommended Trailers
                    </h5>
                    <h6><a href="alltrailers.php" style="text-decoration: none;"><font color="white">more </font></a><i class="fa fa-chevron-right"></i> </h6>
                </div>
                <div class="owl-carousel">
                    <?php
                    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/trailers/";
                    $i=mt_rand(1,15);
                    include($IPATH.$i.".html");
                    $j=mt_rand(1,15);
                    while($j==$i)
                        $j=mt_rand(1,15);
                    include($IPATH.$j.".html");
                    $k=mt_rand(1,15);
                    while($k==$i || $k==$j)
                        $k=mt_rand(1,15);
                    include($IPATH.$k.".html");
                    $l=mt_rand(1,15);
                    while($l==$i || $l==$j || $l==$k)
                        $l=mt_rand(1,15);
                    include($IPATH.$l.".html");
                    $m=mt_rand(1,15);
                    while($m==$i || $m==$j || $m==$k || $m==$l)
                        $m=mt_rand(1,15);
                    include($IPATH.$m.".html");
                    ?>       
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

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>
</html>