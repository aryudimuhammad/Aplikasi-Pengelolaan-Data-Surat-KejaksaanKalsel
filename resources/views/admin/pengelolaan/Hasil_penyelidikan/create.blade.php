<div class="modal fade bounceInDown animated in" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Hasil Penyelidikan</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="permintaan_keterangan_id">Perihal</label>
                        <select name="permintaan_keterangan_id" id="permintaan_keterangan_id" class="form-control">
                            @foreach($keterangan as $d)
                            <option value="{{$d->id}}" @if (old('permintaan_keterangan_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->perihal}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="no_pol">No.Pol</label>
                        <input type="text" name="no_pol" id="no_pol" class="form-control" placeholder="Masukkan No.Pol" value="{{old('no_pol')}}">
                </div> --}}
                <div class="form-group">
                    <label for="isi_surat">Isi Surat</label>
                    <textarea name="isi_surat" id="summernote1" class="form-control">{{old('isi_surat')}}</textarea>
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
