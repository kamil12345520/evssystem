<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$id = $_GET['id'];
include('../include/cn.php');
$query = "UPDATE users SET name='$name', email='$email', dob= '$dob', gender='$gender' WHERE id= '$id'";
mysqli_query($cn ,$query) or die ('cant update the data');
$success = "users updated successfully";
header('Location:../home.php?success='.$success);


?>