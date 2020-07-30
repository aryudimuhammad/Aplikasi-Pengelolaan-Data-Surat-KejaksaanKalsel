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
                                <li><a href="{{route('keteranganIndex')}}">Permintaan Keterangan</a> <span class="bread-slash">/</span>
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
                                <a href="{{route('keteranganIndex')}}" class="btn btn-danger color-white"><span class="fa fa-arrow-left"> Kembali</span></a>
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
                                        <select name="perintah_penyelidikan_id" id="perintah_penyelidikan_id" class="form-control">
                                            @foreach($penyelidikan as $d)
                                            <option value="{{$d->id}}" @if ($data->perintah_penyelidikan_id == $d->id) {{ 'selected' }} @endif>{{$d->no_penyelidikan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_pol">No.Pol</label>
                                        <input type="text" name="no_pol" id="no_pol" class="form-control" placeholder="Masukkan No Penyelidikan" value="{{$data->no_pol}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="lampiran">Lampiran</label>
                                        <input type="text" name="lampiran" id="lampiran" class="form-control" placeholder="Masukkan Lampiran" value="{{$data->lampiran}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="perihal">Perihal</label>
                                        <input type="text" name="perihal" id="perihal" class="form-control" placeholder="Masukkan Perihal" value="{{$data->perihal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kepada">Kepada</label>
                                        <input type="text" name="kepada" id="kepada" class="form-control" placeholder="Kepada..." value="{{$data->kepada}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="di_kota">Di Kota</label>
                                        <textarea name="di_kota" id="di_kota" class="form-control" placeholder="Di Kota">{{$data->di_kota}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="uraian">Uraian</label>
                                        <textarea name="uraian" id="summernote1" class="form-control" placeholder="Uraian">{{$data->uraian}}</textarea>
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
