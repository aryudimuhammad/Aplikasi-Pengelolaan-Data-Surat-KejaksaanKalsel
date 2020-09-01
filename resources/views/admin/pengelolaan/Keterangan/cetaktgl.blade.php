<div class="modal fade bounceInDown animated in" id="cetakbln" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Cetak Berdasarkan Periode</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="get" action="{{ route('permintaanketerangan') }}" target="_blank">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="month">Pilih Periode</label>
                        <input type="text" name="month" id="datepicker" readonly="readonly" class="form-control"
                            placeholder="Klik disini untuk memasukan data" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Cetak</button>
                </div>
            </form>
        </div>
    </div>
</div>
