<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Materi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $m;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Booking</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $b;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Agen</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $a;?></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Testimoni</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $t;?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

            <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                  <!-- Approach -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Visi BeeTs</h6>
                    </div>
                    <div class="card-body">
										<p>BeeTS merupakan aplikasi berbasis website dimana website tersebut berisikan informasi tempat wisata dikota atlas yaitu Kota Semarang. Dengan aplikasi BeeTS ini, tidak ragu lagi dengan informasi tempat pariwisata yang ada diSemarang. Hehe.</p>
                        <p class="mb-0">Be yourself and never surrender.</p>
                    </div>
                    </div>
				  </div>
				</div>
				<?php 
				$y=0;$n=0;
				foreach ($booking as $b) : 
				if($b['status']==0)
				{
					$y++;
				}
				else{
					$n++;
				} 
				endforeach; 
				$hasil=$y+$n;
				$perseny = ($y*100)/$hasil;
        $perseny = number_format($perseny, 2, '.', '');
				$persenn = ($n*100)/$hasil;
        $persenn = number_format($persenn, 2, '.', '');
				?>
				<!-- Project Card Example -->
				<div class="card shadow mb-4">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Statistik Status Transaksi</h6>
              </div>
              <div class="card-body">
              <h4 class="small font-weight-bold">Terbayar<span
                          class="float-right"><?php echo $persenn;?> %</span></h4>
                  <div class="progress">
                      <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $persenn;?>%"
                          aria-valuenow="<?php echo $persenn;?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>
                  <h4 class="small font-weight-bold">Belum Terbayar <span
                          class="float-right"><?php echo $perseny;?> %</span></h4>
                  <div class="progress mb-4">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $perseny;?>%"
                          aria-valuenow="<?php echo $perseny;?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  
              </div>
          </div>
        </div>
