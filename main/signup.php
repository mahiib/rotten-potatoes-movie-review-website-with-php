<?php
session_start();

  include("connection.php");
  include("functions.php");
  if($_SERVER['REQUEST_METHOD']=="POST")
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $name=$_POST['name'];

    if(!empty($username) && !empty($password) && !empty($name))
    {
      $user_id=random_num(15);
      $query="insert into users (user_id,username,password,name) values ('$user_id','$username','$password','$name')";
      mysqli_query($con,$query);
      header("Location: signin.php");
      die;
    }
    else{
      echo"PLEASE FILL ALL THE FIELDS";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/b486dd5239.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-image: url('signin.jpeg');background-repeat:no-repeat;
background-size:cover;"> 

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card sign-in-card text-center">
                <div class="card-body">
                    <h5 class="caard-title">Register</h5>
                    <form method="post">
                        <div class="form-group py-3 px-4">
                          <input id="text" type="text" class="form-control" placeholder="Name" name="name">                          
                        </div>
                        <div class="form-group py-3 px-4">
                          <input id="text" type="text" class="form-control" placeholder="Username" name="username">
                          <i class="fa fa-user fa-lg"></i>
                        </div>
                        <div class="form-group py-3 px-4">
                          <input type="password" class="form-control" placeholder="Password" name="password">
                          <i class="fa fa-lock fa-lg"></i>
                        </div>
                        <small class="form-text text-muted py-3">Already have an Account? <a href="./signin.php">Click here</a></small>
                        <button type="submit" class="btn btn-primary my-4" value="signup">Register</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>