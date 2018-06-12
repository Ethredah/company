
      <?php
        include('header.php');
    ?>


            <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-xs-4">
							<h4 class="page-title">Pikash Transactions</h4>
						</div>
						<div class="col-xs-8 text-right m-b-20">
						<div class="view-icons">
								<a href="transactions.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
								<a href="transactions-list.php" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
							</div>
						</div>
					</div>



              <div class="row">

                <div class="col-sm-6 text-center">
                  <div class="card-box">
                    <div id="area-chart" ></div>
                  </div>
                </div>

                <div class="col-sm-6 text-center">
                  <div class="card-box">
                    <div id="line-chart"></div>
                  </div>
                </div>



              </div>





          <?php
            include('footer.php');
        ?>
