
      <?php
        include('header.php');

    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Poraeh Employees</h4>
						</div>
						<div class="col-xs-8 text-right m-b-20">
							<a href="new-employee.php" class="btn btn-primary rounded pull-right" ><i class="fa fa-plus"></i> Add Employee</a>
							<div class="view-icons">
								<a href="employees.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
								<a href="employees-list.php" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
					<div class="row filter-row">
                           <div class="col-sm-3 col-xs-6">
								<div class="form-group form-focus">
									<label class="control-label">Employee ID</label>
									<input type="text" class="form-control floating" />
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6">
								<div class="form-group form-focus">
									<label class="control-label">Employee Name</label>
									<input type="text" class="form-control floating" />
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6">
								<div class="form-group form-focus select-focus">
									<label class="control-label">Department</label>
									<select class="select floating">
										<option value="">Select Department</option>
										<option value="">Marketing</option>
										<option value="">Operations</option>
										<option value="">Product</option>
										<option value="">Business</option>
									</select>
								</div>
                           </div>
                           <div class="col-sm-3 col-xs-6">
                                <a href="#" class="btn btn-success btn-block"> Search </a>
                           </div>
                    </div>


					<div class="row staff-grid-row">


						<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="profile.php"><img class="avatar" src="../assets/img/user.jpg" alt=""></a>
								</div>

								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="profile.php">Ethredah Chao</a></h4>
								<div class="small text-muted">Product</div>
							</div>
						</div>



					</div>
        </div>





          <?php
            include('footer.php');
        ?>
