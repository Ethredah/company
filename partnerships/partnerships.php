

      <?php
        include('header.php');

    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Poraeh Partners</h4>
						</div>
						<div class="col-xs-8 text-right m-b-20">
							<a href="create-partner.php" class="btn btn-primary rounded pull-right" ><i class="fa fa-plus"></i> Create New Partner Profile</a>
							<div class="view-icons">
								<a href="pertnerships.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
								<a href="partnerships-list.php" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>
          <div class="row filter-row">

            <div class="col-sm-3 col-xs-6">
              <div class="form-group form-focus">
                <label class="control-label">Name</label>
                <div><input class="form-control floating" type="text"></div>
              </div>
            </div>

            <div class="col-sm-3 col-xs-6">
              <a href="#" class="btn btn-success btn-block"> Search </a>
            </div>
        </div>


					<div class="row staff-grid-row">


						<div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
							<div class="profile-widget">
								<div class="profile-img">
									<a href="partner-profile.php"><img class="avatar" src="../assets/img/kcb.jpg" alt=""></a>
								</div>

								<h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="partner-profile.php">Kenya Commercial Bank</a></h4>
								<div class="small text-muted">2%</div>
							</div>
						</div>



					</div>
        </div>





          <?php
            include('footer.php');
        ?>
