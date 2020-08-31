<div class="modal fade bounceInRight animated in" id="modaledit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Ubah Data Jabatan</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @method('put')
                    @csrf
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama"
                            value="{{old('nama')}}">
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" name="nrp" id="nrp" class="form-control" placeholder="Masukkan NRP"
                            value="{{old('nrp')}}">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <select name="jabatan" id="jabatan" class="form-control">
                            @foreach($jabatan as $d)
                            <option value="{{$d->id}}" @if (old('jabatan')==$d->id) {{ 'selected' }}
                                @endif>{{$d->jabatan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pangkat">Pangkat</label>
                        <select name="pangkat" id="pangkat" class="form-control">
                            @foreach($pangkat as $d)
                            <option value="{{$d->id}}" @if (old('pangkat')==$d->id) {{ 'selected' }}
                                @endif>{{$d->pangkat}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" name="telp" id="telp" class="form-control" placeholder="Masukkan Telepon"
                            value="{{old('telp')}}">
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
                        <label for="jk">Jenis Kelamin</label>
                        <select class="form-control" name="jk" id="jk">
                            <option value="1" {{ old('jk') == 1 ? 'selected' : '' }}>Laki - Laki</option>
                            <option value="2" {{ old('jk') == 2 ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"
                            placeholder="Masukkan ALamat">{{old('alamat')}}</textarea>
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
