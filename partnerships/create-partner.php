


    <?php
      include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Create new Partner Profile</h4>
						</div>
					</div>


					<form method="post" action="#" enctype="multipart/form-data">
						<div class="card-box">
							<h3 class="card-title">Basic Information</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-img-wrap" title="upload logo">
										<img class="inline-block" src="../assets/img/user.jpg" alt="user">
										<div class="fileupload btn btn-default">
											<span class="btn-text">upload logo</span>
											<input class="upload" type="file" name="image" id="image" >
										</div>
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="comapany_name" class="form-control floating" placeholder="Company Name" required/>
												</div>
											</div>
                      <div class="col-md-4">
                        <div class="form-group form-focus">
                          <select class="select form-control floating" name="country" required>
                              <option selected disabled>Select Country</option>
                              <option value="kenya">Kenya</option>
                              <option value="tanzania">Tanzania</option>
                              <option value="uganda">Uganda</option>
                              <option value="south-africa">South Africa</option>
                              <option value="usa">USA</option>
                              <option value="uae">UAE</option>
                              <option value="uk">United Kingdom</option>
                            </select>
                          </div>
                      </div>
                      <div class="col-md-4">
												<div class="form-group form-focus">
													<input type="text" name="location" class="form-control floating" placeholder="Company Location" required />
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group form-focus">
													<div class="cal-icon"><input class="form-control floating datetimepicker" type="text" name="closing_date" placeholder="Expected Closing Date" required ></div>
												</div>
											</div>
                      <div class="col-md-6">
												<textarea name="description" class="form-control" placeholder="Company description"  required></textarea>

													</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Contact Person</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="names" class="form-control floating" placeholder="Full Names" required />
									</div>
								</div>
                <div class="col-md-6">
									<div class="form-group form-focus">
										<input type="email" name="email" class="form-control floating" placeholder="Email Address" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="title" class="form-control floating" placeholder="Contact Title" required />
									</div>
								</div>


								<div class="col-md-6">
									<div class="form-group form-focus">
										<input type="text" name="phone" class="form-control floating" placeholder="Primary Phone Number" required />
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Partnership Information</h3>
							<div class="row">
								<div class="col-md-6">
                  <div class="form-group form-focus">
                    <input type="text" name="type" class="form-control floating" placeholder="Deal Type" required />
                  </div>
								</div>
								<div class="col-md-6">
                  <div class="form-group form-focus">
										<textarea type="text" name="amount" class="form-control floating" placeholder="Deal Size (Ksh)" required ></textarea>
									</div>
								</div>
                <div class="col-md-12">
                  <div class="form-group form-focus">
                    <select class="select form-control floating" name="sales_process" required>
                        <option selected disabled>Select Sales Process</option>
                        <option value="25%">Initial pitch meeting/Call (Establish Need Analysis)(25%)</option>
                        <option value="50%">Develop Proposal, Budget, NDA & Contract (50%)</option>
                        <option value="75%">Get final approval for Proposal, Budget, NDA & Contract(75%)</option>
                        <option value="100%">Sign Contract & Closed Deal(100%)</option>
                      </select>
                    </div>
                </div>
							</div>

						</div>
						<div class="card-box">
							<h3 class="card-title">General Remarks</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group form-focus">
									<textarea type="text" name="more" class="form-control floating" placeholder="More Information About this partnership..." required ></textarea>
								</div>

							</div>

						</div>
						<div class="text-center m-t-20">
              <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Save &amp; Add"/>
						</div>
					</form>
				</div>


        <?php
          include('footer.php');
        ?>
