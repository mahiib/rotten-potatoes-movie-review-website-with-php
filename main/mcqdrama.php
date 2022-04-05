<?php
session_start();

include("connection.php");
include("functions.php");

if(isset($_SESSION['visitdrama']))
{
  header("Location: dramagenre.php");
}
$_SESSION['visitdrama']='yes';
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
    <h1 style="text-align: center;" "><i><font color="red"> Quick Knowledge Test</font></i></h1>
    <div style='transform: scale(0.65); position: relative; top: -100px;'>
                
                <h3>Which decade has most entries in this list?</h3>
                <p>Choose 1 answer</p>
                <hr />
              
                <div id='block-11' style='padding: 10px;'>
                  <label for='option-11' style=' padding: 5px; font-size: 2.5rem;'>
                    <input type='radio' name='option' value='opm' id='option-11' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                    2000-2009</label>
                  <span id='result-11'></span>
                </div>
                <hr />
              
                <div id='block-12' style='padding: 10px;'>
                  <label for='option-12' style=' padding: 5px; font-size: 2.5rem;'>
                    <input type='radio' name='option' value='6' id='option-12' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                    1990-1999</label>
                  <span id='result-12'></span>
                </div>
                <hr />
              
                <div id='block-13' style='padding: 10px;'>
                  <label for='option-13' style=' padding: 5px; font-size: 2.5rem;'>
                    <input type='radio' name='option' value='1/3' id='option-13' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                    2010-2019</label>
                  <span id='result-13'></span>
                </div>
                <hr />
              
                <div id='block-14' style='padding: 10px;'>
                  <label for='option-14' style=' padding: 5px; font-size: 2.5rem;'>
                    <input type='radio' name='option' value='1/6' id='option-14' style='transform: scale(1.6); margin-right: 10px; vertical-align: middle; margin-top: -2px;' />
                   1970-1979</label>
                  <span id='result-14'></span>
                </div>
                <hr />
                <button type='button' onclick='displayAnswer1()' style='width: 100px; height: 40px; border-radius: 3px; background-color: lightblue; font-weight: 700;'>Submit</button>
                <br/><br/>
                <a href="dramagenre.php">
                <button class="btn btn-primary" style="width: 125px; height: 50px;">Head to List</button>
                </a>
              </div>
              <a id='showanswer1'></a>
              <script>
                
                function displayAnswer1() {
                  if (document.getElementById('option-11').checked) {
                    document.getElementById('block-11').style.border = '3px solid red'
                    document.getElementById('result-11').style.color = 'red'
                    document.getElementById('result-11').innerHTML = 'Inorrect!'
                    move()
                  }
                  if (document.getElementById('option-12').checked) {
                    document.getElementById('block-12').style.border = '3px solid limegreen'
                    document.getElementById('result-12').style.color = 'limegreen'
                    document.getElementById('result-12').innerHTML = 'Correct!'
                    move()
                  }
                  if (document.getElementById('option-13').checked) {
                    document.getElementById('block-13').style.border = '3px solid limegreen'
                    document.getElementById('result-13').style.color = 'red'
                    document.getElementById('result-13').innerHTML = 'Incorrect!'
                    move()
                  }
                  if (document.getElementById('option-14').checked) {
                    document.getElementById('block-14').style.border = '3px solid red'
                    document.getElementById('result-14').style.color = 'red'
                    document.getElementById('result-14').innerHTML = 'Incorrect!'
                    move()
                    
                  }
                  
                }
                function move() {
                    let showAnswer1 = document.createElement('p')
                  showAnswer1.style.position = 'relative'
                  showAnswer1.style.top = '-180px'
                  showAnswer1.style.fontSize = '1.75rem'
                  document.getElementById('showanswer1').appendChild(showAnswer1)
                  showAnswer1.addEventListener('click', () => {
                  
                  })
                }
                </script>
                </div>
    </main>
    <?php 
    $IPATH=$_SERVER["DOCUMENT_ROOT"]."/project/rotten-potatoes-main/assets/";
    include($IPATH."footer.html");
    ?>
</body>

</html>