<?php 

$lastname = htmlspecialchars($_POST['lastname']);
$firstname =htmlspecialchars($_POST['firstname']);
$email =htmlspecialchars($_POST['email']);
$password =htmlspecialchars($_POST['password']);


if(empty($lastname)||empty($firstname)||empty($email)||empty($password)){
    header("location:register.php");
    exit;
}