<?php
session_start();

if(!isset($_SESSION['user']))
{
    header('location:login.php');
}

echo "Hi, ".$_SESSION['user'];

echo "<br><a href='logout.php'>Logout</a>";