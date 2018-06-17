
        <?php
          include('header.php');
        ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Invoices</h4>
              <p></p>
						</div>
						<div class="col-sm-4 text-right m-b-30">
							<a href="create-invoice.php" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Create New Invoice</a>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0" id="searchtable">
									<thead>
										<tr>
											<th>#</th>
											<th>Invoice Number</th>
											<th>Client</th>
											<th>Created Date</th>
											<th>Due Date</th>
											<th>Amount</th>
											<th>Status</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a href="invoice-view.php">#INV-0001</a></td>
											<td>Global Technologies</td>
											<td>1 Sep 2018</td>
											<td>7 Sep 2018</td>
											<td>$2099</td>
											<td><span class="label label-success-border">Paid</span></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-invoice.php"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="invoice-view.php"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td><a href="invoice-view.php">#INV-0002</a></td>
											<td>Delta Infotech</td>
											<td>1 Sep 2018</td>
											<td>7 Sep 2018</td>
											<td>$2099</td>
											<td><span class="label label-info-border">Sent</span></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-invoice.php"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="invoice-view.php"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td><a href="invoice-view.php">#INV-0003</a></td>
											<td>Cream Inc</td>
											<td>1 Sep 2018</td>
											<td>7 Sep 2018</td>
											<td>$2099</td>
											<td><span class="label label-warning-border">Partially Paid</span></td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="edit-invoice.php"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="invoice-view.php"><i class="fa fa-eye m-r-5"></i> View</a></li>
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
