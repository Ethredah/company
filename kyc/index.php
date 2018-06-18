


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
						<div class="col-md-8">
							<div class="panel panel-table">
								<div class="panel-heading">
									<h3 class="panel-title">Recent Applications</h3>
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

            <div id="barchart_material" style="height:400px;"></div>

					</div>

				</div>

        <?php
          include('footer.php');
        ?>


        <script>
        Morris.Donut({
          element: 'pie-chart',
          data: [
          {label: "Agents", value: 483},
          {label: "Merchants", value: 315},
          {label: "Super-Agents", value: 75}
          ]
        });
        </script>



        <!-- CHART -->
        <script type="text/javascript">
     google.charts.load('current', {'packages':['bar']});
     google.charts.setOnLoadCallback(drawChart);

     function drawChart() {
       var data = google.visualization.arrayToDataTable([
         ['Year', 'Merchants', 'Agents', 'Super-Agents'],
         ['2014', 1000, 400, 200],
         ['2015', 1170, 460, 250],
         ['2016', 660, 1120, 300],
         ['2017', 1030, 540, 350]
       ]);

       var options = {
         chart: {
           title: 'Yearly Applications',
           subtitle: 'Merchants, Agents, and Super-Agents: 2014-2017',
         },
         bars: 'vertical' // Required for Material Bar Charts.
       };

       var chart = new google.charts.Bar(document.getElementById('barchart_material'));

       chart.draw(data, google.charts.Bar.convertOptions(options));
     }
   </script>

   <!-- CHART -->
