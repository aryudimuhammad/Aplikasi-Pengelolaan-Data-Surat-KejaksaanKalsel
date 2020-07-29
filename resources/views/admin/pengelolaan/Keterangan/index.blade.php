@extends('layouts.admin.app')

@section('title') Pengelolaan Permintaan Keterangan @endsection

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
                                <h1>Permintaan Keterangan</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Permintaan Keterangan</span>
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
                            <h1>Permintaan Keterangan</h1>
                            <div class="sparkline13-outline-icon">
                                <button type="button" class="btn btn-primary color-white" data-toggle="modal" data-target="#modaltambah"><span class="fa fa-plus"> Tambah Data</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">

                            </div>
                            <table id="table" class="table border-table nowrap" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="false" data-click-to-select="false" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="no">No</th>
                                        <th data-field="nama_pelapor">Nama Pelapor</th>
                                        <th data-field="no_penyelidikan">Nomor Penyelidikan</th>
                                        <th data-field="pertimbangan">Pertimbangan</th>
                                        <th data-field="dasar">Dasar</th>
                                        <th data-field="untuk">Untuk</th>
                                        <th data-field="dikerluarkan_di">Dierluarkan Di</th>
                                        <th data-field="created_at">Tanggal Dibuat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->surat_terima->nama_pelapor}}</td>
                                        <td>{{$d->no_penyelidikan}}</td>
                                        <td>{{$d->pertimbangan}}</td>
                                        <td>{{$d->dasar}}</td>
                                        <td>{{$d->untuk}}</td>
                                        <td>{{$d->dikeluarkan_di}}</td>
                                        <td>{{Carbon\carbon::parse($d->created_at)->format('d F Y')}}</td>
                                        <td>
                                            <a style="border-radius: 5px;" class="btn btn-warning btn-xs" data-id="{{$d->id}}" data-nama_pelapor="{{$d->surat_terima->nama_pelapor}}" data-no_penyelidikan="{{$d->no_penyelidikan}}" data-pertimbangan="{{$d->pertimbangan}}" data-dasar="{{$d->dasar}}" data-untuk="{{$d->untuk}}" data-dikeluarkan_id="{{$d->dikeluarkan_di}}" data-created_at="{{$d->created_at}}" data-toggle="modal" data-target="#modaledit"><i class="fa fa-pencil" style="color: white;"></i> Edit</a>
                                            <a style=" border-radius: 5px;" class="delete btn btn-danger btn-xs" data-id="{{$d->uuid}}"><i class="fa fa-trash" style="color: white;"></i> Delete</a>
                                            <a style=" border-radius: 5px;" class="btn btn-info btn-xs"><i class="fa fa-search" style="color: white;"></i> Detail</a>
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

@include('admin.pengelolaan.penyelidikan.create')
@include('admin.pengelolaan.penyelidikan.edit')
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

<script>
    $('#modaledit').on('show.bs.modal', function(event) {
        let button = $(event.relatedTarget)
        let id = button.data('id')
        let jabatan = button.data('jabatan')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #jabatan').val(jabatan);
    })
</script>

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
                    url: "{{url('/master/jabatan')}}" + '/' + id,
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