<div class="modal fade bounceInRight animated in" id="modaledit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Ubah Data Permintaan Keterangan</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                {{ method_field('put') }}
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="no_pol">No.Pol</label>
                        <input type="text" name="no_pol" id="no_pol" class="form-control" placeholder="Masukkan No Penyelidikan" value="{{old('no_pol')}}">
                    </div>
                    <div class="form-group">
                        <label for="lampiran">Lampiran</label>
                        <input type="text" name="lampiran" id="lampiran" class="form-control" placeholder="Masukkan Pertimbangan" value="{{old('lampiran')}}">
                    </div>
                    <div class="form-group">
                        <label for="perihal">Perihal</label>
                        <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Dasar..." value="{{old('perihal')}}">
                    </div>
                    <div class="form-group">
                        <label for="kepada">Kepada</label>
                        <input type="text" name="kepada" id="kepada" class="form-control" placeholder="Kepada..." value="{{old('kepada')}}">
                    </div>
                    <div class="form-group">
                        <label for="di_kota">Di Kota</label>
                        <textarea name="di_kota" id="di_kota" class="form-control" placeholder="Di Kota">{{old('di_kota')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="uraian">Uraian</label>
                        <textarea name="uraian" id="uraian" class="form-control" placeholder="Uraian">{{old('uraian')}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
