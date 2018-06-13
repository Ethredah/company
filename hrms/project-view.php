
  <?php
    include("header.php");
  ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-8">
							<h4 class="page-title">Sales Training</h4>
						</div>
						<div class="col-sm-4 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#edit_project"><i class="fa fa-plus"></i> Edit Project</a>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-9">
							<div class="panel">
								<div class="panel-body">
									<div class="project-title">
										<h5 class="panel-title">Sales Training</h5>
										<small class="block text-ellipsis m-b-15"><span class="text-xs">2</span> <span class="text-muted">open tasks, </span><span class="text-xs">5</span> <span class="text-muted">tasks completed</span></small>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum at. </p>
									</div>
							</div>



							<div class="project-task">
								<div class="tabbable">
									<ul class="nav nav-tabs nav-tabs-top nav-justified m-b-0">
										<li class="active"><a href="#all_tasks" data-toggle="tab" aria-expanded="true">All Tasks</a></li>
										<li><a href="#pending_tasks" data-toggle="tab" aria-expanded="false">Pending Tasks</a></li>
										<li><a href="#completed_tasks" data-toggle="tab" aria-expanded="false">Completed Tasks</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="all_tasks">
											<div class="task-wrapper">
												<div class="task-list-container">
													<div class="task-list-body">
														<ul id="task-list">

															<li class="task">
																<div class="task-container">
																	<span class="task-action-btn task-check">
																		<span class="action-circle large complete-btn" title="Mark Complete">
																			<i class="material-icons">check</i>
																		</span>
																	</span>
																	<span class="task-label" contenteditable="true">Develop Training Program</span>
																	<span class="task-action-btn task-btn-right">
																		<span class="action-circle large" title="Assign">
																			<i class="material-icons">person_add</i>
																		</span>
																		<span class="action-circle large delete-btn" title="Delete Task">
																			<i class="material-icons">delete</i>
																		</span>
																	</span>
																</div>
															</li>
														</ul>
													</div>
													<div class="task-list-footer">
														<div class="new-task-wrapper">
															<textarea  id="new-task" placeholder="Enter new task here. . ."></textarea>
															<span class="error-message hidden">You need to enter a task first</span>
															<span class="add-new-task-btn btn" id="add-task">Add Task</span>
															<span class="cancel-btn btn" id="close-task-panel">Close</span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="pending_tasks"></div>
										<div class="tab-pane" id="completed_tasks"></div>
									</div>
								</div>
							</div>


						</div>
						<div class="col-lg-3">
							<div class="panel">
								<div class="panel-body">
									<h6 class="panel-title m-b-15">Project details</h6>
									<table class="table table-striped table-border">
										<tbody>
											<tr>
												<td>Cost:</td>
												<td class="text-right">$1200</td>
											</tr>
											<tr>
												<td>Days:</td>
												<td class="text-right">14</td>
											</tr>
											<tr>
												<td>Start Date:</td>
												<td class="text-right">25 Jul, 2018</td>
											</tr>
											<tr>
												<td>Deadline:</td>
												<td class="text-right">12 Aug, 2018</td>
											</tr>
											<tr>
												<td>Priority:</td>
												<td class="text-right">
													<div class="btn-group">
														<a class="label label-danger dropdown-toggle" data-toggle="dropdown">High</a>
													</div>
												</td>
											</tr>
											<tr>
												<td>Created by:</td>
												<td class="text-right">Barry Cuda</td>
											</tr>
											<tr>
												<td>Status:</td>
												<td class="text-right">Open</td>
											</tr>
										</tbody>
									</table>
									<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
									<div class="progress progress-xs m-b-0">
										<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
									</div>
								</div>
							</div>

							<div class="panel project-user">
								<div class="panel-heading">
									<h6 class="panel-title">Assigned users <a class="pull-right btn btn-primary btn-xs" data-toggle="modal" data-target="#assign_user"><i class="fa fa-plus"></i> Add</a></h6>
								</div>
								<div class="panel-body">
									<ul class="list-box">
										<li>
											<a href="profile.html">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar">J</span>
													</div>
													<div class="list-body">
														<span class="message-author">John Doe</span>
														<div class="clearfix"></div>
														<span class="message-content">Web Designer</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="profile.html">
												<div class="list-item">
													<div class="list-left">
														<span class="avatar">V</span>
													</div>
													<div class="list-body">
														<span class="message-author">Richard Miles</span>
														<div class="clearfix"></div>
														<span class="message-content">Web Developer</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
                </div>
				<div class="notification-box">
					<div class="msg-sidebar notifications msg-noti">
						<div class="topnav-dropdown-header">
							<span>Messages</span>
						</div>
						<div class="drop-scroll msg-list-scroll">
							<ul class="list-box">
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author">Richard Miles </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item new-message">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">John Doe</span>
												<span class="message-time">1 Aug</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Tarah Shropshire </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Mike Litorus</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Catherine Manseau </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">D</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Domenic Houston </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">B</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Buster Wigton </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">R</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Rolland Webber </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">C</span>
											</div>
											<div class="list-body">
												<span class="message-author"> Claire Mapes </span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">M</span>
											</div>
											<div class="list-body">
												<span class="message-author">Melita Faucher</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">J</span>
											</div>
											<div class="list-body">
												<span class="message-author">Jeffery Lalor</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">L</span>
											</div>
											<div class="list-body">
												<span class="message-author">Loren Gatlin</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">T</span>
											</div>
											<div class="list-body">
												<span class="message-author">Tarah Shropshire</span>
												<span class="message-time">12:28 AM</span>
												<div class="clearfix"></div>
												<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer">
							<a href="chat.html">See all messages</a>
						</div>
					</div>
				</div>
            </div>


			<div id="assign_user" class="modal custom-modal fade center-modal" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title">Assign a user to this project</h3>
						</div>
						<div class="modal-body">
							<div class="input-group m-b-30">
								<input placeholder="Enter user email" class="form-control search-input input-lg" id="btn-input" type="text">
								<span class="input-group-btn">
									<button class="btn btn-primary btn-lg">Add</button>
								</span>
							</div>

						</div>
					</div>
				</div>
			</div>

      <div id="edit_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Edit Project</h4>
						</div>
						<div class="modal-body">
							<form action="" method="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Project Name</label>
											<input class="form-control" value="School Guru" type="text" name="project_name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Client</label>
											<select class="select" name="client">
												<option>Global Technologies</option>
												<option>Delta Infotech</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Start Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" value="2018-06-13" type="text" name="start_date"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>End Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" style="" value="2018-06-25" type="text" name="end_date"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Price</label>
											<input placeholder="Ksh" class="form-control" value="$5000" type="text" name="price">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Priority</label>
											<select class="select" name="priority">
												<option selected>High</option>
												<option>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label>Description</label>
									<textarea rows="4" cols="5" class="form-control" placeholder="Enter Project Description here" name="description"></textarea>
								</div>

								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Save Changes</button>
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
