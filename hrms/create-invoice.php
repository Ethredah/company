
      <?php
        include('header.php');
    ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Create Invoice</h4>
						</div>
            <div class="col-sm-4" style="float:right;">
              <div class="dash-widget clearfix card-box">
              <h4 class="page-title"> Invoice Number : <b style="color:orange;">
              #INV10002
            </b>
            </h4>
          </div>
            </div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form action="#" method="post">
								<div class="row">
                  <input type="hidden" name="inumber" value="#INV10002" />
									<div class="col-sm-3">
										<div class="form-group">
											<label>Client <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="client" required>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Project <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="project" required>
										</div>
									</div>

									<div class="col-sm-3">
										<div class="form-group">
											<label>Client Address</label>
											<textarea class="form-control" rows="3" name="clientaddress" required></textarea>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Billing Address</label>
											<textarea class="form-control" rows="3" name="billingaddress" required></textarea>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Invoice date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="invoicedate" required></div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Due Date <span class="text-danger">*</span></label>
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="duedate" required></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="table-responsive">
											<table class="table table-hover table-white">
												<thead>
													<tr>
														<th class="col-sm-2">Item</th>
														<th class="col-md-6">Description</th>
														<th style="width:100px;">Unit Cost</th>
														<th style="width:80px;">Qty</th>
														<th>Amount</th>
														<th> <a href="javascript:void(0);" class="add_button" title="Add field"><i class="small material-icons">add</i></a> </th>
													</tr>
												</thead>
												<tbody class="field_wrapper">
												<tr>
													<td>
														<input class="form-control" type="text" style="min-width:150px" name="item" required>
													</td>
													<td>
														<input class="form-control" type="text" style="min-width:150px" name="description">
													</td>
													<td>
														<input class="form-control" style="width:100px" type="text" name="unitcost" id="unitcost" value="" required>
													</td>
													<td>
														<input class="form-control" style="width:80px" type="int" name="qty" value="" id="qty">
													</td>
													<td>
                          Ksh.  <b class="amount"></b>
													</td>
													<!-- <td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td> -->
                          <!-- <td><a href="javascript:void(0);" class="remove_button" title="Remove"><i class="small material-icons">clear</i></a></td> -->
												</tr>

												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table table-hover table-white">
												<tbody>

													<tr>
														<td colspan="5" style="text-align: right; font-weight: bold">
															Grand Total
														</td>
														<td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
															$ 0.00
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Other Information</label>
													<textarea class="form-control" name="other"></textarea>
												</div>
											</div>
										</div>
									</div>
								</div>
								<button class="btn btn-primary" type="submit" name="send">Save & Send</button>
							</form>
						</div>
					</div>
				</div>

			</div>
        </div>

        <?php
          include('footer.php');
        ?>


        <script type="text/javascript">
        $(document).ready(function(){
        var maxField = 150; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<tr><td><input class="form-control" type="text" style="min-width:150px" name="item" required></td><td><input class="form-control" type="text" style="min-width:150px" name="description"></td><td><input class="form-control" style="width:100px" type="text" name="unitcost" id="unitcost" required></td><td><input class="form-control" style="width:80px" type="int" name="qty" id="qty"></td><td>Ksh.  <b class="amount"></b></td><td><a href="javascript:void(0);" class="remove_button" title="Remove"><i class="small material-icons">clear</i></a></td></tr>'; //New input field html
        var x = 1; //Initial field counter is 1
        //Once add button is clicked
        $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
        });

        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).closest('tr').remove(); //Remove field html
        x--; //Decrement field counter
        });

        //calc Amount
        $("#qty").on('keyup',function(e){
          e.preventDefault();
        var totalcost= $("#unitcost").val() * $(this).val()
        $(".amount").html(totalcost);
      })

        });
        </script>
