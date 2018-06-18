


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
									<h3 class="count">400</h3>
									<span>Transactions</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3 class="count">2045</h3>
									<span>Users</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
								<div class="dash-widget-info">
									<h3 class="count">356</h3>
									<span>Loans</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									$<h3 class="count">2700</h3>
									<span>Profit</span>
								</div>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-md-7">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Unpaid Invoices</h3>
								</div>
                <br>
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
														<span class="label label-danger-border">Unpaid</span>
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

            <div class="col-md-5">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Summary</h3>
								</div>
								<div class="panel-body">
									<div class="table-responsive">
										<table class="table table-striped custom-table m-b-0">
											<thead>
												<tr>
													<th class="col-md-6">Category</th>
													<th class="col-md-6">Totals</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<h2><a href="project-view.php">Users</a></h2>
														<small class="block text-ellipsis">
															<span class="text-xs">10,278</span> <span class="text-muted">Deposits, </span>
															<span class="text-xs">9,256</span> <span class="text-muted">Withdrawals</span>
														</small>
													</td>
													<td>
														$ 400,000
													</td>
													<td class="text-right">

													</td>
												</tr>

												<tr>
													<td>
														<h2><a href="project-view.php">Agents</a></h2>
														<small class="block text-ellipsis">
															<span class="text-xs">3,456</span> <span class="text-muted">Agents, </span>
															<span class="text-xs">435</span> <span class="text-muted">Super Agents</span>
														</small>
													</td>
													<td>
														$ 300,278
													</td>

												</tr>

                        <tr>
                          <td>
                            <h2><a href="project-view.php">Merchants</a></h2>
                            <small class="block text-ellipsis">
                              <span class="text-xs">2,006</span> <span class="text-muted">Payments
                            </small>
                          </td>
                          <td>
                            $ 400,200
                          </td>

                        </tr>


											</tbody>
										</table>
									</div>
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
