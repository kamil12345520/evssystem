<?php
$email = $_GET['email'];
$password = $_GET['password'];
include ('../include/cn.php');
$query = "SELECT * FROM users WHERE email= '$email'  AND '$password'";
$result = mysqli_query($cn,$query) or die('cant run query');
$rows= mysqli_num_rows($result);
 if ($rows >0){
    header ('Location:../home.php');

 }else {
    $warning = "email and password did not correct";
    header('Location: ../index.php?warning='.$warning);
 }

?>