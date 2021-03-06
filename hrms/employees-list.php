
<?php
  include('header.php');

?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employees</h4>

						</div>

						<div class="col-xs-8 text-right m-b-30">
							<a href="new-employee.php" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Employee</a>
              <div class="view-icons">
                <a href="employees.php" class="grid-view btn btn-link active"><i class="material-icons" title="Home">home</i></a>
								<a href="employees-list.php" class="list-view btn btn-link"><i class="material-icons" title="List">apps</i></a>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0" id="searchtable">
									<thead>
										<tr>
											<th style="width:30%;">Name</th>
											<th>Employee ID</th>
											<th>Email</th>
											<th>Mobile</th>
											<th>Join Date</th>
											<th>Department</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>


										<tr>
											<td>
												<a href="profile.php" class="avatar"><img class="avatar" src='.$row["image"].' alt=""/></a>
												<h2><a href="profile.php">Ethredah Chao<span>web Developer</span></a></h2>
											</td>
											<td>POR#201234</td>
											<td>ethredah@poraeh.com</td>
											<td>+254704563782</td>
											<td>2018-06-21</td>
											<td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Product </a>

												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-profile.php?empid='.$row["empid"].'"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>

									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>


			<div id="delete_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Employee</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this Employee?</p>
                <p><strong>Note : </strong>This is an irreversible action and all the employee's data will be lost.</p>
								<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
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
