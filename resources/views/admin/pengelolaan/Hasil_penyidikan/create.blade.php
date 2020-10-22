<div class="modal fade bounceInDown animated in" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Hasil Penyidikan</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="panggilan_tersangka_id">Nama Tersangka</label>
                        <select name="panggilan_tersangka_id" id="panggilan_tersangka_id" class="form-control">
                            @foreach($panggilan as $d)
                            <option value="{{$d->id}}" @if (old('panggilan_tersangka_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->warga->nama_warga}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group">
                        <label for="nomor_surat">Nomor Surat</label>
                        <input type="text" name="nomor_surat" id="nomor_surat" class="form-control"
                            placeholder="Masukkan Nomor Surat" value="{{old('nomor_surat')}}">
                </div> --}}
                <div class="form-group">
                    <label for="klasifikasi">Klasifikasi</label>
                    <input type="text" name="klasifikasi" id="klasifikasi" class="form-control"
                        placeholder="Masukkan Klasifikasi" value="{{old('klasifikasi')}}">
                </div>
                <div class="form-group">
                    <label for="perihal">Perihal</label>
                    <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Masukkan Perihal"
                        value="{{old('perihal')}}">
                </div>
                <div class="form-group">
                    <label for="kepada">Kepada</label>
                    <input type="text" name="kepada" id="kepada" class="form-control" placeholder="Masukkan Kepada"
                        value="{{old('kepada')}}">
                </div>
                <div class="form-group">
                    <label for="dikeluarkan_di">Dikeluarkan di</label>
                    <input type="text" name="dikeluarkan_di" id="dikeluarkan_di" class="form-control"
                        placeholder="Masukkan Dikeluarkan di" value="{{old('dikeluarkan_di')}}">
                </div>
                <div class="form-group">
                    <label for="uraian">Uraian</label>
                    <textarea name="uraian" id="summernote1" class="form-control">{{old('uraian')}}</textarea>
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
