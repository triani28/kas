<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="<?= base_url('user/simpan') ?>" method="post">
					<div class="mb-2">
						<label for="col-sm-2 col-form-label">Username</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="mb-2">
						<label for="col-sm-2 col-form-label">Nama</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="mb-2">
						<label for="col-sm-2 col-form-label">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<div class="mb-2">
						<label for="col-sm-2 col-form-label">Level</label>
						<div>
							<select name="level" class="form-control">
								<option value="User">User</option>
								<option value="Admin">Admin</option>
							</select>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
				<button type="Submit" class="btn bg-gradient-info">Simpan</button>
			</div>
			</form>
		</div>
	</div>
</div>