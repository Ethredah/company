


    <?php
      include('header.php');

    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">



						<div class="col-sm-8">
							<h4 class="page-title">Edit My Profile</h4>
						</div>
					</div>
					<form action="edit-profile-form.php" method="post" enctype="multipart/form-data">
						<div class="card-box">
							<h3 class="card-title">Basic Information  (<i>Disabled</i>)</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-img-wrap">
										<img class="inline-block" src="../assets/img/user.jpg" alt="user">
										<div class="fileupload btn btn-default">
											<span class="btn-text">upload</span>
											<input class="upload" type="file" name="image" id="image" disabled >
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="fname" value="" disabled class="form-control floating" placeholder="First Name" />
												</div>
											</div>
                      <div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="mname" value="" disabled class="form-control floating" placeholder="Middle Name" />
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="lname" value="" disabled class="form-control floating" placeholder="Last Name" />
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group form-focus">
													<div class="cal-icon"><input class="form-control floating datetimepicker" disabled type="text" name="dob" value="" placeholder="Birth Date" ></div>
												</div>
											</div>
                      <div class="col-md-8">
                      	<div class="card-box" style="background-color:orange; opacity:0.9;">
                        <strong>Note:</strong><p> For any major changes to your profile please contact HR for modifications.</p>
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
										<input type="text" name="email" value="" class="form-control floating" placeholder="Email Address" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="address" value="" class="form-control floating" placeholder="Physical Address" />
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="phone" value="" class="form-control floating" placeholder="Phone Number" />
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
