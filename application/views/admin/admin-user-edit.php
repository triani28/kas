<?php foreach($user as $aa){?>
<div class="container-fluid py-4">
	<div class="col-xl-4 col-lg-5">
		<div class="card-body">
			<h2>Edit user</h2>
			<form action="<?=base_url('user/update')?>" method="post">
				<div class="mb-2">
					<label for="col-sm-2 col-form-label">Username</label>
					<input type="text" class="form-control" name="username" value="<?=$aa['username']?>" readonly>
				</div>
				<div class="mb-2">
					<label for="col-sm-2 col-form-label">Nama</label>
					<input type="text" class="form-control" name="nama" value="<?=$aa['nama']?>">
				</div>
				<div class="mb-2">
					<label for="col-sm-2 col-form-label">Level</label>
					<div>
						<select name="level" class="form-control">
							<option value="User" <?php if($aa['level']=='User'){echo "selected";}?>>User</option>
							<option value="Admin" <?php if($aa['level']=='Admin'){echo "selected";}?>>Admin</option>
						</select>
					</div>
				</div>
				<div>
					<input type="hidden" name="id_user" value="<?=$aa['id_user']?>">
					<button type="submit" class="btn bg-gradient-info w-30 mt-4 mb-0">Simpan</button>
				</div>
			</form>
		</div>
	</div>
	<?php } ?>
