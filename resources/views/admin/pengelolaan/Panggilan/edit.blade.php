@extends('layouts.admin.app')
@section('title') Ubah Data Panggilan Tersangka @endsection
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
                                <h1>Ubah Data Panggilan Tersangka</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="{{route('panggilanIndex')}}">Data Panggilan Tersangka</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Ubah Data Panggilan Tersangka</span>
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
                            <h1>Ubah Data Panggilan Tersangka</h1>
                            <div class="sparkline13-outline-icon" style="margin-top: -6px;">
                                <a href="{{route('panggilanIndex')}}" class="btn btn-danger color-white"><span class="fa fa-arrow-left"> Kembali</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline-content" style="margin-left: 15px; margin-right:15px;">
                        <div class="datatable-dashv1-list">
                            <form method="post" action="{{route('panggilanUpdate', ['id' => $data->uuid])}}">
                                @csrf
                                <div class="modal-body">
                                    @csrf
                                    <div class="form-group">
                                        <label for="perintah_penyidikan_id">No Perintah Penyidikan</label>
                                        <select name="perintah_penyidikan_id" id="perintah_penyidikan_id" class="form-control">
                                            @foreach($penyidikan as $d)
                                            <option value="{{$d->id}}" @if ($data->perintah_penyidikan_id==$d->id) {{ 'selected' }} @endif>{{$d->id}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama.." value="{{$data->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Masukkan Kota" value="{{$data->kota}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_dipanggil">Tanggal di Panggil</label>
                                        <input type="date" name="tgl_dipanggil" id="tgl_dipanggil" class="form-control" value="{{$data->tgl_dipanggil}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="jam">Jam</label>
                                        <input type="time" name="jam" id="jam" class="form-control" value="{{$data->jam}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="tempat">Tempat</label>
                                        <input type="text" name="tempat" id="tempat" class="form-control" placeholder="Masukkan Tempat" value="{{$data->tempat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="menghadap">Menghadap</label>
                                        <textarea name="menghadap" id="summernote1" class="form-control" placeholder="Menghadap..">{{$data->menghadap}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea name="keterangan" id="summernote2" class="form-control" placeholder="Keterangan..">{{$data->keterangan}}</textarea>
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
