

      <?php
        include('header.php');

    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">



					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Profile Details</h4>
						</div>

						<div class="col-sm-4 text-right m-b-30">
							<a href="edit-profile.php" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Edit Profile</a>
						</div>
					</div>
					<div class="card-box">
						<div class="row">
							<div class="col-md-12">
								<div class="profile-view">
									<div class="profile-img-wrap">
										<div class="profile-img">
											<img class="avatar" src="../assets/img/user.jpg" alt="">
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-5">
												<div class="profile-info-left">
													<h3 class="user-name m-t-0 m-b-0">Ethredah Chao</h3>
													<small class="text-muted">Product | Web Developer</small>
													<div class="staff-id">Employee ID : POR#100023</div>
													<div class="staff-msg"><a href="edit-profile.php?empid='.$row["empid"].'" class="btn btn-custom">Edit Profile</a></div>
												</div>
											</div>
											<div class="col-md-7">
												<ul class="personal-info">
													<li>
														<span class="title">Phone:</span>
														<span class="text"><a href="">07069456478</a></span>
													</li>
													<li>
														<span class="title">Email:</span>
														<span class="text"><a href="">ethredah@gmail.com</a></span>
													</li>
													<li>
														<span class="title">Birthday:</span>
														<span class="text">1923-17-10</span>
													</li>
													<li>
														<span class="title">Address:</span>
														<span class="text">Nairobi - Kenya</span>
													</li>
													<li>
														<span class="title">Gender:</span>
														<span class="text">Female</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">

						<div class="col-md-6">
							<div class="card-box">
								<h3 class="card-title">Employment Details</h3>
								<div class="experience-box">
									<ul class="experience-list">
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a class="name">Employed Since : </a>
													<div>2018-21-05</div>
													<span class="time">Probation</span>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
                      <div class="experience-content">
												<div class="timeline-content">
													<a class="name">Department : </a>
													<div>Product</div>
													<span class="time">Web Developer</span>
												</div>
											</div>
										</li>
                    <li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
                      <div class="experience-content">
												<div class="timeline-content">
													<a class="name">Status : </a>
													<div>On Probation</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
            </div>
              <div class="col-md-6">
							<div class="card-box">
								<h3 class="card-title">Payroll</h3>
								<div class="experience-box">
									<ul class="experience-list">
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a class="name">Basic Salary : <b style="color: #7b9c3e ">120,500</b></a>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a class="name">Medical Allowances :<b style="color: #3e9c6f ;"> 2500</b></a>
												</div>
											</div>
										</li>
										<li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a class="name">NHIF Deductions :<b style="color: #C70039 ;"> 250</b></a>
												</div>
											</div>
										</li>
                    <li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a class="name">NSSF Deductions :<b style="color: #C70039 ;"> 125</b></a>
												</div>
											</div>
										</li>
                    <li>
											<div class="experience-user">
												<div class="before-circle"></div>
											</div>
											<div class="experience-content">
												<div class="timeline-content">
													<a class="name">Net Salary : <u style="color: #7588e7 ;">105,245</u></a>
												</div>
											</div>
										</li>
									</ul>
								</div>
            </div>


						</div>
					</div>




        </div>


        <?php
          include('footer.php');
        ?>
