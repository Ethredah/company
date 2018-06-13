



    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title"><b>2018 Budgets</b></h4>

						</div>

            <div class="col-xs-4 text-right m-b-30">
              <div class="dash-widget-info" style="color:green;">
                  <h3>KSH. 452,120</h3>
                  <span>Company Annual Budget</span>
                </div>
						</div>

						<div class="col-xs-4 text-right m-b-30">
              <div class="dash-widget-info" style="color:brown;">
                  <h3>KSH. 125,500</h3>
                  <span><b><i class="material-icons" style="color:green;">arrow_downward</i></b>Departments' Budgets</span>
                </div>
						</div>
					</div>
					<div class="row filter-row">

					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Year</label>
								<select class="select floating">
									<option selected disabled> -- Select Year -- </option>
                  	<option value="2014">2014</option>
                    	<option value="2015">2015</option>
                      	<option value="2016">2016</option>
									         <option value="2017">2017</option>
									      <option value="2018">2018</option>
								</select>
							</div>
					   </div>
					   <div class="col-sm-6 col-md-4 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Department</label>
								<select class="select floating">
									<option  selected disabled> -- Select Department-- </option>
									<option value="operations"> Operations </option>
									<option value="product"> Product </option>
									<option value="marketing"> Marketing </option>
                  <option value="sales"> Sales </option>
                  <option value="legal">Legal</option>
                  <option value="finance">Finance</option>
                  <option value="procurement">Procurement</option>
                  <option value="compliance">compliance</option>
                  <option value="business">Business</option>
								</select>
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
											<th>Year</th>
											<th style="width:30%;">Department</th>
											<th>Amount</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>



										<tr>
											<td>
												2018
											</td>
											<td>Marketing</td>
											<td>$125,500</td>
                      <td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="budget-view.php"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Approve</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Reject</a></li>
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


            </div>

        </div>

        <?php
          include('footer.php');
        ?>
