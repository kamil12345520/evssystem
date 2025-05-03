<?php include('./include/header.php');
$id = $_GET['id'];
include('./include/cn.php');
$query= "SELECT * FROM users Where id ='$id'";
$result = mysqli_query($cn , $query) or die ('cant run the query');
$row = mysqli_fetch_array($result);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4">
             <?php include('include/flash.php'); // flash message .. ?>                 
            <div class="card rounded-0">
                <div class="card-header">
                    <i class="fa fa-user-plus"></i> Update Here
                </div>
                <div class="card-body">
                  <form action="action/update.php?id=<?php echo $row['id']; ?>" method="POST"> 
                      <div class="form-group">
                          <label for="">
                           <i class="fa fa-user"></i> Name 
                          </label>
                          <input type="text" class="form-control" name="name" value= "<?php echo $row['name'];?>" required>
                     </div>
                      <div class="form-group mt-3">
                          <label for="">
                            <i class="fa fa-envelope"></i> Email 
                           </label>
                         <input type="email" class="form-control" name="email" value= "<?php echo $row['email'];?>" required>
                      </div>
                      
                       <div class="form-group mt-3">
                          <label for="">
                            <i class="fa fa-calendar"></i> Date of Birth 
                           </label>
                           <input type="date" class="form-control" name="dob" value= "<?php echo $row['dob'];?>" required>
                       </div>
                       <div class="form-group mt-3">
                           <label for="">
                            <i class="fa fa-venus-mars"></i> Gender 
                            </label>
                           <br>
                           <input type="radio" name="gender" value="male" required <?php if($row['gender'] == "male") { echo 'checked'; } ?> /> 
                           <input type="radio" name="gender" value="female" required <?php if($row['gender']== "male"){ echo 'checked';} ?> />
                       </div>
                       <div class="card-footer">
                       <button class="btn btn-danger float-end rounded-0">
                        <i class="fa fa-user-plus"></i> Update
                        </button>
                   </form>
              </div>
          </div>
        </div>
    </div>
</div>
<?php include('./include/footer.php'); ?>
