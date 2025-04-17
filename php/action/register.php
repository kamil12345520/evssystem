<?php
  $name= $_POST['name'];
  $email= $_POST['email'];
  $password= $_POST['password'];
  $cpassword= $_POST['confirm_password'];
  $dob= $_POST['dob'];
  $gender= $_POST['gender'];
  //condition
  if ($password == $cpassword){
    include ('../include/cn.php');
    //query for the repated email..
    $result = mysqli_query($cn,"SELECT * FROM users WHERE email='$email'");
    $rows = mysqli_num_rows($result); //will count number of rows

  if ($rows>0){
      //redirect to
      $warning = "email will be repeated";
      header('Location: ../register.php?warning='.$warning);
} else{
      $query= "INSERT INTO users (name, email, password, gender, dob) VALUES ('$name','$email','$password','$gender','$dob')"; 
      mysqli_query($cn,$query) or die('cant run query'. mysqli_error($cn));
      echo 'password is matched';
         //redirect
      $success = "user registered successfully";
      header('Location: ../register.php?success='.$success);
    }
  }else{
    //redirect
    $warning = "Password Did Not Matched";
    header('Location: ../register.php?warning='.$warning);
  }
?>  



