

<?php
  include('header.php');
?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Request Order</h4>
						</div>
						<div class="col-sm-4 text-right m-b-30">
							<div class="btn-group btn-group-sm">
								<button class="btn btn-default">CSV</button>
								<button class="btn btn-default">PDF</button>
								<button class="btn btn-default"><i class="fa fa-print fa-lg"></i> Print</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-6 m-b-20">
											<img src="../assets/img/logo2.png" class="m-b-20" alt="" style="width: 100px;">
				 							<ul class="list-unstyled">
												<li>Poraeh Investments </li>
												<li>3864 Quiet Valley Lane,</li>
												<li>Kilimani, Nairobi, 91403</li>
											</ul>
										</div>
										<div class="col-md-6 m-b-20">
											<div class="invoice-details">
												<h3 class="text-uppercase"> #R/O-0018</h3>
												<ul class="list-unstyled">
													<li>Date: <span>June 12, 2018</span></li>
													<li>Due date: <span>August 25, 2018</span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-9 m-b-20">
											<h5>Request Order by:</h5>
				 							<ul class="list-unstyled">
												<li><h5><strong>Agnes Kioko</strong></h5></li>
                        <li><a href="#">agnesss@example.com</a></li>
												<li><span>Human Resource</span></li>
												<li>Manager</li>
												<li>888-777-6655</li>
	                     </ul>
										</div>
										<div class="col-md-6 col-lg-3 m-b-20">
											<span class="text-muted">Payment Details:</span>
											<ul class="list-unstyled invoice-payment-details">
												<li><h5>Total Due: <span class="text-right">$8,750</span></h5></li>
												<li>Bank name: <span>Kenya Commercial Bank</span></li>
												<li>Country: <span>Kenya</span></li>
												<li>City: <span>Nairobi</span></li>
												<li>Address: <span>Kencom</span></li>
												<li>Acc No: <span>KFH37784028476740</span></li>
											</ul>
										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-striped table-hover">
											<thead>
												<tr>
													<th>#</th>
													<th>ITEM</th>
													<th class="hidden-xs">DESCRIPTION</th>
													<th>UNIT COST</th>
													<th>QUANTITY</th>
													<th>TOTAL</th>
												</tr>
											</thead>
											<tbody>


												<tr>
													<td>1</td>
													<td>Branded T-Shirts</td>
													<td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
													<td>$90</td>
													<td>3</td>
													<td>$270</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Notebooks</td>
													<td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
													<td>$1200</td>
													<td>2</td>
													<td>$2400</td>
												</tr>
											
											</tbody>
										</table>
									</div>
									<div>
										<div class="row invoice-payment">
											<div class="col-sm-7">
											</div>
											<div class="col-sm-5">
												<div class="m-b-20">
													<h6>Total due</h6>
													<div class="table-responsive no-border">
														<table class="table m-b-0">
															<tbody>
																<tr>
																	<th>Subtotal:</th>
																	<td class="text-right">$7,000</td>
																</tr>
																<tr>
																	<th>Tax: <span class="text-regular">(25%)</span></th>
																	<td class="text-right">$1,750</td>
																</tr>
																<tr>
																	<th>Total:</th>
																	<td class="text-right text-primary"><h5>$8,750</h5></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<div class="invoice-info">
											<h5>Other information</h5>
											<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero, eu finibus sapien interdum vel</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>

                <?php
                  include('footer.php');
                ?>
