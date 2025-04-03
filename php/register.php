<?php include('./include/header.php'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <div class="card rounded-0">
                <div class="card-header">
                    <i class="fa fa-user-plus"></i> Register Here
                </div>
                <div class="card-body">
                  <form action="action/register.php" method="POST"> 
                      <div class="form-group">
                          <label for="">
                           <i class="fa fa-user"></i> Name 
                          </label>
                          <input type="text" class="form-control" name="name" required>
                     </div>
                      <div class="form-group mt-3">
                          <label for="">
                            <i class="fa fa-envelope"></i> Email 
                           </label>
                         <input type="email" class="form-control" name="email" required>
                      </div>
                      <div class="form-group mt-3">
                          <label for="">
                            <i class="fa fa-lock"></i> Password 
                           </label>
                          <input type="password" class="form-control" name="password" required>
                      </div>
                      <div class="form-group mt-3">
                          <label for="">
                            <i class="fa fa-lock"></i> Confirm Password 
                           </label>
                           <input type="password" class="form-control" name="confirm_password" required>
                     </div>
                       <div class="form-group mt-3">
                          <label for="">
                            <i class="fa fa-calendar"></i> Date of Birth 
                           </label>
                           <input type="date" class="form-control" name="dob" required>
                       </div>
                       <div class="form-group mt-3">
                           <label for="">
                            <i class="fa fa-venus-mars"></i> Gender 
                            </label>
                           <br>
                           <input type="radio" name="gender" value="male" required> Male 
                           <input type="radio" name="gender" value="female" required> Female
                       </div>
                       <div class="card-footer">
                       <button class="btn btn-danger float-end rounded-0">
                        <i class="fa fa-user-plus"></i> Register
                        </button>
                   </form>
              </div>
          </div>
        </div>
    </div>
</div>
<?php include('./include/footer.php'); ?>

