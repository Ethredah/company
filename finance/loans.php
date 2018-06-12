
    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-8">
							<h4 class="page-title">Pikash Loans</h4>
						</div>

					</div>
					<div class="row filter-row">
                           <div class="col-sm-3 col-md-2 col-xs-6">
								<div class="form-group form-focus">
									<label class="control-label"> Names</label>
									<input type="text" class="form-control floating" />
								</div>
                           </div>
                           <div class="col-sm-3 col-md-2 col-xs-6">
								<div class="form-group form-focus select-focus">
									<label class="control-label">Loan Type</label>
									<select class="select floating">
										<option value=""> -- Select -- </option>
										<option value="">User Loans</option>
										<option value="">Agent Loans</option>
										<option value="">Merchant Loans</option>
									</select>
								</div>
                           </div>
                           <div class="col-sm-3 col-md-2 col-xs-6">
								<div class="form-group form-focus select-focus">
									<label class="control-label">Loan Status</label>
									<select class="select floating">
										<option value=""> -- Select -- </option>
										<option value=""> Paid </option>
										<option value=""> Unpaid </option>
										<option value=""> Partially Paid </option>
									</select>
								</div>
                           </div>
						   <div class="col-sm-3 col-md-2 col-xs-6">
								<div class="form-group form-focus">
									<label class="control-label">From</label>
									<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
								</div>
							</div>
						   <div class="col-sm-3 col-md-2 col-xs-6">
								<div class="form-group form-focus">
									<label class="control-label">To</label>
									<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
								</div>
							</div>
                           <div class="col-sm-3 col-md-2 col-xs-6">
                                <a href="#" class="btn btn-success btn-block"> Search </a>
                           </div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0 datatable">
									<thead>
										<tr>
											<th>Names</th>
											<th>Date</th>
											<th>Amount($)</th>
											<th>Reason</th>
                      <th>Days Due</th>
											<th class="text-center">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<a class="avatar">R</a>
												<h2><a href="#">Richard Miles <span>User</span></a></h2>
											</td>
											<td>8 Aug 2017</td>
											<td>245</td>
											<td>Hospital Emergency</td>
                      <td>0</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" aria-expanded="false" style="border-color:green;">
														<i class="fa fa-dot-circle-o text-purple"></i> Paid
													</a>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Flag</a></li>
														<li><a href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>

                    <tr>
											<td>
												<a class="avatar">J</a>
												<h2><a href="#">James Muller <span>Agent</span></a></h2>
											</td>
											<td>4 May 2018</td>
											<td>600</td>
											<td>Float Top-Up</td>
                      <td>3</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" aria-expanded="false" style="border-color:red;">
														<i class="fa fa-dot-circle-o text-purple"></i> UnPaid
													</a>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Flag</a></li>
														<li><a href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>

                    <tr>
											<td>
												<a class="avatar">E</a>
												<h2><a href="#">Emil Junes <span>User</span></a></h2>
											</td>
											<td>16 July 2018</td>
											<td>3,450</td>
											<td>Hospital Emergency</td>
                      <td>0</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" aria-expanded="false" style="border-color:yellow;">
														<i class="fa fa-dot-circle-o text-purple"></i>Partially Paid
													</a>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" title="Edit" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Flag</a></li>
														<li><a href="#" title="Decline" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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


        <!------>



  <!-- <div id="delete_approve" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Decline Leave Request</h4>
        </div>
        <form>
          <div class="modal-body card-box">
            <p>Are you sure want to declined this leave request?</p>
            <div class="m-t-20 text-left">
              <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
              <button type="submit" class="btn btn-danger">Decline</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div> -->


        <!------->


        <?php
          include('footer.php');
        ?>
