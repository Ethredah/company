


        <?php
          include ('header.php');
        ?>





            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>43</h3>
									<span>Days Employed</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>
                    23
                  </h3>
									<span>Leaves Taken</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
								<div class="dash-widget-info">
									<h3>4</h3>
									<span>Pending Tasks</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>18</h3>
									<span>Employees</span>
								</div>
							</div>
						</div>
					</div>



					<div class="row">

            <div class="col-sm-6 text-center">
              <h5 style="float:left;">My Perfomance</h5>
              <div class="card-box">
                <div id="area-chart" ></div>
              </div>
            </div>

            <div class="col-md-6">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">My Tasks (
                  11
                    )</h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table m-b-0">
											<thead>
												<tr>
													<th class="col-md-4">Name </th>
													<th class="col-md-4">Progress</th>
												</tr>
											</thead>
											<tbody>


												<tr>
													<td>
														<h2><a href="tasks.php">something to do</a></h2>
														<small class="block text-ellipsis">
															<span class="action-circle large"><i class="material-icons">person</i></span> <span class="text-muted"> </span>
															<span class="text-xs"></span> <span class="text-muted">ethredah@gmail.com</span>
														</small>
													</td>
													<td>
														<div class="progress progress-xs progress-striped">
															<div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="65%" style="width: 65%"></div>
														</div>
													</td>

												</tr>



											</tbody>
										</table>
									</div>
								</div>
								<div class="panel-footer">
									<a href="tasks.php" class="text-primary">View all tasks</a>
								</div>
							</div>
						</div>



					</div>
					<div class="row">
            <!-- <div class="col-sm-6 text-center">
              <div class="card-box">
                <div id="line-chart"></div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card-box">
                <div id="pie-chart" ></div>
              </div>
            </div> -->

					</div>



				</div>

        <?php
          include('footer.php');
        ?>
