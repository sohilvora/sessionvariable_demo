<?php
session_start();

//Session Variable
$_SESSION['admin'] = "sohil";
$_SESSION['user'] = "vora";

//print session Value
echo $_SESSION['admin'];
echo "<br>";
print_r($_SESSION);