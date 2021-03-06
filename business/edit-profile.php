


    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Edit Employee Profile</h4>
						</div>
					</div>
					<form>
						<div class="card-box">
							<h3 class="card-title">Basic Informations</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-img-wrap">
										<img class="inline-block" src="../assets/img/user.jpg" alt="user">
										<div class="fileupload btn btn-default">
											<span class="btn-text">Image</span>
											<input class="upload" type="file" disabled>
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="fname" class="form-control floating" placeholder="First Name" />
												</div>
											</div>
                      <div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="mname" class="form-control floating" placeholder="Middle Name" />
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="lname" class="form-control floating" placeholder="Last Name" />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus">
													<div class="cal-icon"><input class="form-control floating datetimepicker" type="text" name="dob" placeholder="Birth Date" ></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus select-focus">
													<select class="select form-control floating" name="gender">
														<option selected disabled>Select Gendar</option>
														<option value="M">Male</option>
														<option value="F">Female</option>
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
										<input type="text" name="email" class="form-control floating" placeholder="Email Address" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="address" class="form-control floating" placeholder="Physical Address" />
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="phone" class="form-control floating" placeholder="Phone Number" />
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Employment Information</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
                    <select class="select form-control floating" name="department">
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
                    <select class="select form-control floating" name="position">
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
										<div class="cal-icon"><input type="text" class="form-control floating datetimepicker" name="empdate" placeholder="Starting Date"/></div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" name="empid" placeholder="Employee ID" />
									</div>
								</div>

							</div>

						</div>
						<div class="card-box">
							<h3 class="card-title">Set Password</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" name="password" placeholder="Password" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" class="form-control floating" name="password2" placeholder="Confirm Password" />
									</div>
								</div>

							</div>

						</div>
						<div class="text-center m-t-20">
							<button class="btn btn-primary btn-lg" type="button">Save &amp; Add</button>
						</div>
					</form>
				</div>


        <?php
          include('footer.php');
        ?>
