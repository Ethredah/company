
<?php
  include('header.php');

?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
            <div class="col-xs-3">
							<div class="dash-widget clearfix card-box">
							       <h3>40,000</h3>
									<span>Transactions</span>
							</div>
						</div>
            <div class="col-xs-3">
              <div class="dash-widget clearfix card-box" style="color:green;">
                     <h3>43,300</h3>
                  <span>USD</span>
              </div>
            </div>
            <div class="col-xs-3">
							<div class="dash-widget clearfix card-box" style="color:brown;">
							       <h3>44,340,020</h3>
									<span>Kenya Shillings</span>
							</div>
						</div>

						<div class="col-xs-3 text-right m-b-30">
							<div class="view-icons">
								<a href="transactions.php" class="grid-view btn btn-link"><i class="material-icons" title="Home">home</i></a>
								<a href="transactions-list.php" class="list-view btn btn-link active"><i class="material-icons" title="apps">apps</i></a>
							</div>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Transaction ID</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">TYPE</label>
								<select class="select floating">
									<option selected disabled>Select Transaction Type</option>
									<option value="">Withdrawals</option>
									<option value="">Deposits</option>
									<option value="">Pay Bills</option>
                  <option value="">Transfers</option>
									<option value="">Loans</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th style="width:30%;">Name</th>
											<th>Transacton ID</th>
											<th>Type</th>
											<th>Date</th>
											<th>Amount ($)</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>


										<tr>
										  <td>Ethredah Chao</td>
											<td>PO01278K256Q</td>
											<td>Deposit</td>
											<td>2018-05-27</td>
                      <td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">2,950 </a>

												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#"><i class="fa fa-pencil m-r-5" style="color:red;"></i> Flag</a></li>
													</ul>
												</div>
											</td>
										</tr>

                    <tr>
										  <td>James Mureithi</td>
											<td>PB01278K376Q</td>
											<td>Transfer</td>
											<td>2018-04-18</td>
                      <td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">530 </a>

												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#"><i class="fa fa-pencil m-r-5" style="color:red;"></i> Flag</a></li>
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



			<div id="edit_employee" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Employee</h4>
						</div>
						<div class="modal-body">
							<form class="m-b-30">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">First Name <span class="text-danger">*</span></label>
											<input class="form-control" value="John" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Last Name</label>
											<input class="form-control" value="Doe" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Username <span class="text-danger">*</span></label>
											<input class="form-control" value="johndoe" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Email <span class="text-danger">*</span></label>
											<input class="form-control" value="johndoe@example.com" type="email">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Password</label>
											<input class="form-control" value="johndoe" type="password">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Confirm Password</label>
											<input class="form-control" value="johndoe" type="password">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Employee ID <span class="text-danger">*</span></label>
											<input type="text" value="FT-0001" readonly="" class="form-control floating">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Joining Date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Phone </label>
											<input class="form-control" value="9843014641" type="text">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Company</label>
											<select class="select">
												<option value="">Global Technologies</option>
												<option value="1">Delta Infotech</option>
											</select>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label class="control-label">Designation</label>
											<select class="select">
												<option>Web Developer</option>
												<option>Web Designer</option>
												<option>SEO Analyst</option>
											</select>
										</div>
									</div>
								</div>
								<div class="table-responsive m-t-15">
									<table class="table table-striped custom-table">
										<thead>
											<tr>
												<th>Module Permission</th>
												<th class="text-center">Read</th>
												<th class="text-center">Write</th>
												<th class="text-center">Create</th>
												<th class="text-center">Delete</th>
												<th class="text-center">Import</th>
												<th class="text-center">Export</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Holidays</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Leave Request</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Projects</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Tasks</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
											<tr>
												<td>Chats</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input checked="" type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
												<td class="text-center">
													<input type="checkbox">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save Changes</button>
								</div>
							</form>
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
								<p>Are you sure want to delete this?</p>
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
