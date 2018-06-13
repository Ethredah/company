



    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Employees Bonusses</h4>

						</div>

						<div class="col-xs-8 text-right m-b-30">
              <div class="dash-widget-info" style="color:green;">
                  <h3>KSH. 5,340</h3>
                  <span>Total Bonusses</span>
                </div>
						</div>
					</div>
					<div class="row filter-row">
					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Employee Name</label>
								<input type="text" class="form-control floating" />
							</div>
					   </div>

					   <div class="col-sm-3 col-md-2 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Department</label>
								<select class="select floating">
									<option value="" selected disabled> -- Select -- </option>
									<option value="operations"> Operations </option>
									<option value="product"> Product </option>
									<option value="marketing"> Marketing </option>
                  <option value="sales"> Sales </option>
                  <option value=""> </option>
								</select>
							</div>
					   </div>

						<div class="col-sm-3 col-md-2 col-xs-6">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
          </div>
          <a class="btn btn-xs btn-primary" href="#" style="float:right;">Pay All</a>
          <p> </p>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th style="width:30%;">Employee</th>
											<th>Employee ID</th>
											<th>Email</th>
											<th>Joining Date</th>
											<th>Department</th>
											<th>Bonus</th>
                      <th>Action</th>
										</tr>
									</thead>
									<tbody>



										<tr>
											<td>
												<a href="profile.php" class="avatar">E<?//substr($row["fname"],0,1).?></a>
												<h2><a href="profile.php">Ethredah Chao <span>Web Developer</span></a></h2>
											</td>
											<td>POR#200167</td>
											<td>ethredah@gmail.com</td>
											<td>2018-04-05</td>
											<td>
												<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Product
                          </a>

											</td>
											<td>5,340</td>
                      <td><a class="btn btn-xs btn-primary" href="#">Pay</a></td>

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
