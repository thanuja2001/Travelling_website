<?php
$con=new mysqli("localhost","root","","travel");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);
}

?>