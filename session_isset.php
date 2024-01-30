<?php

$a = 10;

echo isset($a); 
echo"<br>";
//isset
//if variable is set return 1 otherwise nothing;
if(isset($b))
{
    echo "B is Set";
}
else
{
    echo "B is Not Set";
}
echo"<br>";
//unset
$z = "sohil";
echo $z;
unset($z);
echo $z;
?>