<?php
  $name= $_POST['name'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $cpassword= $_POST['confirm_password'];
  $dob= $_POST['dob'];
  $gender= $_POST['gender'];
  //condition
  if ($password == $cpassword){
    echo 'password is matched';
  }else{
    //redirect
    header('Location:.../register.php');
  }
?> 