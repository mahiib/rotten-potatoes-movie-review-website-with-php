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
            <div class="text-center pt-3">
                <h1>All Recommended trailers</h1>
            </div>
            <div class="trailers-area my-3">
                <div class="owl-carousel">
                        <?php
                        $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/trailers/";
                        $i=1;
                        include($IPATH.$i.".html");
                        $j=2;
                        include($IPATH.$j.".html");
                        $k=3;
                        include($IPATH.$k.".html");
                        $l=4;
                        include($IPATH.$l.".html");
                        $m=5;
                        include($IPATH.$m.".html");
                        ?>       
                </div>    
            </div>

            <div class="trailers-area my-3">
                <div class="owl-carousel">
                        <?php
                        $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/trailers/";
                        $i=6;
                        include($IPATH.$i.".html");
                        $j=7;
                        include($IPATH.$j.".html");
                        $k=8;
                        include($IPATH.$k.".html");
                        $l=9;
                        include($IPATH.$l.".html");
                        $m=10;
                        include($IPATH.$m.".html");
                        ?>       
                </div>    
            </div>

            <div class="trailers-area my-3">
                <div class="owl-carousel">
                <?php
                        $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/trailers/";
                        $i=11;
                        include($IPATH.$i.".html");
                        $j=12;
                        include($IPATH.$j.".html");
                        $k=13;
                        include($IPATH.$k.".html");
                        $l=14;
                        include($IPATH.$l.".html");
                        $m=15;
                        include($IPATH.$m.".html");
                        ?>           
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
<html>