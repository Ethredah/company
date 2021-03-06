

        <?php
          include('header.php');
        ?>




            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8 col-xs-6">
							<h4 class="page-title">Events</h4>

						</div>

						<div class="col-sm-4 col-xs-6 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#add_event"><i class="fa fa-plus"></i> Add Event</a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="card-box m-b-0">
								<div class="row">
									<div class="col-md-12">
										<div id="calendar"></div>
									</div>
								</div>
							</div>
							<!-- BEGIN MODAL -->
							<div class="modal custom-modal fade none-border" id="event-modal">
								<div class="modal-dialog">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<div class="modal-content modal-md">
										<div class="modal-header">
											<h4 class="modal-title">Add New Event</h4>
										</div>
										<div class="modal-body"></div>
										<div class="modal-footer text-center">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-success save-event">Create event</button>
											<button type="button" class="btn btn-danger delete-event" data-dismiss="modal">Delete</button>
										</div>
									</div>
								</div>
							</div>
							<!-- Modal Add Category -->
							<div class="modal fade none-border" id="add-category">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Add a category</h4>
										</div>
										<div class="modal-body p-20">
											<form>
												<div class="row">
													<div class="col-md-6">
														<label class="control-label">Category Name</label>
														<input class="form-control" placeholder="Enter name" type="text" name="category-name"/>
													</div>
													<div class="col-md-6">
														<label class="control-label">Choose Priority of Event</label>
														<select class="form-control" data-placeholder="Choose a color..." name="priority">
															<option value="danger">High</option>
                              <option value="warning">Medium</option>
															<option value="info">Low</option>

															<!-- <option value="orange">Orange</option>
															<option value="brown">Brown</option>
															<option value="teal">Teal</option>
															<option value="inverse">Inverse</option> -->

														</select>
													</div>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-danger save-category" data-dismiss="modal">Save</button>
										</div>
									</div>
								</div>
							</div>
							<!-- END MODAL -->
						</div>
					</div>
                </div>




            </div>



            
			<div id="add_event" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Add Event</h4>
						</div>
						<div class="modal-body">
							<form action="functions/add-event.php" method="post">
								<div class="form-group">
									<label>Event Name <span class="text-danger">*</span></label>
									<input class="form-control" required="" name="name" type="text">
								</div>
                <div class="form-group">
									<label>Priority <span class="text-danger">*</span></label>
									<select class='select form-control' name='category'>
                  <option selected disabled>Choose event priority</option>
                    <option value='bg-danger'>High</option>
                    <option value='bg-warning'>Medium</option>
                    <option value='bg-info'>Low</option>
                  </select>
								</div>
								<div class="form-group">
									<label>From Date <span class="text-danger">*</span></label>
									<div class="cal-icon"><input class="form-control datetimepicker" name="fromdate" type="text"></div>
								</div>
                <div class="form-group">
									<label>To Date <span class="text-danger">*</span></label>
									<div class="cal-icon"><input class="form-control datetimepicker" name="todate" type="text"></div>
								</div>
								<div class="m-t-20 text-center">
									<button class="btn btn-primary" type="submit" name="create">Create Event</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


      <?php
        include('footer.php');
      ?>
