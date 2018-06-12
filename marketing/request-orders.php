


        <?php
          include('header.php');
        ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Request Orders</h4>
						</div>
						<div class="col-sm-4 text-right m-b-30">
							<a href="create-lpo.php" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Create LPO</a>
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
                      <th>Date</th>
											<th>From</th>
											<th>Department</th>
											<th>Items</th>
											<th>Quantity</th>
											<th>Description</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="invoice-view.php">#R/O-0001</a></td>
                      <td>1 Sep 2018</td>
											<td>Ethredah Chao</td>
											<td>Product</td>
											<td>Notebooks</td>
											<td>3</td>
											<td><span>Came in late and did not receive this weeks' notebooks.</span></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-pencil m-r-5"></i> Aprove</a></li>
														<li><a href="#"><i class="fa fa-eye m-r-5"></i> Disaprove</a></li>

													</ul>
												</div>
											</td>
										</tr>

                    <tr>
                      <td>2</td>
                      <td><a href="invoice-view.php">#R/O-0001</a></td>
                      <td>23 June 2018</td>
                      <td>Herbert Rajula</td>
                      <td>Operations</td>
                      <td>Mugs</td>
                      <td>2</td>
                      <td><span>2 mugs broke last week that need replacement.</span></td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                          <ul class="dropdown-menu pull-right">
                            <li><a href="#"><i class="fa fa-pencil m-r-5"></i> Aprove</a></li>
                            <li><a href="#"><i class="fa fa-eye m-r-5"></i> Disaprove</a></li>

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
