@extends('layouts.admin.app')
@section('title') Ubah Data Keputusan Pengadilan @endsection
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
                                <h1>Ubah Data Keputusan Pengadilan</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="{{route('putusanIndex')}}">Data Keputusan Pengadilan</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Ubah Data Keputusan Pengadilan</span>
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
                            <h1>Ubah Data Keputusan Pengadilan</h1>
                            <div class="sparkline13-outline-icon" style="margin-top: -6px;">
                                <a href="{{route('putusanIndex')}}" class="btn btn-danger color-white"><span class="fa fa-arrow-left"> Kembali</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline-content" style="margin-left: 15px; margin-right:15px;">
                        <div class="datatable-dashv1-list">
                            <form method="post" action="{{route('putusanUpdate',['id' => $data->uuid])}}">
                                <div class="modal-body">
                                    @csrf
                                    <div class="form-group">
                                        <label for="hasil_penyidikan_id">Nomor Surat Data Keputusan Pengadilan</label>
                                        <select name="hasil_penyidikan_id" id="hasil_penyidikan_id" class="form-control">
                                            @foreach($hasil as $d)
                                            <option value="{{$d->id}}" @if ($data->hasil_penyidikan_id==$d->id) {{ 'selected' }} @endif>{{$d->nomor_surat}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor">Nomor</label>
                                        <input type="text" name="nomor" id="nomor" class="form-control" placeholder="Masukkan Nomor" value="{{$data->nomor}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="dasar">Dasar</label>
                                        <textarea name="dasar" id="summernote1" class="form-control">{{$data->dasar}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="pertimbangan">Pertimbangan</label>
                                        <textarea name="pertimbangan" id="summernote2" class="form-control">{{$data->pertimbangan}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="untuk">Untuk</label>
                                        <textarea name="untuk" id="summernote3" class="form-control">{{$data->untuk}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="dikeluarkan_di">Dikeluarkan di</label>
                                        <input type="text" name="dikeluarkan_di" id="dikeluarkan_di" class="form-control" placeholder="Masukkan Dikeluarkan di" value="{{$data->dikeluarkan_di}}">
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
