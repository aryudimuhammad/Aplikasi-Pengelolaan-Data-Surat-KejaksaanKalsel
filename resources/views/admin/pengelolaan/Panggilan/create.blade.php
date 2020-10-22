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
                    {{-- <div class="form-group">
                        <label for="perintah_penyidikan_id">No Panggilan Tersangka</label>
                        <select name="perintah_penyidikan_id" id="perintah_penyidikan_id" class="form-control">
                            @foreach($penyidikan as $d)
                            <option value="{{$d->id}}" @if (old('perintah_penyidikan_id')==$d->id) {{ 'selected' }}
                    @endif>{{$d->no_penyidikan}}</option>
                    @endforeach
                    </select>
                </div> --}}
                <div class="form-group">
                    <label for="pegawai_id">Menghadap</label>
                    <select name="pegawai_id" id="pegawai_id" class="form-control">
                        @foreach($pegawai as $d)
                        <option value="{{$d->id}}" @if (old('pegawai_id')==$d->id) {{ 'selected' }}
                            @endif>{{$d->nama}} , {{ $d->jabatan->jabatan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="no_panggilan">Nomor Surat</label>
                    <input type="text" name="no_panggilan" id="no_panggilan" class="form-control"
                        placeholder="Masukkan Nomor Surat.." value="{{old('no_panggilan')}}">
                </div>
                <div class="form-group">
                    <label for="nama">Kepada/tersangka</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Pelapor"
                        value="{{old('nama')}}">
                </div>
                <div class="form-group">
                    <label for="nik">Nik</label>
                    <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan Nik"
                        value="{{old('nik')}}">
                </div>
                <div class="form-group">
                    <label for="alias">Alias</label>
                    <input type="text" name="alias" id="alias" class="form-control" placeholder="Masukkan Nama Pelapor"
                        value="{{old('alias')}}">
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <textarea name="tempat_lahir" id="tempat_lahir" class="form-control"
                        placeholder="Masukkan Tempat Lahir">{{old('tempat_lahir')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" value="{{old('tgl_lahir')}}"
                        class="form-control">
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <select class="form-control" id="agama" name="agama">
                        <option value="1" {{ old('agama') == 1 ? 'selected' : '' }}>Islam</option>
                        <option value="2" {{ old('agama') == 2 ? 'selected' : '' }}>Kristen Protestan</option>
                        <option value="3" {{ old('agama') == 3 ? 'selected' : '' }}>Katolik</option>
                        <option value="4" {{ old('agama') == 4 ? 'selected' : '' }}>Hindu</option>
                        <option value="5" {{ old('agama') == 5 ? 'selected' : '' }}>Buddha</option>
                        <option value="6" {{ old('agama') == 6 ? 'selected' : '' }}>Kong Hu Cu</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kewarganegaraan">Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control"
                        placeholder="Masukkan Kewarganegaraan" value="{{old('kewarganegaraan')}}">
                </div>
                <div class="form-group">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control"
                        placeholder="Masukkan Pekerjaan" value="{{old('pekerjaan')}}">
                </div>
                <div class="form-group">
                    <label for="ortu">Orang Tua</label>
                    <input type="text" name="ortu" id="ortu" class="form-control" placeholder="Masukkan Nama Orang Tua"
                        value="{{old('ortu')}}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control"
                        placeholder="Masukkan Alamat">{{old('alamat')}}</textarea>
                </div>
                <div class="form-group">
                    <label for="kontak">Kontak</label>
                    <input type="number" name="kontak" id="kontak" class="form-control" placeholder="Masukkan Kontak"
                        value="{{old('kontak')}}">
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
