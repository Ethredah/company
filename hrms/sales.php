


<?php
  include('header.php');
?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Sales Progress</h4>
						</div>
					</div>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="material-icons">people</i></span>
                <div class="dash-widget-info">
                  <h3 class='count'>300</h3>
                  <span>Sales Agents</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="material-icons">business_center</i></span>
                <div class="dash-widget-info">
                  <h3 class='count'>40504</h3>
                  <span>Sales</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="material-icons">assignment</i></span>
                <div class="dash-widget-info">
                  <h3 class='count'>200</h3>
                  <span>Completed Sales</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-3">
              <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="material-icons">money</i></span>
                <div class="dash-widget-info">
                  <h3 class='count'>1800</h3>
                  <span>Turnover</span>
                </div>
              </div>
            </div>
          </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0" id="searchtable">
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
											<td><a href="profile.php">Wilmer Deluna</a></td>
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
											<td><a href="profile.php">James Ogeto</a></td>
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
											<td><a href="profile.php">Anne Waithera</a></td>
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
