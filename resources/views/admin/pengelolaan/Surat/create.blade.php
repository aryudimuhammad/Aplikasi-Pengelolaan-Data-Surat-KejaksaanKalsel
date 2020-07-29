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
                        <label for="nama_pelapor">Nama Pelapor</label>
                        <input type="text" name="nama_pelapor" id="nama_pelapor" class="form-control" placeholder="Masukkan Nama Pelapor" value="{{old('nama_pelapor')}}">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <textarea name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">{{old('tempat_lahir')}}</textarea>
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
                        <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control" placeholder="Masukkan Kewarganegaraan" value="{{old('kewarganegaraan')}}">
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" value="{{old('pekerjaan')}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">{{old('alamat')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="kontak">Kontak</label>
                        <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Masukkan Kontak" value="{{old('kontak')}}">
                    </div>
                    <div class="form-group">
                        <label for="uraian">Uraian</label>
                        <textarea name="uraian" id="uraian" class="form-control" placeholder="Masukkan Uraian">{{old('uraian')}}</textarea>
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
