<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Sad :<</h1> </div> <div class="modal-body">
						<form action="<?= base_url('pemasukan/hapus/'.$aa['id_transaksi'])?>" method="post">
							<p class="d-flex justify-content-start">Apakah anda yakin ingin menghapus data ini?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
				<button type="Submit" class="btn btn-danger">Hapus</button>
			</div>
		</div>
		</form>
	</div>
</div>
</div>
