 
<?php include('./include/header.php');
session_start();
if(empty ($_SESSION ['users'])){
    header('Location:index.php');
}
?>
<div class= "container">
<h1> welcome <?php echo $_SESSION['users'];?> </h1>
</div> 
<?php include('./include/footer.php');?>

