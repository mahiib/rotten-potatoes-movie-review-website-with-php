<?php
function check_login($con)
{
    if(isset($_SESSION['user_id']))
    {
        $id=$_SESSION['user_id'];
        $query="select * from users where user_id= '$id' limit 1";
        $result=mysqli_query($con,$query);
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data=mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: signin.php");
    die;
}

function random_num($len)
{
    $text="";
    if($len<5)
    {
        $len=5;
    }
    $len=rand(4,$len);
    for($i=0;$i<$len;$i++){
        $text .=rand(0,9);
    }
    return $text;
}