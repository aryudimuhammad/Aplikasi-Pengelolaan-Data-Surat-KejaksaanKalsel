<div class="modal fade bounceInDown animated in" id="modaltambah" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Data Perintah Penyidikan</h3>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    @csrf
                    <div class="form-group">
                        <label for="hasil_penyelidikan_id">No.Pol Penyelidikan</label>
                        <select name="hasil_penyelidikan_id" id="hasil_penyelidikan_id" class="form-control">
                            @foreach($hasil as $d)
                            <option value="{{$d->id}}" @if (old('hasil_penyelidikan_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->no_pol}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pegawai_id">Kepada</label>
                        <select name="pegawai_id" id="pegawai_id" class="form-control">
                            @foreach($pegawai as $d)
                            <option value="{{$d->id}}" @if (old('pegawai_id')==$d->id) {{ 'selected' }}
                                @endif>{{$d->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_penyidikan">No. Penyidikan</label>
                        <input type="text" name="no_penyidikan" id="no_penyidikan" class="form-control"
                            placeholder="Masukkan Nomor Penyidikan" value="{{old('no_penyidikan')}}">
                    </div>
                    <div class="form-group">
                        <label for="pertimbangan">Pertimbangan</label>
                        <textarea name="pertimbangan" id="summernote1"
                            class="form-control">{{old('pertimbangan')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="dasar">Dasar</label>
                        <textarea name="dasar" id="summernote2" class="form-control">{{old('dasar')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="untuk">Untuk</label>
                        <textarea name="untuk" id="summernote3" class="form-control">{{old('untuk')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="dikeluarkan_di">Dikeluarkan di</label>
                        <input name="dikeluarkan_di" id="dikeluarkan_di" class="form-control"
                            placeholder="Dikeluarkan di" value="{{old('dikeluarkan_di')}}">
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
