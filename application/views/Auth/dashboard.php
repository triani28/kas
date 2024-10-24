<?php
	$pemasukan		= $this->Transaksi_model->pemasukan();
	$pengeluaran 	= $this->Transaksi_model->pengeluaran();
	$saldo_akhir	= $pemasukan-$pengeluaran;
?>
	<div class="row mt-4">
      	<div class="col-lg-8 mb-lg-0 mb-0">
      		<div class="card">
      			<div class="card-body p-3">
      				<div class="row">
      					<div class="col-lg-4">
      						<div class="bg-gradient-primary border-radius-lg h-100">
      							<img src="<?= base_url('assets/');?>/assets/img/shapes/waves-white.svg"
      								class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
      							<div class="position-relative d-flex align-items-center justify-content-center h-100">
      								<img class="w-100 position-relative z-index-2 pt-4"
      									src="<?= base_url('assets/');?>/assets/img/illustrations/rocket-white.png" alt="rocket">
      							</div>
      						</div>
      					</div>
      					<div class="col-lg-6">
      						<div class="d-flex flex-column h-100">
      							<h1 class="font-weight-bolder">INDOROCKET</h1>
      							<p class="">Selamat Datang <?= $this->session->userdata('level')?>
      								<?= $this->session->userdata('nama')?>
									</p>
      						</div>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="col-lg-4 mb-lg-0 mb-0">
      		<div class="card">
      			<div class="card-body p-3">
      				<div class="row">
						<div class="col-lg-12">
						<h2>TOTAL</h2>
							<table class="table align-items-center mb-0">
								<tbody>
									<tr>
										<td>Rp. <?= number_format($saldo_akhir);?></td>
									</tr>
									<tr>
										
									<td class="d-flex justify-content-end">
											<!-- <a class="btn btn-primary" href="<?=base_url('laporanfpdf')?>">Cetak PDF</a> -->
											<button type="button" class="btn btn-primary font-weight-bold"
											data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#total"
											data-bs-whatever="@getbootstrap">Cetak PDF</button>
										<?php require_once('dashboard-pdf-total.php')?></td>
									</tr>
								</tbody>
							</table>
						</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>


	  <div class="row mt-4">
		<div class="col-lg-6 mb-lg-0 mb-0">
			<div class="card">
				<div class="card-body p3">
					<div class="row">
						<div class="col-lg-12">
							<h3>Pemasukan</h3>
							<table class="table align-items-center mb-0">
								<thead>
									<tr>
										<td>Pemasukan hari ini</td>
										<td>Pemasukan bulan ini</td>
										<td>Total Pemasukan</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Rp. <?= number_format($this->Transaksi_model->pemasukan_hari_ini());?></td>
										<td>Rp. <?= number_format($this->Transaksi_model->pemasukan_bulan_ini());?></td>
										<td>Rp. <?= number_format($this->Transaksi_model->pemasukan());?></td>
									</tr>
								</tbody>
							</table>
							<br>
							<div class="d-flex justify-content-end">
								<a class="btn btn-primary" href="<?=base_url('pemasukan')?>">Klik untuk melihat</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 mb-lg-0 mb-0">
			<div class="card">
				<div class="card-body p0">
					<div class="row">
						<div class="col-lg-12">
							<table class="table align-items-center mb-0">
								<h3>Pengeluaran</h3>
								<thead>
									<tr>
										<td>Pengeluaran hari ini</td>
										<td>Pengeluaran bulan ini</td>
										<td>Total Pengeluaran</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Rp. <?= number_format($this->Transaksi_model->pengeluaran_hari_ini());?></td>
										<td>Rp. <?= number_format($this->Transaksi_model->pengeluaran_bulan_ini());?></td>
										<td>Rp. <?= number_format($this->Transaksi_model->pengeluaran());?></td>
									</tr>					
								</tbody>
							</table>
							<br>
							<div class="d-flex justify-content-end">
								<a class="btn btn-primary" href="<?=base_url('pengeluaran')?>">Klik untuk melihat</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>

