

        <?php
          include('header.php');
        ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-4">
							<h4 class="page-title">Partnerships (6)</h4>
						</div>
            <div class="col-xs-4 text-right m-b-30">
              <div class="dash-widget-info" style="color:green;">
                  <h3>KSH. 41,120</h3>
                  <span>Transactions</span>
                </div>
						</div>
						<div class="col-xs-4 text-right m-b-30">
							<a href="create-partner.php" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Create Partner Profile</a>
						</div>
					</div>
					<div class="row filter-row">

						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Name</label>
								<div><input class="form-control floating" type="text"></div>
							</div>
						</div>

						<div class="col-sm-3 col-xs-6">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0">
									<thead>
										<tr>
											<th>#</th>
											<th>Name</th>
                      <th>Country</th>
											<th>Closing Date</th>
											<th>Deal Size</th>
                      <th>Deal Type</th>
                      <th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="partner-profile.php">Kenya Commercial Bank</a></td>
                      <td>Kenya</td>
											<td>1 Sep 2018</td>
                      <td>$20,154</td>
											<td>Limited Liability Partnership (LLP)</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-partner.php"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="partner-profile.php"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-trash"></i> Delete</a></li>
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
