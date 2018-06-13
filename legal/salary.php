

    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">My Salary</h4>
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

            <div class="col-sm-5 ">


              <div class="alert alert-info" >
							<p>Basic Salary : KES.120,500  || Net Salary : KES.105,245</p>
              <p>NHIF : KES.200 || NSSF : KES.120 </p>
              <p>PAYE Tax : KES.2000</p>
            </div>

            
						</div>

        </div>


					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Date</th>
											<th>Salary (KES)</th>
											<th>Payslip</th>
										</tr>
									</thead>
									<tbody>
										<tr>

											<td>5 May 2018</td>

											<td>120,000</td>
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
