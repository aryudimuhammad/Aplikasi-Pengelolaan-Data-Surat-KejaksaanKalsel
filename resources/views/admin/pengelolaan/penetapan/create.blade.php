<div class="modal fade bounceInDown animated in" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Penetapan Tersangka</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="panggilan_tersangka_id">Nama Penetapan Tersangka</label>
                        <select name="panggilan_tersangka_id" id="panggilan_tersangka_id" class="form-control">
                            @foreach($panggilan as $d)
                            <option value="{{$d->id}}" @if (old('panggilan_tersangka_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->warga->nama_warga}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nomor_surat">Nomor Surat</label>
                        <input type="text" name="nomor_surat" class="form-control" placeholder="Nomor Surat.." value="{{old('nomor_surat')}}">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" id="summernote2" class="form-control" placeholder="Keterangan..">{{old('keterangan')}}</textarea>
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
