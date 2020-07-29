@extends('layouts.admin.app')

@section('title') Data Pegawai @endsection

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
                                <h1>Data Pegawai</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Data Pegawai</span>
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
                            <h1>Data Pegawai</h1>
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
                                        <th data-field="nama">Nama</th>
                                        <th data-field="nrp">NRP</th>
                                        <th data-field="jabatan">Jabatan</th>
                                        <th data-field="pangkat">Pangkat</th>
                                        <th data-field="telp">Telepon</th>
                                        <th data-field="tempat_lahir">Tempat Lahir</th>
                                        <th data-field="tgl_lahir">Tanggal Lahir</th>
                                        <th data-field="jk">Jenis Kelamin</th>
                                        <th data-field="alamat">Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>{{$d->nrp}}</td>
                                        <td>{{$d->jabatan->jabatan}}</td>
                                        <td>{{$d->pangkat->pangkat}}</td>
                                        <td>{{$d->telp}}</td>
                                        <td>{{$d->tempat_lahir}}</td>
                                        <td>{{Carbon\carbon::parse($d->tgl_lahir)->format('d F Y')}}</td>
                                        <td>@if($d->jk == 1)Laki - Laki @else Perempuan @endif</td>
                                        <td>{{$d->alamat}}</td>
                                        <td>
                                            <a style="border-radius: 5px;" class="btn btn-warning btn-xs" data-id="{{$d->id}}" data-nama="{{$d->nama}}" data-nrp="{{$d->nrp}}" data-jabatan="{{$d->jabatan_id}}" data-pangkat="{{$d->pangkat_id}}" data-telp="{{$d->telp}}" data-tempat_lahir="{{$d->tempat_lahir}}" data-tgl_lahir="{{$d->tgl_lahir}}" data-jk="{{$d->jk}}" data-alamat="{{$d->alamat}}" data-toggle="modal" data-target="#modaledit"><i class="fa fa-pencil" style="color: white;"></i> Edit</a>
                                            <a style=" border-radius: 5px;" class="delete btn btn-danger btn-xs" data-id="{{$d->uuid}}"><i class="fa fa-trash" style="color: white;"></i> Delete</a>
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

@include('admin.master.pegawai.create')
@include('admin.master.pegawai.edit')
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
        let nama = button.data('nama')
        let nrp = button.data('nrp')
        let jabatan = button.data('jabatan')
        let pangkat = button.data('pangkat')
        let telp = button.data('telp')
        let tempat_lahir = button.data('tempat_lahir')
        let tgl_lahir = button.data('tgl_lahir')
        let jk = button.data('jk')
        let alamat = button.data('alamat')
        let modal = $(this)

        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #nama').val(nama);
        modal.find('.modal-body #nrp').val(nrp);
        modal.find('.modal-body #jabatan').val(jabatan);
        modal.find('.modal-body #pangkat').val(pangkat);
        modal.find('.modal-body #telp').val(telp);
        modal.find('.modal-body #tempat_lahir').val(tempat_lahir);
        modal.find('.modal-body #tgl_lahir').val(tgl_lahir);
        modal.find('.modal-body #jk').val(jk);
        modal.find('.modal-body #alamat').val(alamat);
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
                    url: "{{url('/master/pegawai')}}" + '/' + id,
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
