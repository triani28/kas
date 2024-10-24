<div class="container-fluid py-4">

	<button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#tambah"
		data-bs-whatever="@getbootstrap">Tambah User</button>
	<?php require_once('admin-user-tambah.php')?>
	<div class="row">

		<div class="col-12">
			<div class="card mb-4">
				<div class="card-header pb-0">
					<h6>Data User</h6>
				</div>
				<div class="card-body px-5 pt-0 pb-2">
					<div class="table-responsive p-0">
						<table class="table align-items-center mb-0">
							<thead>
								<tr>
									<th scope="col"
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										No</th>
									<th scope="col"
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Username
									</th>
									<th scope="col"
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Nama</th>
									<th scope="col"
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Level</th>
									<th scope="col"
										class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
										Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $no=1; foreach($user as $aa) { ?>
								<tr>
									<td class="align-middle text-center">
										<span class="text-secondary text-xxs font-weight-bold"><?= $no++;?></span>
									</td>
									<td class="align-middle text-center">
										<span
											class="text-secondary text-xs font-weight-bold"><?= $aa['username'];?></span>
									</td>
									<td class="align-middle text-center">
										<span class="text-secondary text-xs font-weight-bold"><?= $aa['nama'];?></span>
									</td>
									<td class="align-middle text-center">
										<span class="text-secondary text-xs font-weight-bold"><?= $aa['level'];?></span>
									</td>
									<td class="align-middle text-center">
										<a href="<?= base_url('user/edit/'.$aa['id_user'])?>"
											class="btn btn-primary font-weight-bold" data-toggle="tooltip"
											data-original-title="Edit user">Edit</a>
										<button type="button" class="btn btn-danger font-weight-bold"
											data-toggle="tooltip" data-bs-toggle="modal" data-bs-target="#delete"
											data-bs-whatever="@getbootstrap">Delete</button>
										<?php require_once('admin-user-delete.php')?>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
