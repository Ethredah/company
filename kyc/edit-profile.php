


    <?php
      include('header.php');

    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">




						<div class="col-sm-8">
							<h4 class="page-title">Edit Ethredah's Profile</h4>
						</div>
					</div>
					<form action="#" method="post" enctype="multipart/form-data">
						<div class="card-box">
							<h3 class="card-title">Basic Informations</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-img-wrap">
										<img class="inline-block" src="../assets/img/user.jpg" alt="user">
										<div class="fileupload btn btn-default">
											<span class="btn-text">upload</span>
											<input class="upload" type="file" name="image" id="image" >
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="fname" value="Ethredah" class="form-control floating" placeholder="First Name" />
												</div>
											</div>
                      <div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="mname" value="Chao" class="form-control floating" placeholder="Middle Name" />
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="lname" value="Mwalwala" class="form-control floating" placeholder="Last Name" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus">
													<div class="cal-icon"><input class="form-control floating datetimepicker" type="text" name="dob" value="1923-10-17" placeholder="Birth Date" ></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus select-focus">
													<select class="select form-control floating" name="gender" value="Female">
														<option selected disabled>Select Gendar</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Contact Informations</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group form-focus">
										<input type="text" name="email" value="ethredah@gmail.com" class="form-control floating" placeholder="Email Address" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="address" value="nairobi - Kenya" class="form-control floating" placeholder="Physical Address" />
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="phone" value="078965478" class="form-control floating" placeholder="Phone Number" />
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Employment Information</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
                    <select class="select form-control floating" name="department" value="'.$row["department"].'">
                        <option selected disabled>Select Department</option>
                        <option value="Operations">Operations</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Product">Product</option>
                        <option value="Sales">Sales</option>
                        <option value="Finance">Finance</option>
                      </select>
                    </div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
                    <select class="select form-control floating" name="position" value="'.$row["position"].'">
                      <option selected disabled>Select Position</option>
                      <option value="Manager">Manager</option>
                      <option value="Developer">Developer</option>
                      <option value="Junior Developer">Junior Developer</option>
                      <option value="Sales Person">Sales Person</option>
                    </select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<div class="cal-icon"><input type="text" class="form-control floating datetimepicker" name="empdate" value="2018-21-06" placeholder="Starting Date"/></div>
									</div>
								</div>
                <div class="col-md-6">
                  <div class="form-group form-focus">
                    <select class="select form-control floating" name="type" >
                        <option selected disabled>Select Type Of Employment</option>
                        <option value="permanent">Permanent</option>
                        <option value="probation">Probation</option>
                        <option value="internship">Internship</option>
                        <option value="temporary">Temporary</option>
                      </select>
                    </div>
                </div>

							</div>

						</div>

						<div class="text-center m-t-20">
							<button class="btn btn-primary btn-lg" type="submit" name="update">Save &amp; Update</button>
						</div>
					</form>



				</div>


        <?php
          include('footer.php');
        ?>
