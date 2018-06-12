

    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employee Salary</h4>
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
											<th>Position</th>
											<th>Salary</th>
											<th>Payslip</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">John Doe <span>Web Designer</span></a></h2>
											</td>
											<td>FT-0001</td>
											<td>johndoe@example.com</td>
											<td>1 Jan 2013</td>
											<td>
												<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Product Manager
                          </a>

											</td>
											<td>$59698</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>

										</tr>

										<tr>
											<td>
												<a href="profile.php" class="avatar">B</a>
												<h2><a href="profile.php">Bernardo Galaviz <span>Web Developer</span></a></h2>
											</td>
											<td>FT-0007</td>
											<td>bernardogalaviz@example.com</td>
											<td>1 Jan 2014</td>
											<td>
                        <a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Lead Marketer
                          </a>
											</td>
											<td>$38400</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>

										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">L</a>
												<h2><a href="profile.php">Lesley Grauer <span>Team Leader</span></a></h2>
											</td>
											<td>FT-0008</td>
											<td>lesleygrauer@example.com</td>
											<td>1 Jun 2015</td>
											<td>
                        <a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Sales Manager
                          </a>
											</td>
											<td>$75500</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>

										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">J</a>
												<h2><a href="profile.php">Jeffery Lalor <span>Team Leader</span></a></h2>
											</td>
											<td>FT-0009</td>
											<td>jefferylalor@example.com</td>
											<td>1 Jan 2013</td>
											<td>
                        <a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Team Leader
                          </a>
											</td>
											<td>$73550</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>

										</tr>
										<tr>
											<td>
												<a href="profile.php" class="avatar">L</a>
												<h2><a href="profile.php">Loren Gatlin <span>Android Developer</span></a></h2>
											</td>
											<td>FT-0010</td>
											<td>lorengatlin@example.com</td>
											<td>1 Jan 2013</td>
											<td>
                        <a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Android Developer
                          </a>
											</td>
											<td>$55000</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>
											<!-- <td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_salary" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_salary" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td> -->
										</tr>

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
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Select Staff</label>
											<select class="select">
                        <option selected disabled>--Select Staff Member--</option>
												<option>John Doe</option>
												<option>Richard Miles</option>
                        <option>Cliff</option>
                        <option>Ethredah Chao</option>
                        <option>Anne</option>
                        <option>Loraine</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<label>Net Salary</label>
										<input class="form-control" type="text">
									</div>
								</div>
                <br>
								<div class="row">
									<div class="col-md-6">
										<h4 class="text-primary">Earnings</h4>
										<div class="form-group">
											<label>Basic</label>
											<input class="form-control" type="text">
										</div>

										<div class="form-group">
											<label>Allowance</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Medical  Allowance</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">

										<h4 class="text-primary">Deductions</h4>
										<div class="form-group">
											<label>NHIF</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label>NSSF</label>
											<input class="form-control" type="text">
										</div>

										<div class="form-group">
											<label>Tax</label>
											<input class="form-control" type="text">
										</div>


										<div class="form-group">
											<label>Others</label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Salary</button>
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
