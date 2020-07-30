@extends('layouts.admin.app')
@section('title') Ubah Hasil Penyelidikan @endsection
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
                                <h1>Ubah Hasil Penyelidikan</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="{{route('hasilpenyelidikanIndex')}}">Hasil Penyelidikan</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Ubah Hasil Penyelidikan</span>
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
                            <h1>Ubah Hasil Penyelidikan</h1>
                            <div class="sparkline13-outline-icon" style="margin-top: -6px;">
                                <a href="{{route('hasilpenyelidikanIndex')}}" class="btn btn-danger color-white"><span class="fa fa-arrow-left"> Kembali</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline-content" style="margin-left: 15px; margin-right:15px;">
                        <div class="datatable-dashv1-list">
                            <form method="post" action="{{route('hasilpenyelidikanUpdate', ['id' => $data->uuid])}}">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="permintaan_keterangan_id">Perihal</label>
                                        <select name="permintaan_keterangan_id" id="permintaan_keterangan_id" class="form-control">
                                            @foreach($keterangan as $d)
                                            <option value="{{$d->id}}" @if ($data->permintaan_keterangan_id == $d->id) {{ 'selected' }} @endif>{{$d->perihal}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_pol">No.Pol</label>
                                        <input type="text" name="no_pol" id="no_pol" class="form-control" placeholder="Masukkan No.Pol" value="{{$data->no_pol}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="isi_surat">Isi Surat</label>
                                        <textarea name="isi_surat" id="summernote1" class="form-control">{{$data->isi_surat}}</textarea>
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
