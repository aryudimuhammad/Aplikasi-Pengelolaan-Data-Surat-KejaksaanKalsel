@extends('layouts.admin.app')
@section('title') Ubah Perintah Penyelidikan @endsection
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
                                <h1>Ubah Perintah Penyelidikan</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="{{route('perintahpenyidikanIndex')}}">Perintah Penyelidikan</a> <span
                                        class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Ubah Perintah Penyelidikan</span>
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
                            <h1>Ubah Perintah Penyelidikan</h1>
                            <div class="sparkline13-outline-icon" style="margin-top: -6px;">
                                <a href="{{route('perintahpenyidikanIndex')}}" class="btn btn-danger color-white"><span
                                        class="fa fa-arrow-left"> Kembali</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline-content" style="margin-left: 15px; margin-right:15px;">
                        <div class="datatable-dashv1-list">
                            <form method="post" action="{{route('perintahpenyidikanUpdate', ['id' => $data->uuid])}}">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="hasil_penyelidikan_id">No Hasil Penyelidikan</label>
                                        <select name="hasil_penyelidikan_id" id="hasil_penyelidikan_id"
                                            class="form-control">
                                            @foreach($hasil as $d)
                                            <option value="{{$d->id}}" @if ($data->hasil_penyelidikan_id == $d->id)
                                                {{ 'selected' }} @endif>{{$d->no_pol}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pegawai_id">Kepada</label>
                                        <select name="pegawai_id" id="pegawai_id" class="form-control">
                                            @foreach($pegawai as $d)
                                            <option value="{{$d->id}}" @if ($data->pegawai_id == $d->id)
                                                {{ 'selected' }} @endif>{{$d->nama}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_penyidikan">Nomor Penyidikan</label>
                                        <input name="no_penyidikan" id="no_penyidikan" class="form-control"
                                            placeholder="Nomor Penyidikan" value="{{$data->no_penyidikan}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pertimbangan">Pertimbangan</label>
                                        <textarea name="pertimbangan" id="summernote1"
                                            class="form-control">{{$data->pertimbangan}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="dasar">Dasar</label>
                                        <textarea name="dasar" id="summernote2"
                                            class="form-control">{{$data->dasar}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="untuk">Untuk</label>
                                        <textarea name="untuk" id="summernote3"
                                            class="form-control">{{$data->untuk}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="dikeluarkan_di">Dikeluarkan di</label>
                                        <input name="dikeluarkan_di" id="dikeluarkan_di" class="form-control"
                                            placeholder="Dikeluarkan di" value="{{$data->dikeluarkan_di}}">
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
