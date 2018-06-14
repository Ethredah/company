
<?php
  include('header.php');
?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Invoice</h4>
						</div>
						<div class="col-sm-4 text-right m-b-30">
							<div class="btn-group btn-group-sm">
								<!-- <button class="btn btn-default">CSV</button> -->
								<button class="btn btn-default" id="pdf" >PDF</button>
								<button class="btn btn-default" id="print"><i class="fa fa-print fa-lg"></i> Print</button>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel" id="invoice_content">
								<div class="panel-body">
									<div class="row">
										<div class="col-md-6 m-b-20">
											<img src="../assets/img/logo2.png" class="m-b-20" style="width: 100px;">
				 							<ul class="list-unstyled">
												<li>Poraeh Investments </li>
												<li>3864 Quiet Valley Lane,</li>
												<li>Kilimani, Nairobi, 91403</li>
											</ul>
										</div>
										<div class="col-md-6 m-b-20">
											<div class="invoice-details">
												<h3 class="text-uppercase">Invoice #INV-0001</h3>
												<ul class="list-unstyled">
													<li>Date: <span>June 12, 2018</span></li>
													<li>Due date: <span>August 25, 2018</span></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-lg-9 m-b-20">
											<h5>Invoice to:</h5>
				 							<ul class="list-unstyled">
												<li><h5><strong>James Maina</strong></h5></li>
												<li><span>Global Technologies</span></li>
												<li>5754 Airport Rd</li>
												<li>Coosada, AL, 36020</li>
												<li>Nairobi</li>
												<li>888-777-6655</li>
												<li><a href="#">mainajames@example.com</a></li>
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
													<td>Android Application</td>
													<td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
													<td>$1000</td>
													<td>2</td>
													<td>$2000</td>
												</tr>
												<tr>
													<td>2</td>
													<td>Ios Application</td>
													<td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
													<td>$1750</td>
													<td>1</td>
													<td>$1750</td>
												</tr>
												<tr>
													<td>3</td>
													<td>Codeigniter Project</td>
													<td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
													<td>$90</td>
													<td>3</td>
													<td>$270</td>
												</tr>
												<tr>
													<td>4</td>
													<td>Phonegap Project</td>
													<td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
													<td>$1200</td>
													<td>2</td>
													<td>$2400</td>
												</tr>
												<tr>
													<td>5</td>
													<td>Website Optimization</td>
													<td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
													<td>$200</td>
													<td>2</td>
													<td>$400</td>
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
              <div id="editor"></div>
						</div>
					</div>
        </div>

                <?php
                  include('footer.php');
                ?>

                <!-- INVOICE SCRIPT -->

                <script>
                 $(document).ready(function() {

                   // PRINT
                   function printData()
                 {
                   var divToPrint=document.getElementById("invoice_content");
                    var myStyle = '<link rel="stylesheet" type="text/css" href="../assets/css/style.css">, <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">';
                    newWin= window.open("");
                    newWin.document.write(myStyle + divToPrint.outerHTML);
                    newWin.print();
                    newWin.close();
                 }

                 $('#print').on('click',function(){
                 printData();
               })
               });
                </script>

                <!--- END INVOICE SCRIPT -->


                <script>
                var doc = new jsPDF();
                var specialElementHandlers = {
                '#editor': function (element, renderer) {
                return true;
                }
                };

                $(document).ready(function() {
                $('#pdf').click(function () {
                doc.fromHTML($('#invoice_content').html(), 15, 15, {
                'width': 170,
                'elementHandlers': specialElementHandlers
                });
                doc.save('invoice.pdf');
                });
                });

                </script>
