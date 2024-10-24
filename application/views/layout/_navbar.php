    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
    	navbar-scroll="true">
    	<div class="container-fluid py-1 px-3">

    		<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
    			<div class="ms-md-auto pe-md-3 d-flex align-items-center">
    			</div>
    			<ul class="navbar-nav  justify-content-end">
    				<li class="nav-item d-flex align-items-center">
    					<a href="" class="nav-link text-body font-weight-bold px-0">
    						<i class="fa fa-user me-sm-1"></i>
    						<span class="d-sm-inline d-none"><?= $this->session->userdata('nama')?></span>
    					</a>
    				</li>
    				<li class="nav-item d-xl-none ps-3 d-flex align-items-center">
    					<a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
    						<div class="sidenav-toggler-inner">
    							<i class="sidenav-toggler-line"></i>
    							<i class="sidenav-toggler-line"></i>
    							<i class="sidenav-toggler-line"></i>
    						</div>
    					</a>
    				</li>
    				<li class="nav-item d-flex align-items-center gap-4">
    					<a class="nav-link text-body font-weight-bold px-0">
    						<button type="button" class="btn btn-primary m-2" data-bs-toggle="modal"
    							data-bs-target="#logout" data-bs-whatever="@getbootstrap">Log Out</button>
    						<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel"
    							aria-hidden="true">
    							<div class="modal-dialog">
    								<div class="modal-content">
    									<div class="modal-header">
    										<h1 class="modal-title fs-5" id="exampleModalLabel">Sad :<</h1> </div> <div
    												class="modal-body">
    												<form action="<?= base_url('auth/logout')?>" method="post">
    													<p class="d-flex justify-content-start">Apakah anda yakin log
    														out?</p>
    									</div>
    									<div class="modal-footer">
    										<button type="button" class="btn btn-secondary"
    											data-bs-dismiss="modal">Batal</button>
    										<button type="Submit" class="btn btn-danger">Hapus</button>
    									</div>
    								</div>
    								</form>
    							</div>
    					</a>
    				</li>
    			</ul>
    		</div>
    	</div>
    	</div>
    </nav>
    <!-- End Navbar -->
