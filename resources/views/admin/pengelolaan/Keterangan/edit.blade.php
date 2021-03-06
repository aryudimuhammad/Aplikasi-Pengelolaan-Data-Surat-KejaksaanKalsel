@extends('layouts.admin.app')
@section('title') Ubah Permintaan Keterangan @endsection
@section('head')
<link rel="stylesheet" href="{{url('template/css/summernote.css')}}">
@endsection
@section('content')
<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list shadow-reset">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="breadcome-heading">
                                <h1>Ubah Permintaan Keterangan</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="{{route('keteranganIndex')}}">Permintaan Keterangan</a> <span
                                        class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Ubah Permintaan Keterangan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-13">
                <div class="sparkline13-list shadow-reset mg-t-30">
                    <div class="sparkline13-hd" style="margin-left: 15px; margin-right:15px;">
                        <div class=" main-sparkline13-hd">
                            <h1>Ubah Permintaan Keterangan</h1>
                            <div class="sparkline13-outline-icon" style="margin-top: -6px;">
                                <a href="{{route('keteranganIndex')}}" class="btn btn-danger color-white"><span
                                        class="fa fa-arrow-left"> Kembali</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline-content" style="margin-left: 15px; margin-right:15px;">
                        <div class="datatable-dashv1-list">
                            <form method="post" action="{{route('keteranganUpdate', ['id' => $data->uuid])}}">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="perintah_penyelidikan_id">No.Penyelidikan</label>
                                        <select name="perintah_penyelidikan_id" id="perintah_penyelidikan_id"
                                            class="form-control">
                                            @foreach($penyelidikan as $d)
                                            <option value="{{$d->id}}" @if ($data->perintah_penyelidikan_id == $d->id)
                                                {{ 'selected' }} @endif>{{$d->no_penyelidikan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_pol">No.Pol</label>
                                        <input type="text" name="no_pol" id="no_pol" class="form-control"
                                            placeholder="Masukkan No Penyelidikan" value="{{$data->no_pol}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="perihal">Perihal</label>
                                        <input type="text" name="perihal" id="perihal" class="form-control"
                                            placeholder="Masukkan Perihal" value="{{$data->perihal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nik">NIK</label>
                                        <input type="text" name="nik" id="nik" class="form-control"
                                            placeholder="Masukkan NIK" value="{{$data->warga->nik}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Kepada/warga</label>
                                        <input type="text" name="nama" id="nama" class="form-control"
                                            placeholder="Masukkan Nama Pelapor" value="{{$data->warga->nama_warga}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="alias">Alias</label>
                                        <input type="text" name="alias" id="alias" class="form-control"
                                            placeholder="Masukkan Nama Panggilan" value="{{$data->warga->alias}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <textarea name="tempat_lahir" id="tempat_lahir" class="form-control"
                                            placeholder="Masukkan Tempat Lahir">{{$data->warga->tempat_lahir}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                                            placeholder="Masukkan Tanggal Lahir" value="{{$data->warga->tgl_lahir}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Agama</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="1" {{ $data->warga->jenis_kelamin == 1 ? 'selected' : '' }}>
                                                Laki-laki
                                            </option>
                                            <option value="2" {{ $data->warga->jenis_kelamin == 2 ? 'selected' : '' }}>
                                                Perempuan
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select class="form-control" id="agama" name="agama">
                                            <option value="1" {{ $data->warga->agama == 1 ? 'selected' : '' }}>Islam
                                            </option>
                                            <option value="2" {{ $data->warga->agama == 2 ? 'selected' : '' }}>Kristen
                                                Protestan
                                            </option>
                                            <option value="3" {{ $data->warga->agama == 3 ? 'selected' : '' }}>Katolik
                                            </option>
                                            <option value="4" {{ $data->warga->agama == 4 ? 'selected' : '' }}>Hindu
                                            </option>
                                            <option value="5" {{ $data->warga->agama == 5 ? 'selected' : '' }}>Buddha
                                            </option>
                                            <option value="6" {{ $data->warga->agama == 6 ? 'selected' : '' }}>Kong Hu
                                                Cu
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kewarganegaraan">Kewarganegaraan</label>
                                        <input type="text" name="kewarganegaraan" id="kewarganegaraan"
                                            class="form-control" placeholder="Masukkan Kewarganegaraan"
                                            value="{{$data->warga->kewarganegaraan}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" id="pekerjaan" class="form-control"
                                            placeholder="Masukkan Pekerjaan" value="{{$data->warga->pekerjaan}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ortu">Orang Tua</label>
                                        <input type="text" name="ortu" id="ortu" class="form-control"
                                            placeholder="Masukkan Nama Orang Tua" value="{{$data->warga->ortu}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control"
                                            placeholder="Masukkan Alamat">{{$data->warga->alamat}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="kontak">Kontak</label>
                                        <input type="text" name="kontak" id="kontak" class="form-control"
                                            placeholder="Masukkan Kontak" value="{{$data->warga->kontak}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="di_kota">Di Kota</label>
                                        <textarea name="di_kota" id="di_kota" class="form-control"
                                            placeholder="Di Kota">{{$data->di_kota}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="uraian">Uraian</label>
                                        <textarea name="uraian" id="summernote1" class="form-control"
                                            placeholder="Uraian">{{$data->uraian}}</textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{url('template/js/data-table/bootstrap-table.js')}}"></script>
<script src="{{url('template/js/data-table/tableExport.js')}}"></script>
<script src="{{url('template/js/data-table/data-table-active.js')}}"></script>
<script src="{{url('template/js/data-table/bootstrap-table-editable.js')}}"></script>
<script src="{{url('template/js/data-table/bootstrap-editable.js')}}"></script>
<script src="{{url('template/js/data-table/bootstrap-table-resizable.js')}}"></script>
<script src="{{url('template/js/data-table/colResizable-1.5.source.js')}}"></script>
<script src="{{url('template/js/data-table/bootstrap-table-export.js')}}"></script>
<!---text editor--->
<script src="{{url('template/js/summernote.min.js')}}"></script>
<script src="{{url('template/js/summernote-active.js')}}"></script>
@endsection
