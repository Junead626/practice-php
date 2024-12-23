<?php

$servername="localhost";
$username="root";
$password="";
$dbname="student";



$connection = new mysqli($servername,$username,$password,$dbname);

if($connection -> connect_error)
{
    echo " Failed to connnect";
}
else{
    echo "connected";
}
?>