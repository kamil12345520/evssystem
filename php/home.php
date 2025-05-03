<?php include('./include/header.php');
  if(empty ($_SESSION ['users'])){
   header('Location:index.php');
}
include('./include/cn.php');//connection file
$query= "SELECT * FROM users";
$result= mysqli_query($cn,$query) or die('cant run query');
$rows= mysqli_num_rows($result);
?>
<div class= "container">
  <h1>welcome <?php echo $_SESSION['users'];?> </h1>
    <?php  include('./include/flash.php'); ?>
    
    <div class= "card rounded-0">
       <div class= " card header bg-danger text-white">
          <i class = "fa fa-users"></i>All users
       </div>
       <table class= "table table-bordered table-hover table-stripped">
        <tr>
            <th><i class="fa fa-id-badge"></i> id </th>
            <th><i class= "fa fa-user"></i> Name</th>
            <th><i class= "fa fa-envelope"></i> Email </th>
            <th><i class= "fa fa-calendar"></i> Dob </th>
            <th><i class= "fa fa-venus-mars"></i> Gender </th>
            <th>Action</th>
        </tr>
        <?php
        if($rows>0){
            while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $row['id'];?> </td>
            <td> <?php echo $row['name'];?> </td>
            <td> <?php echo $row['email'];?> </td>
            <td> <?php echo $row['dob'];?> </td>
            <td> <?php echo ucfirst($row['gender']); ?> </td>
            <td>
                <a href= "edit.php?id=<?php echo $row['id'];?>" onclick="confirm('are you sure you want to edit this user?');">             
                <button class="btn btn-success btn-sm"><i class="fa fa-edit"></i> </button>
                </a>
                <a href="action/delete.php?id=<?php echo $row['id'];?>" onclick="confirm('Are you sure you want to delete this user?');">
                <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> </button>
                 </a>
            </td>  
        </tr>      
        <?php
            }}else{
        ?>
        <?php
            }
        ?>
    </div>
</div> 
<?php include('./include/footer.php');?>

  


