




        <?php
          include ('header.php');
        ?>





            <div class="page-wrapper">
                <div class="content container-fluid">

                  <div class="row">
        						<div class="col-xs-4">
        							<h4 class="page-title">Merchants</h4>
        						</div>

        					</div>

					<div class="row">
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>2,578</h3>
									<span>Merchants</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>40,503</h3>
									<span>Transactions</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
								<div class="dash-widget-info">
									<h3>$56,785</h3>
									<span>Company Commision</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-lg-3">
							<div class="dash-widget clearfix card-box">
								<span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<div class="dash-widget-info">
									<h3>$27,000</h3>
									<span>Advances</span>
								</div>
							</div>
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
                            <li><a href="#" data-toggle="modal" data-target="#"><i class="fa fa-pencil m-r-5" style="color:red;"></i> Flag</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>

                    <tr>
                      <td>James Mureithi</td>
                      <td>PB01278K376Q</td>
                      <td>Transfer</td>
                      <td>2018-04-18</td>
                      <td>
                        <div class="dropdown">
                          <a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false">530 </a>

                        </div>
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                          <ul class="dropdown-menu pull-right">
                            <li><a href="#" data-toggle="modal" data-target="#"><i class="fa fa-pencil m-r-5" style="color:red;"></i> Flag</a></li>
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
