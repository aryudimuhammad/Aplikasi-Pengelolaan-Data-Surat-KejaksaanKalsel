<div class="modal fade bounceInDown animated in" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Perintah Penyelidikan</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="surat_terima_id">Nama Pelapor</label>
                        <select name="surat_terima_id" id="surat_terima_id" class="form-control">
                            @foreach($terima as $d)
                            <option value="{{$d->id}}" @if (old('surat_terima_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->warga->nama_warga}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pegawai_id">Diperintahkan Kepada</label>
                        <select name="pegawai_id" id="pegawai_id" class="form-control">
                            @foreach($pegawai as $d)
                            <option value="{{$d->id}}" @if (old('pegawai_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->nama}} - {{ $d->jabatan->jabatan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_penyelidikan">No Penyelidikan</label>
                        <input type="text" name="no_penyelidikan" id="no_penyelidikan" class="form-control"
                            placeholder="Masukkan No Penyelidikan" value="{{old('no_penyelidikan')}}">
                    </div>
                    <div class="form-group">
                        <label for="pertimbangan">Pertimbangan</label>
                        <input type="text" name="pertimbangan" id="pertimbangan" class="form-control"
                            placeholder="Masukkan Pertimbangan" value="{{old('pertimbangan')}}">
                    </div>
                    <div class="form-group">
                        <label for="dasar">Dasar</label>
                        <textarea name="dasar" id="summernote1" class="form-control">{{old('dasar')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="untuk">Untuk</label>
                        <textarea name="untuk" id="summernote2" class="form-control">{{old('untuk')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="dikeluarkan_di">Dikeluarkan di</label>
                        <textarea name="dikeluarkan_di" id="dikeluarkan_di" class="form-control"
                            placeholder="Dikeluarkan di">{{old('dikeluarkan_di')}}</textarea>
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
