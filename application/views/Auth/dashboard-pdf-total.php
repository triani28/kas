<div class="modal fade" id="total" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Rentang</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="<?=base_url('Laporanfpdf/cetak_total')?>" method="post">
						<div class="mb-2">
							<label for="col-sm-2 col-form-label">Tanggal Awal</label>
							<input type="date" class="form-control" name="tanggal1">
						</div>
						<div class="mb-2">
							<label for="col-sm-2 col-form-label">Tanggal Akhir</label>
							<input type="date" class="form-control" name="tanggal2">
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
