

    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employees Salaries</h4>
              <p><?
              if (isset($_GET['success'])) {
                $success = $_GET['success'];
               echo '<div class="alert alert-success" >
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong>DONE!! </strong><p> The Employee Salary details have been successfully added.</p>
               </div>';
              }
                ?></p>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_salary"><i class="fa fa-plus"></i> Add Salary</a>
						</div>
					</div>
					<div class="row filter-row">
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" />
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Role</label>
								<select class="select floating">
									<option value=""> -- Select -- </option>
									<option value="">Employee</option>
									<option value="1">Manager</option>
								</select>
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Department</label>
								<select class="select floating">
									<option value="" selected disabled> -- Select -- </option>
									<option value=""> Operations </option>
									<option value=""> Product </option>
									<option value=""> Marketing </option>
                  <option value=""> Sales </option>
								</select>
							</div>
					   </div>
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">From</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">To</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
						<div class="col-sm-3 col-md-2 col-xs-6">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th style="width:30%;">Employee</th>
											<th>Employee ID</th>
											<th>Email</th>
											<th>Joining Date</th>
											<th>Department</th>
											<th>Salary</th>
										</tr>
									</thead>
									<tbody>

                    <?php
                    $sql = "SELECT * FROM employees ";
                    $query = mysqli_query($connection, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                      $empid = $row["empid"];

                      $sql2 = "SELECT * FROM payroll WHERE empid='$empid'";
                      $query2 = mysqli_query($connection, $sql2);

                      while ($row2 = mysqli_fetch_assoc($query2)) {



                      echo '

										<tr>
											<td>
												<a href="profile.php?empid='.$row["empid"].'" class="avatar">'.substr($row["fname"],0,1).'</a>
												<h2><a href="profile.php?empid='.$row["empid"].'">'.$row["fname"]." ".$row["lname"].' <span>'.$row["position"].'</span></a></h2>
											</td>
											<td>'.$row["empid"].'</td>
											<td>'.$row["email"].'</td>
											<td>'.$row["empdate"].'</td>
											<td>
												<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">'.$row["department"].'
                          </a>

											</td>
											<td>'.$row2["basic"].'</td>

										</tr>'

                    ;}
                  }
                  ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>


            </div>
			<div id="add_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Staff Salary</h4>
						</div>
						<div class="modal-body">
							<form action="functions/add-salary.php" method="post">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Select Staff</label>
											<select class="select" name="email">
                        <option selected disabled>--Select Staff Member--</option>
                        <?
                        $sql = "SELECT * FROM employees";
                        $query = mysqli_query($connection, $sql);
                        while ($row=mysqli_fetch_array($query)) {
                          echo '
												<option value="'.$row["email"].'" required>'.$row["fname"]. "  ".$row["lname"].'</option>
												'
                        ;}
                      ?>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<label>Net Salary</label>
										<input class="form-control" type="text" disabled>
									</div>
								</div>
                <br>
								<div class="row">
									<div class="col-md-6">
										<h4 class="text-primary">Earnings</h4>
										<div class="form-group">
											<label>Basic Salary</label>
											<input class="form-control" type="text" name="basic" required>
										</div>

										<div class="form-group">
											<label>Medical Allowance</label>
											<input class="form-control" type="text" name="medallowance">
										</div>
                    <div class="form-group">
											<label>Other Allowances</label>
											<input class="form-control" type="text" name="otherallowances">
										</div>

										<div class="form-group">
											<label>Other Benefits</label>
											<input class="form-control" type="text" name="otherbenefits" >
										</div>
									</div>
									<div class="col-md-6">

										<h4 class="text-primary">Deductions</h4>
										<div class="form-group">
											<label>NHIF</label>
											<input class="form-control" type="text" name="nhif" disabled>
										</div>
										<div class="form-group">
											<label>NSSF</label>
											<input class="form-control" type="text" name="nssf" disabled>
										</div>

										<div class="form-group">
											<label>Tax</label>
											<input class="form-control" type="text" name="tax" disabled>
										</div>

                    <div class="form-group">
											<label>Other Deductions</label>
											<input class="form-control" type="text" name="otherdeductions">
										</div>


									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary" name="add" id="add">Create Salary</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

			<div id="edit_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Staff Salary</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Select Staff</label>
											<select class="select">
												<option>John Doe</option>
												<option>Richard Miles</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<label>Net Salary</label>
										<input class="form-control" type="text" value="$4000">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<h4 class="text-primary">Earnings</h4>
										<div class="form-group">
											<label>Basic</label>
											<input class="form-control" type="text" value="$6500">
										</div>
										<div class="form-group">
											<label>DA(40%)</label>
											<input class="form-control" type="text" value="$2000">
										</div>
										<div class="form-group">
											<label>HRA(15%)</label>
											<input class="form-control" type="text" value="$700">
										</div>
										<div class="form-group">
											<label>Conveyance</label>
											<input class="form-control" type="text" value="$70">
										</div>
										<div class="form-group">
											<label>Allowance</label>
											<input class="form-control" type="text" value="$30">
										</div>
										<div class="form-group">
											<label>Medical  Allowance</label>
											<input class="form-control" type="text" value="$20">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<h4 class="text-primary">Deductions</h4>
										<div class="form-group">
											<label>TDS</label>
											<input class="form-control" type="text" value="$300">
										</div>
										<div class="form-group">
											<label>ESI</label>
											<input class="form-control" type="text" value="$20">
										</div>
										<div class="form-group">
											<label>PF</label>
											<input class="form-control" type="text" value="$20">
										</div>
										<div class="form-group">
											<label>Leave</label>
											<input class="form-control" type="text" value="$250">
										</div>
										<div class="form-group">
											<label>Prof. Tax</label>
											<input class="form-control" type="text" value="$110">
										</div>
										<div class="form-group">
											<label>Labour Welfare</label>
											<input class="form-control" type="text" value="$10">
										</div>
										<div class="form-group">
											<label>Fund</label>
											<input class="form-control" type="text" value="$40">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text" value="$15">
										</div>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save & Update</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="delete_salary" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Salary</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this?</p>
								<div class="m-t-20 text-left">
									<a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
        </div>

        <?php
          include('footer.php');
        ?>
