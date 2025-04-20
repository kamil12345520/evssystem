<?php
$id = $_GET['id'];
include ('./include/cn.php');
$query = "DELETE FROM users WHERE id='$id'";
 mysqli_query($cn ,$query) or die('cant delete data');


//redirect
$warning = "users deleted succesfully";
header('Location:../home.php?warning='.$warning);

?>

