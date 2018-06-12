
    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<h4 class="page-title">Change Password</h4>
              <form action="functions/change-password.php" method="post">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="form-group">
                      <label>Old password</label>
                      <input type="password" value="<?php echo $row["password"];?>" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                      <label>New password</label>
                      <input type="password" name="password" class="form-control" required />
                    </div>
                  </div>
                  <div class="col-xs-12  col-sm-6">
                    <div class="form-group">
                      <label>Confirm password</label>
                      <input type="password" name="password2" class="form-control" required />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12 text-center m-t-20">
                    <button type="submit" name="update" class="btn btn-primary">Update Password</button>
                  </div>
                </div>
              </form>
						</div>
					</div>
				</div>

        <?php
          include('footer.php');
        ?>
