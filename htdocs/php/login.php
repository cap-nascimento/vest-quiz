<?php
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 /*simulating authentication*/
 $email_admin = 'anderson@gmail.com';
 $password_admin = '123';
 if($email == $email_admin && $password == $password_admin)
 {
  header("Location: ../pages/home.php");
 }

?>
