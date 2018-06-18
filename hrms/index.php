


        <?php
          include ('header.php');
        ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box" >
								<span class="dash-widget-icon" style="color:red;"><i class="material-icons">assessment</i></span>
								<div class="dash-widget-info">
									<h3 class='count'>4</h3>
									<span>Activities</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="material-icons">business_center</i></span>
								<div class="dash-widget-info">
									<h3 class='count'>44</h3>
									<span>Sales</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="material-icons">assignment</i></span>
								<div class="dash-widget-info">
									<h3 class='count'>7</h3>
									<span>Tasks</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="material-icons">people</i></span>
								<div class="dash-widget-info">
									<h3 class='count'>18</h3>
									<span>Employees</span>
								</div>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-8">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Invoices</h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table m-b-0" id="searchtable">
											<thead>
												<tr>
													<th>Invoice ID</th>
													<th>Client</th>
													<th>Due Date</th>
													<th>Total</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
                        <br>
												<tr>
													<td><a href="invoice-view.php">#INV-0001</a></td>
													<td>
														<h2><a href="#">Hazel Nutt</a></h2>
													</td>
													<td>8 Aug 2017</td>
													<td>$380</td>
													<td>
														<span class="label label-warning-border">Partially Paid</span>
													</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0002</a></td>
													<td>
														<h2><a href="#">Paige Turner</a></h2>
													</td>
													<td>17 Sep 2017</td>
													<td>$500</td>
													<td>
														<span class="label label-success-border">Paid</span>
													</td>
												</tr>
												<tr>
													<td><a href="invoice-view.php">#INV-0003</a></td>
													<td>
														<h2><a href="#">Ben Dover</a></h2>
													</td>
													<td>30 Nov 2017</td>
													<td>$60</td>
													<td>
														<span class="label label-danger-border">Unpaid</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="panel-footer">
									<a href="invoices.php" class="text-primary">View all invoices</a>
								</div>
							</div>
						</div>

            <div class="col-md-4">
								<div class="panel-heading">
									<h3 class="panel-title">Statistics</h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
                    	<div class="card-box">
    										<div id="pie-chart" ></div>
    									</div>
									</div>
								</div>
						</div>



					</div>
					<div class="row">


					</div>

				</div>

        <?php
          include('footer.php');
        ?>


        <script>
        Morris.Donut({
          element: 'pie-chart',
          data: [
          {label: "Employees", value: 30},
          {label: "Clients", value: 15},
          {label: "Projects", value: 45},
          {label: "Tasks", value: 10}
          ]
        });
        </script>
