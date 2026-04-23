<?php 

$lastname = ($_POST['lastname']);
$firstname =($_POST['firstname']);
$email =($_POST['email']);
$password =($_POST['password']);


if(empty($lastname)||empty($firstname)||empty($email)||empty($password)){
    header("location:register.php?error=empty");
    exit;
}

if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("location:register.php?error=empty");
    exit ;
}

$lastname= htmlspecialchars($lastname);
$firstname =htmlspecialchars($firstname);
$password = htmlspecialchars($password);
$email =htmlspecialchars($email);



echo "Données valides ✔️";


$email=($_POST['email']);
$password =($_POST['password']);


if(empty($email)||empty($password)){
    header("location:login.php");
    exit;
}

if($email=== "anassjabrane12@gmail.com" && $password === "123456789"){
   
header("location:dashbord.php");
exit ;
}

else{
    header("location :login.php?error=1");
    exit ;
}





