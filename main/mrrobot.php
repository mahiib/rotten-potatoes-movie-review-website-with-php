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
        <div class="banner">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="text-align: center;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./posters/mrrobot.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="row">
                                <div class="col">
                                    <img src="./posters/mrrobotv.jpg" alt="" class="poster">
                                </div>
                                <div class="co">
                                    <h1>MR. ROBOT</h1>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>        

            <div class="container-description" style="margin: 30px;">
                <h4><i>Genre:</i>&nbsp; Drama, Thriller, Crime</h4>
                <br/>
                <h4><i>Creator:</i>&nbsp; Sam Esmail</h4>                        
                <br/>
                <h4><i>Starring:</i>&nbsp; Rami Malek, Christian Slater, Carly Chaikin and (more)</h4>
                <br/>
                <h4><i>Year:</i>&nbsp; 2015-2019</h4>
                <br/>
                <h4><i>OTT:</i>&nbsp; Prime Video</h4>
                <br/>
                <h4>
                <i>Rating:</i>&nbsp;
                <?php
                    $dbhost="localhost";
                    $dbuser="root";
                    $dbpass="";
                    $dbname="rating_db";
                    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
                    if(!$conn)
                    {
                        die("failed to connect to database");
                    }
                    $query="select * from ratings where name='mrrobot'";
                    $result=mysqli_query($conn,$query);
                    $row=mysqli_fetch_array($result);
                    $rating=$row['rating'];
                    $newrating=$rating;
                    if($_SERVER['REQUEST_METHOD']=="POST")
                    {
                        $userating=$_POST['userrating'];
                        $userscount=$row['usercount'];
                        $newrating=(($rating*$userscount)+$userating)/($userscount+1);
                        $userscount++;
                        $newquery="update ratings set rating='$newrating' where name='mrrobot'";
                        $newquery2="update ratings set usercount='$userscount' where name='mrrobot'"; 
                        mysqli_query($conn,$newquery);       
                        mysqli_query($conn,$newquery2);                 
                    }
                    if($newrating<0.5)
                    {
                        echo '<i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
                         echo '<i class="far fa-star"></i>'; 
                    }
                    elseif($newrating<1.5)
                        echo '<i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
                    elseif($newrating<2.5)
                        echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
                    elseif($newrating<3.5)
                        echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>';
                    elseif($newrating<4.5)
                        echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i>';
                    else
                        echo '<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>';
                    echo "&nbsp".round($newrating,2);
                    if(!($_SERVER['REQUEST_METHOD']=="POST"))
                    {
                        echo ' <div class="d-flex">
                        <h4>
                    <i>Provide your rating: &nbsp;&nbsp;</i>
                    </h4>
                    <form method="post">
                    <input type="text" class="form-control" placeholder="_/5" name="userrating" style="width: 120px; height: 20px; "></input>&nbsp;&nbsp;</h4>
                    <input type="submit" value="Submit" style="width: 70px; height: 25px; border-radius: 3px; background-color: lightblue; font-weight: 7; margin-left: 255px;"></input>
                    
                    </form>
                    </div>';
                    }               
                ?>                
            </div>
           
            <div class="synopsys" style="margin: 30px; width: 1000px">
            
            <h4><i>Synopsys: </i></h4>
            
            <h6><p>&nbsp;&nbsp;&nbsp;Elliot, a cyber-security engineer suffering from anxiety, works for a corporation and hacks felons by night.
                 Panic strikes him after Mr Robot, a cryptic anarchist, recruits him to ruin his company.</p></h6>
                </div>
        </div>
    </main>
    <?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."footer.html");
    ?>

</body>
</html>