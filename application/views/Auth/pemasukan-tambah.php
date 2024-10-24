<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Pemasukan</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?=base_url('pemasukan/simpan')?>" method="post">
						<div class="mb-2">
							<label for="col-sm-2 col-form-label">Keterangan</label>
							<input type="text" class="form-control" name="keterangan">
						</div>
						<div class="mb-2">
							<label for="col-sm-2 col-form-label">Nominal</label>
							<input type="number" class="form-control" name="nominal">
						</div>
						<div class="mb-2">
							<label for="col-sm-2 col-form-label">tanggal</label>
							<input type="date" class="form-control" name="tanggal">
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
