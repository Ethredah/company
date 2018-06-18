




        <?php
          include ('header.php');
        ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box" style="color:red;">
								<span class="dash-widget-icon" ><i class="material-icons">assignment</i></span>
								<div class="dash-widget-info">
									<h3 class='count'>210</h3>
									<span>Applications</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box" style="color:green;">
								<span class="dash-widget-icon"><i class="material-icons">check</i></span>
								<div class="dash-widget-info">
									<h3 class='count'>164</h3>
									<span>Approved</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box" style="color:brown;">
								<span class="dash-widget-icon"><i class="material-icons">block</i></span>
								<div class="dash-widget-info">
									<h3 class='count'>7</h3>
									<span>Rejected</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box" style="color:orange;">
								<span class="dash-widget-icon"><i class="material-icons">cloud_queue</i></span>
								<div class="dash-widget-info">
									<h3 class='count'>18</h3>
									<span>Pending</span>
								</div>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Applications</h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table m-b-0" id="searchtable">
											<thead>
												<tr>
													<th>Sales Person</th>
													<th>Applicant</th>
													<th>Type</th>
													<th>Date</th>
                          <th>Status</th>
                          <th>Action</th>
												</tr>
											</thead>
											<tbody>
                        <br>
												<tr>
													<td><a href="application-view.php">James Njoroge</a></td>
													<td>
														<h2><a href="#">Mbugua Agencies Kilimani</a></h2>
													</td>
													<td>
														<span>Agent</span>
													</td>
                          <td>8 Aug 2017</td>
                          <td>
                            <div class="dropdown action-label">
    													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">New <i class="caret"></i></a>
    													<ul class="dropdown-menu">
    														<li><a href="#">Pending</a></li>
    														<li><a href="#"> Approved</a></li>
    														<li><a href="#"> Rejected</a></li>
    													</ul>
    												</div>
                          </td>
                          <td class="text-right">
    												<div class="dropdown">
    													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    													<ul class="dropdown-menu pull-right">
    														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> View</a></li>
    														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
    													</ul>
    												</div>
    											</td>
												</tr>
                        <tr>
													<td><a href="application-view.php">Mark Kamau</a></td>
													<td>
														<h2><a href="#">Rosellyn Java House</a></h2>
													</td>
													<td>
														<span>Merchant</span>
													</td>
                          <td>21 Sep 2018</td>
                          <td>
                            <div class="dropdown action-label">
    													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rejected <i class="caret"></i></a>
    													<ul class="dropdown-menu">
    														<li><a href="#">Pending</a></li>
    														<li><a href="#"> Approved</a></li>
    														<li><a href="#"> New</a></li>
    													</ul>
    												</div>
                          </td>
                          <td class="text-right">
    												<div class="dropdown">
    													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    													<ul class="dropdown-menu pull-right">
    														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> View</a></li>
    														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
    													</ul>
    												</div>
    											</td>
												</tr>
                        <tr>
													<td><a href="application-view.php">Grace Muthoni</a></td>
													<td>
														<h2><a href="#">Mama Angela Groceries</a></h2>
													</td>
													<td>
														<span>Merchant</span>
													</td>
                          <td>23 Jan 2018</td>
                          <td>
                            <div class="dropdown action-label">
    													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Approved <i class="caret"></i></a>
    													<ul class="dropdown-menu">
    														<li><a href="#">New</a></li>
    														<li><a href="#"> Approved</a></li>
    														<li><a href="#"> Rejected</a></li>
    													</ul>
    												</div>
                          </td>
                          <td class="text-right">
    												<div class="dropdown">
    													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
    													<ul class="dropdown-menu pull-right">
    														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> View</a></li>
    														<li><a href="#" data-toggle="modal" data-target="#delete_project"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
    													</ul>
    												</div>
    											</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="panel-footer">
									<a href="invoices.php" class="text-primary">View all applications</a>
								</div>
							</div>
						</div>

            <!-- DELETE MODAL -->

            <div id="delete_project" class="modal custom-modal fade" role="dialog">
      				<div class="modal-dialog">
      					<div class="modal-content modal-md">
      						<div class="modal-header">
      							<h4 class="modal-title">Delete Applcation</h4>
      						</div>
      						<div class="modal-body card-box">
      							<p>Are you sure want to delete this application?</p>
      							<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
      								<button type="submit" class="btn btn-danger">Delete</button>
      							</div>
      						</div>
      					</div>
      				</div>
      			</div>

            <!-- END DELETE MODAL -->



					</div>


				</div>

        <?php
          include('footer.php');
        ?>
