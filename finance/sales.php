


<?php
  include('header.php');
?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Sales</h4>
						</div>
					</div>

          <div class="row">
						<div class="col-md-8 col-sm-8 col-lg-4">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>3,060</h3>
									<span>Sales</span>
								</div>
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-lg-4">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>$20,504</h3>
									<span>Total Commisions</span>
								</div>
							</div>
						</div>
						<div class="col-md-8 col-sm-8 col-lg-4">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
								<div class="dash-widget-info">
									<h3>$3,236</h3>
									<span>Unpaid Commisions</span>
								</div>
							</div>
						</div>

					</div>

          <div class="row filter-row">

						<div class="col-sm-4 col-xs-8">
							<div class="form-group form-focus">
								<label class="control-label">Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<!-- <div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">TYPE</label>
								<select class="select floating">
									<option selected disabled>Select Transaction Type</option>
									<option value="">Withdrawals</option>
									<option value="">Deposits</option>
                  <option value="">Transfers</option>
									<option value="">Loans</option>
								</select>
							</div>
						</div> -->
						<div class="col-sm-3 col-xs-6">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
      </div>

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0 datatable">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
										  <th>Total Sales</th>
											<th>Status</th>
											<th>Employed</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a >Wilmer Deluna</a></td>
											<td>wilmerdeluna@example.com</td>
											<td>9876543210</td>
											<td>
												<ul class="team-members">

													<li>
														<a href="#" class="all-users">23</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>10 hrs ago</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>


                    <tr>
											<td>2</td>
											<td><a>James Ogeto</a></td>
											<td>saleman2@example.com</td>
											<td>9844443210</td>
											<td>
												<ul class="team-members">

													<li>
														<a href="#" class="all-users">43</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>4 days ago</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>

                    <tr>
											<td>3</td>
											<td><a>Anne Waithera</a></td>
											<td>ann@example.com</td>
											<td>9876543210</td>
											<td>
												<ul class="team-members">

													<li>
														<a href="#" class="all-users">63</a>
													</li>
												</ul>
											</td>
											<td><span class="label label-success-border">Working</span></td>
											<td>20 April, 2018</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

                <?php
                  include('footer.php');
              ?>
