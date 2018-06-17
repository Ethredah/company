
    <?php
      include('header.php');
              ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-8">
							<h4 class="page-title">Leave Request</h4>
						</div>
						<div class="col-xs-4 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Request Leave</a>
						</div>
					</div>


					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0" id="searchtable">
									<thead>
										<tr>
											<th>Leave Type</th>
											<th>From</th>
											<th>To</th>
											<th>No of Days</th>
											<th>Reason</th>
											<th class="text-center">Status</th>

										</tr>
									</thead>
									<tbody>

										<tr>

                      <td>Medical Leave</td>
                      <td>2018-05-25</td>
                      <td>2018-06-02</td>
                      <td>11</td>
                      <td>Eye Check Up </td>
                      <td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded " aria-expanded="false">
														<i class="fa fa-dot-circle-o text-purple"></i> New
													</a>

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


  <div id="add_leave" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-content modal-md">
        <div class="modal-header">
          <h4 class="modal-title">Add Leave Request</h4>
        </div>
        <div class="modal-body">
          <form action="#" method="post">
            <div class="form-group">
              <label>Leave Type <span class="text-danger">*</span></label>
              <select class="select" autofocus name="type" required>
                <option selected disabled>--Select Leave Type--</option>
                <option value="Casual Leave">Casual Leave</option>
                <option value="Medical Leave">Medical Leave</option>
                <option value="Merternity Leave">Maternity Leave </option>
                <option value="Parternity Leave">Paternity Leave</option>
                <option value="Bereavement Leave">Bereavement Leave</option>
                <option value="Jury Leave">Jury Leave</option>
              </select>
            </div>
            <div class="form-group">
              <label>From <span class="text-danger">*</span></label>
              <div class="cal-icon"><input class="form-control datetimepicker" type="int" name="fromdate" required></div>
            </div>
            <div class="form-group">
              <label>To <span class="text-danger">*</span></label>
              <div class="cal-icon"><input class="form-control datetimepicker" type="int" name="todate" required></div>
            </div>
            <!-- <div class="form-group">
              <label>Number of days</label>
              <input class="form-control" readonly="" type="text">
            </div> -->
            <!-- <div class="form-group">
              <label>Remaining Leaves <span class="text-danger">*</span></label>
              <input class="form-control" readonly="" value="12" type="text">
            </div> -->
            <div class="form-group">
              <label>Leave Reason <span class="text-danger">*</span></label>
              <textarea rows="4" cols="5" class="form-control" name="reason" required></textarea>
            </div>
            <div class="m-t-20 text-center">
              <button class="btn btn-primary" name="send" id="send">Send Leave Request</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>



        <!------->


        <?php
          include('footer.php');
        ?>
