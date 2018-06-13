

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">
        <title>Admin - Procurement</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/plugins/morris/morris.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../assets/css/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-datetimepicker.min.css">

        <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
		<!--[if lt IE 9]>
			<script src="../assets/js/html5shiv.min.js"></script>
			<script src="../assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
        <div class="main-wrapper">

          <!----START OF HEADER AREA--->

            <div class="header">
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="../assets/img/logo.png" width="120" height="50" alt="">
					</a>
                </div>
                <div class="page-title-box pull-left">
					<h3><b>Poraeh Investments | Procurement Department</b> </h3>
                </div>
				<a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul class="nav navbar-nav navbar-right user-menu pull-right">
					<li class="dropdown hidden-xs">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span>Notifications</span>
							</div>
							<div class="drop-scroll">
								<ul class="media-list">
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">
													<img alt="John Doe" src="../assets/img/user.jpg" class="img-responsive img-circle">
												</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="m-0"><span class="notification-time">4 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="m-0"><span class="notification-time">6 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">L</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="m-0"><span class="notification-time">8 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">G</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="m-0"><span class="notification-time">12 mins ago</span></p>
											</div>
										</a>
									</li>
									<li class="media notification-message">
										<a href="activities.php">
											<div class="media-left">
												<span class="avatar">V</span>
											</div>
											<div class="media-body">
												<p class="m-0 noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="m-0"><span class="notification-time">2 days ago</span></p>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="activities.php">View all Notifications</a>
							</div>
						</div>
					</li>

          <li class="dropdown">


            <a href="profile.php" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">

              <span class="user-img"><img class="img-circle" src="../assets/img/user.jpg" width="40" alt="">
              <span class="status online"></span></span>
              <span>
              Richard Bills
              </span>
              <i class="caret"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a href="profile.php">My Profile</a></li>
              <li><a href="edit-profile.php">Edit Profile</a></li>
              <li><a href="settings.php">Settings</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
				</ul>
				<div class="dropdown mobile-user-menu pull-right">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<ul class="dropdown-menu pull-right">
						<li><a href="profile.php">My Profile</a></li>
						<li><a href="edit-profile.php">Edit Profile</a></li>
						<li><a href="settings.php">Settings</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>

      </div>

        <!----END OF HEADER AREA--->

            <!----START OF SIDEBAR AREA--->

            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
						<ul>
							<li class="active">
								<a href="index.php">Dashboard</a>
							</li>


							<li class="submenu">
								<a href="#"><span> Payroll </span> <span class="menu-arrow"></span></a>
								<ul class="list-unstyled" style="display: none;">
									<li><a href="salary.php"> My Salary </a></li>
                  <li><a href="bonuses.php"> Bonuses </a></li>
                  <li><a href="commission.php"> Commissions </a></li>
								</ul>
							</li>

              <li><a href="leaves.php">
                <span>Leave Requests</span></a>
              </li>

							<li>
								<a href="events.php">Events</a>
							</li>

              <li>
								<a href="request-orders.php">Request Orders</a>
							</li>

              <li>
                <a href="#" data-toggle="modal" data-target="#petty_cash">Request Petty Cash</a>
              </li>

              <li>
								<a href="invoices.php">Invoices</a>
							</li>

							<li>
								<a href="tasks.php">Tasks</a>
							</li>

              <hr>
              <li>
								<a href="logout.php">Logout</a>
							</li>

						</ul>
					</div>
        </div>
        </div>

            <!----END OF SIDEBAR AREA--->

            <!--- REQUEST PETTY CASH MODAL---->

                  <div id="petty_cash" class="modal custom-modal fade" role="dialog">
                    <div class="modal-dialog">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <div class="modal-content modal-md">
                        <div class="modal-header">
                          <h4 class="modal-title">Request For Petty Cash</h4>
                        </div>
                        <div class="modal-body">
                          <form action="#" method="post">
                            <div class="form-group">
                              <label>Amount <span class="text-danger">*</span></label>
                              <input class="form-control" required="" name="cash" type="text">
                            </div>

                            <div class="form-group">
                              <label>Reason <span class="text-danger">*</span></label>
                              <textarea class="form-control" name="reason"></textarea>
                            </div>

                            <div class="m-t-20 text-center">
                              <button class="btn btn-primary" type="submit" name="request">Request</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                <!--- REQUEST PETTY CASH MODAL---->
