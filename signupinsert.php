<?php
require 'config.php';

$F_name=$_POST["firstName"];
$L_name=$_POST["lastName"];
$U_name=$_POST["username"];
$Email=$_POST["email"];
$Country=$_POST["country"];
$C_code=$_POST["countrycode"];
$Phone=$_POST["phone"];
$Password=$_POST["password"];
$Re_password=$_POST["confirmPassword"];

$sql="INSERT INTO register VALUES ('$F_name','$L_name','$U_name','$Email','$Country','$C_code','$Phone','$Password','$Re_password')";

if($con->query($sql))
{
    echo "<script>alert('Record Inserted Successfully!!'); window.location.href='login.php';</script>";
}
else{
    echo "Error".$con->error;
}

$con->close();


?>