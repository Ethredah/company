
  <?
    include ('header.php');
  ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Projects</h4>
						</div>
						<div class="col-xs-8 text-right m-b-30">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#create_project"><i class="fa fa-plus"></i> Create Project</a>
							<div class="view-icons">
                <a href="projects.php" class="grid-view btn btn-link active"><i class="material-icons" title="Home">home</i></a>
								<a href="project-list.php" class="list-view btn btn-link"><i class="material-icons" title="List">apps</i></a>
							</div>
						</div>
					</div>



					<div class="row">
						<div class="col-lg-3 col-sm-4">
							<div class="card-box project-box">

								<h4 class="project-title"><a href="project-view.php">Sales Training</a></h4>
								<small class="block text-ellipsis m-b-15">
									<span class="text-xs">1</span> <span class="text-muted">open tasks, </span>
									<span class="text-xs">9</span> <span class="text-muted">tasks completed</span>
								</small>
								<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and
									typesetting industry. When an unknown printer took a galley of type and
									scrambled it...
								</p>
								<div class="pro-deadline m-b-15">
									<div class="sub-title">
										Deadline:
									</div>
									<div class="text-muted">
										8 Sep 2017
									</div>
								</div>

								<div class="project-members m-b-15">
									<div>Team :</div>
									<ul class="team-members">
										<li>
											<a href="#" data-toggle="tooltip" title="John Doe"><img src="../assets/img/user.jpg" alt="John Doe"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Richard Miles"><img src="../assets/img/user.jpg" alt="Richard Miles"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="John Smith"><img src="../assets/img/user.jpg" alt="John Smith"></a>
										</li>
										<li>
											<a href="#" data-toggle="tooltip" title="Mike Litorus"><img src="../assets/img/user.jpg" alt="Mike Litorus"></a>
										</li>
										<li>
											<a href="#" class="all-users">+15</a>
										</li>
									</ul>
								</div>
								<p class="m-b-5">Progress <span class="text-success pull-right">40%</span></p>
								<div class="progress progress-xs m-b-0">
									<div class="progress-bar progress-bar-success" role="progressbar" data-toggle="tooltip" title="40%" style="width: 40%"></div>
								</div>
							</div>
						</div>


					</div>
        </div>

      </div>

			<div id="create_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Create Project</h4>
						</div>
						<div class="modal-body">
							<form action="" method="">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Project Name</label>
											<input class="form-control" type="text" name="project_name">
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
											<div class="cal-icon"><input class="form-control datetimepicker" type="text" name="start_date"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>End Date</label>
											<div class="cal-icon"><input class="form-control datetimepicker" style="" type="text" name="end_date"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Price</label>
											<input placeholder="Ksh" class="form-control" type="text" name="price">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Priority</label>
											<select class="select" name="priority">
												<option>High</option>
												<option>Medium</option>
												<option>Low</option>
											</select>
										</div>
									</div>
                  <div class="col-md-3">
										<div class="form-group">
											<label>Status</label>
											<select class="select" name="status">
												<option>New</option>
												<option>Open</option>
												<option>Complete</option>
                        <option>Canceled</option>
											</select>
										</div>
									</div>
								</div>


								<div class="form-group">
									<label>Description</label>
									<textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter project description here" name="description"></textarea>
								</div>

								<div class="m-t-20 text-center">
									<button class="btn btn-primary">Create Project</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>


			<div id="delete_project" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Project</h4>
						</div>
						<div class="modal-body card-box">
							<p>Are you sure want to delete this?</p>
							<div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
								<button type="submit" class="btn btn-danger">Delete</button>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>

        <?
          include("footer.php");
        ?>

        <script>
		$(document).ready(function(){
			$('.summernote').summernote({
				height: 200,                 // set editor height
				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor
				focus: false                 // set focus to editable area after initializing summernote
			});
		});
        </script>
