<?php
session_start();
if(isset($_SESSION['admin']))
{
    unset($_SESSION['admin']);//delete Variable
    session_destroy();//delete all variable
    echo"session Deleted";
}
else
{
    //create
    $_SESSION['admin'] = "sohil";
    echo"session value is ".$_SESSION['admin'];
}