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
                {{ method_field('put') }}
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="surat_terima_id">Nama Pelapor</label>
                        <select name="surat_terima_id" id="surat_terima_id" class="form-control">
                            @foreach($terima as $d)
                            <option value="{{$d->id}}" @if (old('surat_terima_id')==$d->id) {{ 'selected' }} @endif>{{$d->nama_pelapor}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_penyelidikan">No Penyelidikan</label>
                        <input type="number" name="no_penyelidikan" id="no_penyelidikan" class="form-control" placeholder="Masukkan No Penyelidikan" value="{{old('no_penyelidikan')}}">
                    </div>
                    <div class="form-group">
                        <label for="pertimbangan">Pertimbangan</label>
                        <input type="text" name="pertimbangan" id="pertimbangan" class="form-control" placeholder="Masukkan Pertimbangan" value="{{old('pertimbangan')}}">
                    </div>
                    <div class="form-group">
                        <label for="dasar">Dasar</label>
                        <input type="text" name="dasar" id="dasar" class="form-control" placeholder="Dasar..." value="{{old('dasar')}}">
                    </div>
                    <div class="form-group">
                        <label for="untuk">Untuk</label>
                        <input type="text" name="untuk" id="untuk" class="form-control" placeholder="Untuk..." value="{{old('untuk')}}">
                    </div>
                    <div class="form-group">
                        <label for="dikeluarkan_di">Dikeluarkan di</label>
                        <textarea name="dikeluarkan_di" id="dikeluarkan_di" class="form-control" placeholder="Dikeluarkan di">{{old('dikeluarkan_di')}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
