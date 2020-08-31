@extends('layouts.admin.app')
@section('title') Pengelolaan Surat Terima @endsection
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
                                <h1>Surat Terima</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Surat Terima</span>
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
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Surat Terima</h1>
                            <div class="sparkline13-outline-icon">
                                <button type="button" class="btn btn-primary color-white" data-toggle="modal"
                                    data-target="#modaltambah"><span class="fa fa-plus"> Tambah Data</span>
                                </button>
                                <a type="button" target="_blank" href="{{ route('suratterima') }}"
                                    class="btn btn-primary color-white"><span class="fa fa-print"> Cetak</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">

                            </div>
                            <table id="table" class="table border-table nowrap" data-toggle="table"
                                data-pagination="true" data-search="true" data-show-columns="true"
                                data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true"
                                data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="false"
                                data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no">No</th>
                                        <th data-field="aduan_id">Jenis Aduan</th>
                                        <th data-field="nama">Nama Pelapor</th>
                                        <th data-field="jenis_kelamin">Jenis Kelamin</th>
                                        <th data-field="tempat_lahir">Tempat, Tanggal Lahir</th>
                                        <th data-field="agama">Agama</th>
                                        <th data-field="kewarganegaraan">Kewarganegaraan</th>
                                        <th data-field="pekerjaan">Pekerjaan</th>
                                        <th data-field="ortu">Orang Tua</th>
                                        <th data-field="alamat">Alamat</th>
                                        <th data-field="kontak">Kontak</th>
                                        <th data-field="uraian">Uraian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->aduan->jenis}}</td>
                                        <td>{{$d->warga->nama_warga}}</td>
                                        <td>@if($d->warga->jenis_kelamin == 1) Laki-laki
                                            @elseif($d->warga->jenis_kelamin == 2) Perempuan @endif</td>
                                        <td>{{$d->warga->tempat_lahir}},
                                            {{Carbon\Carbon::parse($d->tgl_lahir)->translatedFormat('d F Y')}}</td>
                                        <td> @if($d->warga->agama == 1) Islam @elseif($d->warga->agama == 2) Kristen
                                            Protestan
                                            @elseif($d->warga->agama == 3) Katolik @elseif($d->warga->agama == 4) Hindu
                                            @elseif($d->warga->agama == 5) Buddha @elseif($d->warga->agama == 5) Kong Hu
                                            Cu @endif
                                        </td>
                                        <td>{{$d->warga->kewarganegaraan}}</td>
                                        <td>{{$d->warga->pekerjaan}}</td>
                                        <td>{{$d->warga->ortu}}</td>
                                        <td>{{$d->warga->alamat}}</td>
                                        <td>{{$d->warga->kontak}}</td>
                                        <td>{!!$d->uraian!!}</td>
                                        <td>
                                            {{-- <a style="border-radius: 5px;" target="_blank"
                                                class="btn btn-primary btn-xs"
                                                href="{{route('suratterimaformat',['id' => $d->uuid])}}"><i
                                                class="fa fa-print" style="color: white;"></i> Cetak Surat</a> --}}
                                            <a style="border-radius: 5px;" class="btn btn-warning btn-xs"
                                                href="{{route('terimaEdit',['id' => $d->uuid])}}"><i
                                                    class="fa fa-pencil" style="color: white;"></i> Edit</a>
                                            <a style="border-radius: 5px;" class="delete btn btn-danger btn-xs"
                                                data-id="{{$d->uuid}}"><i class="fa fa-trash" style="color: white;"></i>
                                                Delete</a>
                                        </td>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.pengelolaan.surat.create')
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

<script>
    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal.fire({
            title: "Apakah anda yakin?",
            icon: "warning",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Ya",
            cancelButtonText: "Tidak",
            showCancelButton: true,
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "{{url('/Surat/Delete')}}" + '/' + id,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Data Berhasil Dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            document.location.reload(true);
                        }, 1000);
                    },
                })
            } else if (result.dismiss === swal.DismissReason.cancel) {
                Swal.fire(
                    'Dibatalkan',
                    'data batal dihapus',
                    'error'
                )
            }
        })
    });
</script>
@endsection
