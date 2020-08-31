<div class="modal fade bounceInDown animated in" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Surat Terima</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="nomor">Nomor Surat</label>
                        <input type="text" name="nomor" id="nomor" class="form-control"
                            placeholder="Masukkan Nomor Surat" value="{{old('nomor')}}">
                    </div>
                    <div class="form-group">
                        <label for="aduan_id">Aduan</label>
                        <select name="aduan_id" id="aduan_id" class="form-control">
                            @foreach($aduan as $d)
                            <option value="{{$d->id}}" @if (old('aduan_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->kode}} {{ $d->jenis }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nik">Nik</label>
                        <input type="text" name="nik" id="nik" class="form-control" placeholder="Masukkan Nik"
                            value="{{old('nik')}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pelapor</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                            placeholder="Masukkan Nama Pelapor" value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label for="alias">Alias</label>
                        <input type="text" name="alias" id="alias" class="form-control"
                            placeholder="Masukkan Nama Pelapor" value="{{old('alias')}}">
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
                        <input type="text" name="ortu" id="ortu" class="form-control"
                            placeholder="Masukkan Nama Orang Tua" value="{{old('ortu')}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"
                            placeholder="Masukkan Alamat">{{old('alamat')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Masukkan Kontak"
                            value="{{old('kontak')}}">
                    </div>
                    <div class="form-group">
                        <label for="uraian">Uraian</label>
                        <textarea name="uraian" id="summernote1" class="form-control"
                            placeholder="Masukkan Uraian">{{old('uraian')}}</textarea>
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
