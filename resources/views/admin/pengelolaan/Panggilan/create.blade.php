<div class="modal fade bounceInDown animated in" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Panggilan Tersangka</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="perintah_penyidikan_id">No Panggilan Tersangka</label>
                        <select name="perintah_penyidikan_id" id="perintah_penyidikan_id" class="form-control">
                            @foreach($penyidikan as $d)
                            <option value="{{$d->id}}" @if (old('perintah_penyidikan_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->no_penyidikan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_panggilan">Nomor Surat</label>
                        <input type="text" name="no_panggilan" id="no_panggilan" class="form-control"
                            placeholder="Masukkan Nomor Surat.." value="{{old('no_panggilan')}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama.."
                            value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label for="kota">Kota</label>
                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Masukkan Kota"
                            value="{{old('kota')}}">
                    </div>
                    <div class="form-group">
                        <label for="tgl_dipanggil">Tanggal di Panggil</label>
                        <input type="date" name="tgl_dipanggil" id="tgl_dipanggil" class="form-control"
                            value="{{old('tgl_dipanggil')}}">
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="time" name="jam" id="jam" class="form-control" value="{{old('jam')}}">
                    </div>
                    <div class="form-group">
                        <label for="tempat">Tempat</label>
                        <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Masukkan Tempat"
                            value="{{old('tempat')}}">
                    </div>
                    <div class="form-group">
                        <label for="menghadap">Menghadap</label>
                        <textarea name="menghadap" id="summernote1" class="form-control"
                            placeholder="Menghadap..">{{old('menghadap')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" id="summernote2" class="form-control"
                            placeholder="Keterangan..">{{old('keterangan')}}</textarea>
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
