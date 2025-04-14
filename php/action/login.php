<?php
$email = $_GET['email'];
$password = $_GET['password'];
include ('../include/cn.php');
$query = "SELECT * FROM users WHERE email= '$email'  AND '$password'";
$result = mysqli_query($cn,$query) or die('cant run query');
$rows= mysqli_num_rows($result);
 if ($rows >0){
   //firstly website find the data after they start session session say that yes the data
   //in the database and then any site they are showing the required data that we need.
   $row = mysqli_fetch_array($result);// database mne sy data ko array ke form mne fetch krta hy
   session_start();
    header ('Location:../home.php');
    $_SESSION['users']= $row['name'];

 }else {
    $warning = "email and password did not correct";
    header('Location: ../index.php?warning='.$warning);
 }

?>