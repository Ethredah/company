

        <?php
          include('header.php');
        ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<h4 class="page-title">Uploaded Documents (2)</h4>

						</div>
						<div class="col-sm-6 text-right m-b-30">
							<a href="upload-document.php" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Upload New Document</a>
						</div>
					</div>
					<div class="row filter-row">
            <div class="col-sm-3 col-xs-6">
              <div class="form-group form-focus">
                <label class="control-label">Document Name</label>
                <input class="form-control floating " type="text">
              </div>
            </div>
						<div class="col-sm-3 col-xs-6">
							<div class="form-group form-focus">
								<label class="control-label">Date</label>
								<div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
							</div>
						</div>

						<div class="col-sm-3 col-xs-6">
							<a href="#" class="btn btn-success btn-block"> Search </a>
						</div>
                    </div>
					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive">
								<table class="table table-striped custom-table m-b-0">
									<thead>
										<tr>
											<th>#</th>
											<th>DOC Number</th>
											<th>Name</th>
											<th>Description</th>
											<th>Date</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td><a>#Doc-00017</a></td>
											<td>contract with KCB.pdf</td>
											<td>The contract between Pikash and KCB</td>
											<td>7 Sep 2018</td>
											<td class="text-right">
												<div class="dropdown">
													<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
													<ul class="dropdown-menu pull-right">
														<li><a href="#"><i class="fa fa-eye m-r-5"></i> View</a></li>
														<li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
														<li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
													</ul>
												</div>
											</td>
										</tr>
                    <tr>
                      <td>2</td>
                      <td><a href="request-view.php">#Doc-00042</a></td>
                      <td>partnership with barclays.pdf</td>
                      <td>The partnership between Pikash and KCB</td>
                      <td>7 Sep 2018</td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                          <ul class="dropdown-menu pull-right">
                            <li><a href="#"><i class="fa fa-eye m-r-5"></i> View</a></li>
                            <li><a href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a></li>
                            <li><a href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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



                <?php
                  include('footer.php');
                ?>
