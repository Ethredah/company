
      <?php
        include('header.php');

    ?>


            <div class="page-wrapper">
				<div class="chat-main-row">
					<div class="chat-main-wrapper">
						<div class="col-xs-7 message-view task-view">
							<div class="chat-window">
								<div class="chat-header">
									<div class="navbar">
										<div class="pull-left">
											<div class="add-task-btn-wrapper">
												<span class="add-task-btn btn btn-default btn-xs">
													Add Task
												</span>
											</div>
										</div>
										<ul class="nav navbar-nav pull-right chat-menu">
											<li class="dropdown">
												<a href="" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cog"></i></a>
												<ul class="dropdown-menu">
													<li><a href="javascript:void(0)">Pending Tasks</a></li>
													<li><a href="javascript:void(0)">Completed Tasks</a></li>
													<li><a href="javascript:void(0)">All Tasks</a></li>
												</ul>
											</li>
										</ul>
										<a class="task-chat profile-rightbar pull-right" href="#task_window"><i class="fa fa fa-comment"></i></a>
									</div>
								</div>
								<div class="chat-contents">
									<div class="chat-content-wrap">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="task-wrapper">
													<div class="task-list-container">
														<div class="task-list-body">
															<ul id="task-list">
																<!-- <li class=" complete task">

																</li> -->


																<li class="task">
																	<div class="task-container">
																		<span class="task-action-btn task-check">
																			<span class="action-circle large complete-btn" title="Mark Complete">
																				<i class="material-icons">check</i>
																			</span>
																		</span>
																		<span class="task-label" contenteditable="false">Sample Task
                                    </span>

																		<span class="task-action-btn task-btn-right">
																			<span class="action-circle large" title="someone@example.com">
																				<i class="material-icons">person</i>
																			</span>
																			<span class="action-circle large delete-btn" id="" title="Delete Task">
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
												<div class="notification-popup hide">
													<p>
														<span class="task"></span>
														<span class="notification-text"></span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xs-5 message-view task-chat-view" id="task_window">
							<div class="chat-window">

								<div class="chat-contents task-chat-contents">
									<div class="chat-content-wrap">
										<div class="chat-wrap-inner">
											<div class="chat-box">
												<div class="chats">
													<h5>Activities</h5>
													<hr class="task-line" />
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">created task</span></span>
														<div class="task-time">Jan 26, 2015</div>
													</div>
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">added to Harvey Clinic</span></span>
														<div class="task-time">Jan 26, 2015</div>
													</div>
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">Lesley Grauer</a> <span class="task-info-subject">assigned to John Doe</span></span>
														<div class="task-time">Jan 26, 2015</div>
													</div>
													<hr class="task-line" />
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">changed the due date to Sep 28</span> </span>
														<div class="task-time">9:09pm</div>
													</div>
													<div class="task-information">
														<span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">assigned to you</span></span>
														<div class="task-time">9:10pm</div>
													</div>
													<div class="chat chat-left">


													</div>
													<div class="completed-task-msg"><span class="task-success"><a href="#">John Doe</a> completed this task.</span> <span class="task-time">Today at 9:27am</span></div>



													<div class="task-information"><span class="task-info-line"><a class="task-user" href="#">John Doe</a> <span class="task-info-subject">marked task as incomplete</span></span><div class="task-time">1:16pm</div></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-footer">
                  <h5>Assign Task To :</h5>
									<div class="message-bar">
										<div class="message-inner">
											<a class="link attach-icon" data-target="#drag_files">  <img src="../../assets/img/user.jpg" class="avatar" alt="" height="15" width="15"></a>
                      <form action="functions/assign-task.php" method="post">
                      <input class="form-control" type="email" placeholder="Assignee Email" name="assigned" required style="width:60%;"/>
											<div class="message-area"><div class="input-group">
                        <textarea class="form-control" placeholder="Enter Task Here..." id="new-task" name="new-task" required></textarea>
												<span class="input-group-btn">
													<button class="btn btn-custom" type="submit"><i class="material-icons">add</i></button>
												</span>
												</div>
											</div>
                    </form>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>





            </div>
        </div>
		<div class="task-overlay" data-reff="#task_window"></div>

		<script type="text/template" id="task-template">
			<li class="task">
				<div class="task-container">
					<span class="task-action-btn task-check">
						<span class="action-circle large complete-btn" title="Mark Complete">
							<i class="material-icons">check</i>
						</span>
					</span>
					<span class="task-label" contenteditable="true"></span>
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
		</script>

    <?php
      include("footer.php");
    ?>
