

  <?php
    include("header.php");
  ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-8">
							<h4 class="page-title">Tickets</h4>
						</div>
						<div class="col-xs-4 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_ticket"><i class="fa fa-plus"></i> Add New Ticket</a>
						</div>
					</div>


					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0 " id="searchtable">
									<thead>
										<tr>
											<th>Ticket Id</th>
											<th>Ticket Subject</th>
											<th>Assigned Staff</th>
											<th>Created Date</th>
											<th>Last Reply</th>
											<th>Priority</th>
											<th class="text-center">Status</th>
											<th class="text-right">Actions</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><a href="ticket-view.php">#TKT-0001</a></td>
											<td>Laptop Issue</td>
											<td>John Smith</td>
											<td>5 May 2017 07:21 AM</td>
											<td>5 May 2017 11.12 AM</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-danger"></i> High <i class="caret"></i></a>
													<ul class="dropdown-menu">
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> High</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-warning"></i> Medium</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Low</a></li>
													</ul>
												</div>
											</td>
											<td class="text-center">
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
														<i class="fa fa-dot-circle-o text-danger"></i> New <i class="caret"></i>
													</a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-dot-circle-o text-info"></i> Open</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-info"></i> Reopened</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> On Hold</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Closed</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> In Progress</a></li>
														<li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Cancelled</a></li>
													</ul>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" title="Edit" data-toggle="modal" data-target="#edit_ticket"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" title="Delete" data-toggle="modal" data-target="#delete_ticket"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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

			<div id="delete_ticket" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Ticket</h4>
						</div>
						<form>
							<div class="modal-body card-box">
								<p>Are you sure want to delete this ticket?</p>
								<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
									<button type="submit" class="btn btn-danger">Delete</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="add_ticket" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add New Ticket</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Ticket Subject</label>
											<input class="form-control" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Ticket Id</label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Assign Staff</label>
											<select class="select">
												<option>-</option>
												<option>Mike Litorus</option>
												<option>John Smith</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Client</label>
											<select class="select">
												<option>-</option>
												<option>Delta Infotech</option>
												<option>International Software Inc</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select">
												<option>High</option>
												<option>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>CC</label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Assign</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Ticket Assignee</label>
											<div class="project-members">
												<a title="John Smith" data-placement="top" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="John Smith" class="avatar" src="assets/img/user.jpg">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Followers</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Ticket Followers</label>
											<div class="project-members">
												<a title="Richard Miles" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="Richard Miles" class="avatar" src="assets/img/user.jpg">
												</a>
												<a title="John Smith" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="John Smith" class="avatar" src="assets/img/user.jpg">
												</a>
												<a title="Mike Litorus" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="Mike Litorus" class="avatar" src="assets/img/user.jpg">
												</a>
												<a title="Wilmer Deluna" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="Wilmer Deluna" class="avatar" src="assets/img/user.jpg">
												</a>
												<span class="all-team">+2</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label>Upload Files</label>
											<input class="form-control" type="file">
										</div>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Ticket</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="edit_ticket" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Ticket</h4>
						</div>
						<div class="modal-body">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Ticket Subject</label>
											<input class="form-control" type="text" value="Laptop Issue">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Ticket Id</label>
											<input class="form-control" type="text" readonly="" value="TKT-0001">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Assign Staff</label>
											<select class="select">
												<option>-</option>
												<option selected>Mike Litorus</option>
												<option>John Smith</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Client</label>
											<select class="select">
												<option>-</option>
												<option >Delta Infotech</option>
												<option selected>International Software Inc</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select">
												<option>High</option>
												<option selected>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>CC</label>
											<input class="form-control" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Assign</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Ticket Assignee</label>
											<div class="project-members">
												<a title="John Smith" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="John Smith" class="avatar" src="assets/img/user.jpg">
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Add Followers</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Ticket Followers</label>
											<div class="project-members">
												<a title="Richard Miles" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="Richard Miles" class="avatar" src="assets/img/user.jpg">
												</a>
												<a title="John Smith" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="John Smith" class="avatar" src="assets/img/user.jpg">
												</a>
												<a title="Mike Litorus" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="Mike Litorus" class="avatar" src="assets/img/user.jpg">
												</a>
												<a title="Wilmer Deluna" data-toggle="tooltip" href="#">
													<img width="20" height="20" alt="Wilmer Deluna" class="avatar" src="assets/img/user.jpg">
												</a>
												<span class="all-team">+2</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control"></textarea>
										</div>
										<div class="form-group">
											<label>Upload Files</label>
											<input class="form-control" type="file">
										</div>
									</div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Edit Ticket</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>

            <?php
              include("footer.php");
        ?>
