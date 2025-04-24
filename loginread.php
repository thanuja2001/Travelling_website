<?php
require 'config.php';

$U_name = $_POST['U_name'];
$Password = $_POST['Password'];

if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    $stmt = $con->prepare("SELECT * FROM register WHERE U_name = ?");
    
    if (!$stmt) {
        die("Error in preparing SQL statement: " . $con->error);
    }
    
    $stmt->bind_param("s", $U_name);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        
        if ($data['Password'] === $Password) {
            session_start();
            $_SESSION["F_name"]=$data["F_name"];
            $_SESSION["L_name"]=$data["L_name"];
            $_SESSION["Phone"]=$data["Phone"];
            $_SESSION["C_code"]=$data["C_code"];
            $_SESSION["Email"]=$data["Email"];
            $_SESSION["Password"]=$data["Password"];
            $_SESSION["U_name"]=$data["U_name"];
            echo "<br><script>alert('Login Successfully!!'); window.location.href='index.html';</script>";
        } else {
            echo "<script>alert('Invalid Username or Password'); window.location.href='login.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid Username or Password')</script>";
    }
}

$con->close();
?>









