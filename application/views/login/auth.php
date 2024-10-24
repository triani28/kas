<section>
	<div class="page-header min-vh-75">

		<div class="container">
		<div id="hilang" class="position-absolute start-0 end-0">
									<?php echo $this->session->flashdata('alert', true)?>
		</div>
		<div class="row">
				<div class="col-xl-3 col-lg-5 col-md-6 d-flex flex-column mx-auto">
					<div class="card card-plain mt-8  bg-white">

						<div class="card-header pb-0 text-left">
							<h3 class="font-weight-bolder text-info text-gradient">Login Page</h3>
							<p class="mb-0">Welcome to INDOROCKET</p>
						</div>
						<div class="card-body">

							<form action="<?=base_url('auth/login')?>" method="post">
								<label>Nama</label>
								<div class="mb-1">
									<input type="text" class="form-control" placeholder="Username" name="username"
										aria-label="Nama" aria-describedby="email-addon">
								</div>
								<label>Password</label>
								<div class="mb-1">
									<input type="password" class="form-control" placeholder="Password" name="password"
										aria-label="Password" aria-describedby="password-addon">
								</div>
								<div class="text-center">
									<button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
								</div>
							</form>
						</div>
						<!-- <div class="card-footer text-center pt-0 px-lg-2 px-1">
								<p class="mb-4 text-sm mx-auto">
									Belum punya akun? Buat
									<a href="" class="text-info text-gradient font-weight-bold" data-bs-toggle="modal"
										data-bs-target="#tambah" data-bs-whatever="@getbootstrap">Sekarang!</a>
									<!-- <button type="button" class="btn btn-primary m-2" data-bs-toggle="modal"
									data-bs-target="#tambah" data-bs-whatever="@getbootstrap">Tambah User</button> -->
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
