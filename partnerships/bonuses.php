


    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">My Bonues</h4>
						</div>

					</div>
					<div class="row filter-row">


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
											<th>Date</th>
											<th>Bonus</th>
											<th>Payslip</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1 Jan 2013</td>

											<td>$59698</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>

										</tr>

										<tr>
											<td>1 Jan 2014</td>

											<td>$38400</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>

										</tr>
										<tr>
											<td>1 Jun 2015</td>

											<td>$75500</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>

										</tr>
										<tr>
											<td>1 Jan 2013</td>

											<td>$73550</td>
											<td><a class="btn btn-xs btn-primary" href="salary-view.php">Generate Slip</a></td>

										</tr>


									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>


            </div>



        </div>

        <?php
          include('footer.php');
        ?>
