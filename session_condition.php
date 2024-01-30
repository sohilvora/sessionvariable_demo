<?php
session_start();
if(!isset($_SESSION['admin']))
{
    header('location:login.php');
}
else
{
    echo "session is not set";
}

?>