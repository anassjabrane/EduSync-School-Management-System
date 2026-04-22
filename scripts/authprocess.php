<?php 

$lastname = ($_POST['lastname']);
$firstname =($_POST['firstname']);
$email =($_POST['email']);
$password =($_POST['password']);


if(empty($lastname)||empty($firstname)||empty($email)||empty($password)){
    header("location:register.php");
    exit;
}

if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("location:register.php");
    exit ;
}

$lastname= htmlspecialchars($lastname);
$firstname =htmlspecialchars($firstname);
$password = htmlspecialchars($password);
$email =htmlspecialchars($email);





