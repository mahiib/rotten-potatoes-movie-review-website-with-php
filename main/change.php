<?php
session_start();
include("connection.php");
include("functions.php");
$user_data=check_login($con);
$username=$user_data['username'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $newpassword=$_POST['password'];
    $confirmpassword=$_POST['confirmpasword'];
    if($newpassword===$confirmpassword)
    {
        $query="update users set password='$newpassword' where username='$username'";
        mysqli_query($con,$query);
        echo"<script type='text/javascript'>
        alert('Password Updated successfuly. Click OK to continue');
        window.location.replace('index.php');
        </script>
        ";
    }
    else
        echo "password doesn't match!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <script src="https://kit.fontawesome.com/b486dd5239.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-color: rgb(78, 77, 77);">

    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card sign-in-card text-center">
                <div class="card-body">
                    <h5 class="card-title">Update Password</h5>
                    <form method="post">
                        <div class="form-group py-3 px-4">
                          <input id="password" type="password" class="form-control" placeholder="New Password" name="password">
                        </div>
                        <div class="form-group py-3 px-4">
                          <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpasword">                          
                        </div>
                       
                        <button type="submit" class="btn btn-primary my-4" value="signup">Submit</button>
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