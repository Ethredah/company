


<?php
  include('header.php');

?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Disputed Funds</h4>
						</div>
						
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Transaction ID</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">TYPE</label>
								<select class="select floating">
									<option selected disabled>Select Transaction Type</option>
									<option value="">Withdrawals</option>
									<option value="">Deposits</option>
									<option value="">Pay Bills</option>
                  <option value="">Transfers</option>
									<option value="">Loans</option>
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
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th style="width:30%;">Name</th>
											<th>Transacton ID</th>
											<th>Type</th>
											<th>Date</th>
											<th>Amount ($)</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>


									<tbody>
										<tr>
										  <td>Ethredah Chao</td>
											<td>PO01278K256Q</td>
											<td>Deposit</td>
											<td>2018-05-27</td>
                      <td>
												<div class="dropdown">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">2,950 </a>

												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#"><i class="fa fa-pencil m-r-5" style="color:green;"></i> Un-Flag</a></li>
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

        <?php
          include('footer.php');
      ?>
