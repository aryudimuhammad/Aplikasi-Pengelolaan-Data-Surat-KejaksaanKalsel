@extends('layouts.admin.app')
@section('title') Ubah Surat Terima @endsection
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
                                <h1>Ubah Surat Terima</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><a href="{{route('terimaIndex')}}">Surat Terima</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Ubah Surat Terima</span>
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
                            <h1>Ubah Surat Terima</h1>
                            <div class="sparkline13-outline-icon" style="margin-top: -6px;">
                                <a href="{{route('terimaIndex')}}" class="btn btn-danger color-white"><span class="fa fa-arrow-left"> Kembali</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline-content" style="margin-left: 15px; margin-right:15px;">
                        <div class="datatable-dashv1-list">
                            <form method="post" action="{{route('terimaUpdate',['id' => $data->uuid])}}">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_pelapor">Nama Pelapor</label>
                                    <input type="text" name="nama_pelapor" id="nama_pelapor" class="form-control" placeholder="Masukkan Nama Pelapor" value="{{$data->nama_pelapor}}">
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <textarea name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir">{{$data->tempat_lahir}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="agama">Agama</label>
                                    <select class="form-control" id="agama" name="agama">
                                        <option value="1" {{ $data->agama == 1 ? 'selected' : '' }}>Islam</option>
                                        <option value="2" {{ $data->agama == 2 ? 'selected' : '' }}>Kristen Protestan</option>
                                        <option value="3" {{ $data->agama == 3 ? 'selected' : '' }}>Katolik</option>
                                        <option value="4" {{ $data->agama == 4 ? 'selected' : '' }}>Hindu</option>
                                        <option value="5" {{ $data->agama == 5 ? 'selected' : '' }}>Buddha</option>
                                        <option value="6" {{ $data->agama == 6 ? 'selected' : '' }}>Kong Hu Cu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kewarganegaraan">Kewarganegaraan</label>
                                    <input type="text" name="kewarganegaraan" id="kewarganegaraan" class="form-control" placeholder="Masukkan Kewarganegaraan" value="{{$data->kewarganegaraan}}">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan</label>
                                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Masukkan Pekerjaan" value="{{$data->pekerjaan}}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat">{{$data->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="kontak">Kontak</label>
                                    <input type="text" name="kontak" id="kontak" class="form-control" placeholder="Masukkan Kontak" value="{{$data->kontak}}">
                                </div>
                                <div class="form-group">
                                    <label for="uraian">Uraian</label>
                                    <div class="tinymce-single shadow-reset nt-mg-b-30">
                                        <textarea name="uraian" id="summernote2" class="form-control">{{$data->uraian}}</textarea>
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
