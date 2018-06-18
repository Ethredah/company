

        <?php
          include('header.php');
        ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-4">
							<h4 class="page-title">Request Orders (2)</h4>
						</div>
            <div class="col-xs-4 text-right m-b-30">
              <div class="dash-widget-info" style="color:green;">
                  <h3>KSH. 41,120</h3>
                  <span>Totals</span>
                </div>
						</div>
						<div class="col-xs-4 text-right m-b-30">
							<a href="create-invoice.php" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Create Invoice</a>
						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">From</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">To</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Status</label>
								<select class="select floating">
									<option value="">Select Status</option>
									<option value="">Pending</option>
									<option value="1">Paid</option>
									<option value="1">Partially Paid</option>
								</select>
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
											<th>R/O Number</th>
											<th>Department</th>
											<th>Date</th>
											<th>Due Date</th>
											<th>Items</th>
											<th>Quantity</th>
                      <th>Amount</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="request-view.php">#R/O-00017</a></td>
											<td>Human Resource</td>
											<td>1 Sep 2018</td>
											<td>7 Sep 2018</td>
											<td>Notebooks</td>
                      <td>20</td>
											<td><span class="label label-success-border">$2000</span></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-request.php"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="request-view.php"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
                    <tr>
                      <td>2</td>
                      <td><a href="request-view.php">#R/O-0023</a></td>
                      <td>Product</td>
                      <td>1 Sep 2018</td>
                      <td>7 Sep 2018</td>
                      <td>Flash Disks</td>
                      <td>14</td>
                      <td><span class="label label-success-border">$4500</span></td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                          <ul class="dropdown-menu pull-right">
                            <li><a href="edit-request.php"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                            <li><a href="request-view.php"><i class="fa fa-eye m-r-5"></i> View</a></li>
                            <li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
                            <li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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
