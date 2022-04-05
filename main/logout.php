<?php
session_start();
if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);
    unset($_SESSION['visitcomedy']);
    unset($_SESSION['visitscifi']);
    unset($_SESSION['visitdrama']);
    $_SESSION['visitscifi'];
}

header("Location: signin.php");
die;
?>