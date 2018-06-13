
        <?php
        include("header.php");
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-4 col-xs-3">
							<h4 class="page-title">Clients</h4>
						</div>
						<div class="col-sm-8 col-xs-9 text-right m-b-20">
							<a href="#" class="btn btn-primary rounded pull-right" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Add Client</a>

						</div>
					</div>
					<div class="row filter-row">
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Client ID</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Client Name</label>
								<input type="text" class="form-control floating" />
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus select-focus">
								<label class="control-label">Company</label>
								<select class="select floating">
									<option value="">Select Company</option>
									<option value="">Global Technologies</option>
									<option value="1">Delta Infotech</option>
								</select>
							</div>
						</div>
						<div class="col-sm-3 col-xs-6">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table datatable">
									<thead>
										<tr>
											<th>Name</th>
											<th>Client ID</th>
											<th>Contact Person</th>
											<th>Email</th>
											<th>Mobile</th>
											<th>Projects</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<a href="client-profile.php" class="avatar">G</a>
												<h2><a href="client-profile.php">Global Technologies</a></h2>
											</td>
											<td>CLT-0001</td>
											<td>Barry Cuda</td>
											<td>barrycuda@example.com</td>
											<td>9876543210</td>
											<td>
												<div class="dropdown action-label">
													<a class="btn btn-white btn-sm rounded " aria-expanded="false"> 2</a>
												</div>
											</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
														<li><a href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>

									</tbody>
								</table>
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
									<a href="chat.php">
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
							<a href="chat.php">See all messages</a>
						</div>
					</div>
				</div>
            </div>



			<div id="add_client" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<div class="modal-content modal-lg">
						<div class="modal-header">
							<h4 class="modal-title">Add Client</h4>
						</div>
						<div class="modal-body">
							<div class="m-b-30">

                <form method="post" action="#" >
                  <div class="card-box">
                    <h3 class="card-title">Basic Information</h3>
                    <div class="row">
                      <div class="col-md-12">
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
                                <input class="form-control floating"  type="text" name="website" placeholder="Company Website" required >
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
                    <h3 class="card-title">General Remarks</h3>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group form-focus">
                        <textarea type="text" name="more" class="form-control floating" placeholder="More Information About this client..." required ></textarea>
                      </div>

                    </div>

                  </div>
                  <div class="text-center m-t-20">
                    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Save &amp; Add"/>
                  </div>
                </form>




							</div>
						</div>
					</div>
				</div>
			</div>

        <!-----EDIT CLIENT MODAL----->


      <div id="edit_client" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="modal-content modal-lg">
            <div class="modal-header">
              <h4 class="modal-title">Edit Client Details</h4>
            </div>
            <div class="modal-body">
              <div class="m-b-30">

                <form method="post" action="#" >
                  <div class="card-box">
                    <h3 class="card-title">Basic Information</h3>
                    <div class="row">
                      <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group form-focus">
                                <input type="text" name="comapany_name" class="form-control floating" value="Global Technologies" placeholder="Company Name" required/>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group form-focus">
                                <select class="select form-control floating" name="country" value="Kenya" required>
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
                                <input type="text" name="location" class="form-control floating" value="Nairobi" placeholder="Company Location" required />
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group form-focus">
                                <input class="form-control floating" value="www.globaltech.com" type="text" name="website" placeholder="Company Website" required >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <textarea name="description" class="form-control" placeholder="Company description" value=""  required></textarea>

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
                          <input type="text" name="names" value="Juliet Njeri" class="form-control floating" placeholder="Full Names" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-focus">
                          <input type="email" name="email" value="juliet@globaltech.com" class="form-control floating" placeholder="Email Address" required />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group form-focus">
                          <input type="text" name="title" value="Managing Director" class="form-control floating" placeholder="Contact Title" required />
                        </div>
                      </div>


                      <div class="col-md-6">
                        <div class="form-group form-focus">
                          <input type="text" name="phone" class="form-control floating" value="+2547098267356" placeholder="Primary Phone Number" required />
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card-box">
                    <h3 class="card-title">General Remarks</h3>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group form-focus">
                        <textarea type="text" name="more" class="form-control floating" placeholder="More Information About this client..." required ></textarea>
                      </div>

                    </div>

                  </div>
                  <div class="text-center m-t-20">
                    <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Save &amp; Add"/>
                  </div>
                </form>




              </div>
            </div>
          </div>
        </div>
      </div>


      <!-----EDIT CLIENT MODAL----->


      <!-----DELETE CLIENT MODAL----->


			<div id="delete_client" class="modal custom-modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content modal-md">
						<div class="modal-header">
							<h4 class="modal-title">Delete Client</h4>
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

        <?php
          include("footer.php");
        ?>
