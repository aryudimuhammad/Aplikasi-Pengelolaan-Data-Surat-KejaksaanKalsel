<div class="modal fade bounceInDown animated in" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Jenis Aduan</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" id="kode" class="form-control" placeholder="Masukkan kode"
                            value="{{old('kode')}}">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis</label>
                        <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Masukkan jenis"
                            value="{{old('jenis')}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
