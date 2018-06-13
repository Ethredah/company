
      <?php
        include('header.php');
    ?>

            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Upload Document</h4>
						</div>
            <div class="col-sm-4" style="float:right;">
              <div class="dash-widget clearfix card-box">
              <h4 class="page-title"> Document Number : <b style="color:orange;">
                <!---GENERATE DOCUMENT NUMBER--->
              #DOC-10002
            </b>
            </h4>
          </div>
            </div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form action="#" method="post">
								<div class="row">
                  <input type="hidden" name="inumber" value="#INV10002" />
									<div class="col-sm-3">
										<div class="form-group">
											<label>Document Name <span class="text-danger">*</span></label>
											<input class="form-control" type="text" name="docname" required>
										</div>
									</div>
                  <div class="col-sm-3">
										<div class="form-group">
											<label>Upload Document<span class="text-danger">*</span></label>
											<input class="form-control" type="file" name="doc" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control" rows="3" name="description" required></textarea>
										</div>
									</div>



								</div>

								<button class="btn btn-primary" type="submit" name="send">Save & Upload</button>
							</form>
						</div>
					</div>
				</div>

			</div>
        </div>

        <?php
          include('footer.php');
        ?>
