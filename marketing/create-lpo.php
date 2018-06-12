

      <?php
        include('header.php');
    ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">LIMITED PURCHASE ORDER REQUEST FORM</h4>
						</div>
            <div class="col-sm-4" style="float:right;">
              <div class="dash-widget clearfix card-box">
              <h4 class="page-title"> LPO Number : <b style="color:orange;">
              #LPO10002
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
											<label>Department </label>
											<input class="form-control" type="text" name="department" value="Marketing" disabled>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label>Requisitioned By </label>
											<input class="form-control" type="text" name="project" value="Agness Kioko" disabled>
										</div>
									</div>

									<div class="col-sm-3">
										<div class="form-group">
											<label>Request Date <span class="text-danger">*</span></label>
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
														<th> </th>
													</tr>
												</thead>
												<tbody>
												<tr>
													<td>
														<input class="form-control" type="text" style="min-width:150px" name="item" required>
													</td>
													<td>
														<input class="form-control" type="text" style="min-width:150px" name="description">
													</td>
													<td>
														<input class="form-control" style="width:100px" type="text" name="unitcost" required>
													</td>
													<td>
														<input class="form-control" style="width:80px" type="int" name="qty">
													</td>
													<td>
														<input class="form-control" readonly="" style="width:120px" type="text" name="amount">
													</td>
													<!-- <td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td> -->
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
                      <br>
                      <div class="row">
  											<div class="col-md-6">
  												<div class="form-group">
  													<label>Signed By : _____________________________________</label>
                          </div>
                        </div>
                        <div class="col-md-6">
  												<div class="form-group">
  													<label>Received And Aproved : _____________________________________</label>
                          </div>
                        </div>
										</div>

								</div>
								<button class="btn btn-primary" type="submit" name="send">Save & Download</button>
							</form>
						</div>
					</div>
				</div>

			</div>
        </div>

        <?php
          include('footer.php');
        ?>
