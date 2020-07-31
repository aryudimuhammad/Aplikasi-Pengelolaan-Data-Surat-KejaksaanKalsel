@extends('layouts.admin.app')

@section('title') Dashboard @endsection

@section('content')
<!-- Breadcome start-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcome-heading">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><span class="bread-blod">Home</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-b-15 materialdesign">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                    <div class="sparkline-content">
                        <div class="income-order-visit-user-area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2 style="color: black;"> Data Pegawai</h2>
                                                    <div class="main-income-phara">
                                                        <a href="{{route('pegawaiIndex')}}" style="float: right; margin-top: -28px;" class="btn btn-primary btn-sm">Pegawai</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <p style="color: black; float:left;">Total Pegawai</p>
                                                    <span class="income-percentange" style="color: black; float:right;"><span class="counter">{{totalpegawai()}} </span> <i class="fa fa-users"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="income-range">
                                                    <div class="price-adminpro-rate">
                                                        @if(totalpegawai() > 0 )
                                                        <h3 style="color: black;"><span class="counter">{{totalpegawai()}}</span> Pegawai</h3>
                                                        @else
                                                        <h3 style="color: black;">Tidak Ada Data</h3>
                                                        @endif
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2 style="color: black;"> Surat Terima</h2>
                                                    <div class="main-income-phara">
                                                        <a href="{{route('terimaIndex')}}" style="float: right; margin-top: -28px;" class="btn btn-info btn-sm">Surat Terima</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <p style="color: black; float:left;">Total Surat Terima</p>
                                                    <span class="income-percentange" style="color: black; float:right;"><span class="counter">{{totalsurat()}} </span> <i class="fa fa-envelope-square"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="income-range">
                                                    <div class="price-adminpro-rate">
                                                        @if(totalsurat() > 0 )
                                                        <h3 style="color: black;"><span class="counter">{{totalsurat()}}</span> Surat Terima</h3>
                                                        @else
                                                        <h3 style="color: black;">Tidak Ada Data</h3>
                                                        @endif
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2 style="color: black;"> Penyelidikan</h2>
                                                    <div class="main-income-phara">
                                                        <a href="{{route('penyelidikanIndex')}}" style="float: right; margin-top: -28px;" class="btn btn-danger btn-sm"> Penyelidikan</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <p style="color: black; float:left;">Total Perintah Penyelidikan</p>
                                                    <span class="income-percentange" style="color: black; float:right;"><span class="counter">{{totalpenyelidikan()}} </span> <i class="fa fa-envelope-square"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="income-range">
                                                    <div class="price-adminpro-rate">
                                                        @if(totalpenyelidikan() > 0 )
                                                        <h3 style="color: black;"><span class="counter">{{totalpenyelidikan()}}</span> Penyelidikan</h3>
                                                        @else
                                                        <h3 style="color: black;">Tidak Ada Data</h3>
                                                        @endif
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2 style="color: black;"> Hasil Penyelidikan</h2>
                                                    <div class="main-income-phara">
                                                        <a href="{{route('hasilpenyelidikanIndex')}}" style="float: right; margin-top: -28px;" class="btn btn-success btn-sm">Hasil</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <p style="color: black; float:left;">Total Hasil Penyelidikan</p>
                                                    <span class="income-percentange" style="color: black; float:right;"><span class="counter">{{totalhasilpenyelidikan()}} </span> <i class="fa fa-envelope-square"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="income-range">
                                                    <div class="price-adminpro-rate">
                                                        @if(totalhasilpenyelidikan() > 0 )
                                                        <h3 style="color: black;"><span class="counter">{{totalhasilpenyelidikan()}}</span> Hasil Penyelidikan</h3>
                                                        @else
                                                        <h3 style="color: black;">Tidak Ada Data</h3>
                                                        @endif
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2 style="color: black;"> Penyidikan</h2>
                                                    <div class="main-income-phara">
                                                        <a href="{{route('perintahpenyidikanIndex')}}" style="float: right; margin-top: -28px;" class="btn btn-danger btn-sm">Penyidikan</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <p style="color: black; float:left;">Total Perintah Penyidikan</p>
                                                    <span class="income-percentange" style="color: black; float:right;"><span class="counter">{{totalpenyidikan()}} </span> <i class="fa fa-envelope-square"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="income-range">
                                                    <div class="price-adminpro-rate">
                                                        @if(totalpenyidikan() > 0 )
                                                        <h3 style="color: black;"><span class="counter">{{totalpenyidikan()}}</span> Penyidikan</h3>
                                                        @else
                                                        <h3 style="color: black;">Tidak Ada Data</h3>
                                                        @endif
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2 style="color: black;"> Panggilan </h2>
                                                    <div class="main-income-phara">
                                                        <a href="{{route('panggilanIndex')}}" style="float: right; margin-top: -28px;" class="btn btn-primary btn-sm">Panggilan</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <p style="color: black; float:left;">Total Panggilan Tersangka</p>
                                                    <span class="income-percentange" style="color: black; float:right;"><span class="counter">{{totalpanggilan()}} </span> <i class="fa fa-envelope-square"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="income-range">
                                                    <div class="price-adminpro-rate">
                                                        @if(totalpanggilan() > 0 )
                                                        <h3 style="color: black;"><span class="counter">{{totalpanggilan()}}</span> Panggilan</h3>
                                                        @else
                                                        <h3 style="color: black;">Tidak Ada Data</h3>
                                                        @endif
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2 style="color: black;"> Hasil Penyidikan</h2>
                                                    <div class="main-income-phara">
                                                        <a href="" style="float: right; margin-top: -28px;" class="btn btn-success btn-sm">Hasil</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <p style="color: black; float:left;">Hasil Penyidikan</p>
                                                    <span class="income-percentange" style="color: black; float:right;"><span class="counter">{{totalhasilpenyidikan()}} </span> <i class="fa fa-envelope-square"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="income-range">
                                                    <div class="price-adminpro-rate">
                                                        @if(totalhasilpenyidikan() > 0 )
                                                        <h3 style="color: black;"><span class="counter">{{totalhasilpenyidikan()}}</span> Hasil Penyidikan</h3>
                                                        @else
                                                        <h3 style="color: black;">Tidak Ada Data</h3>
                                                        @endif
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="income-dashone-total shadow-reset nt-mg-b-30">
                                            <div class="income-title">
                                                <div class="main-income-head">
                                                    <h2 style="color: black;"> Keputusan</h2>
                                                    <div class="main-income-phara">
                                                        <a href="" style="float: right; margin-top: -28px;" class="btn btn-info btn-sm">Keputusan</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="income-dashone-pro">
                                                <div class="income-rate-total">
                                                    <p style="color: black; float:left;">Keputusan Pengadilan</p>
                                                    <span class="income-percentange" style="color: black; float:right;"><span class="counter">{{totalputusan()}} </span> <i class="fa fa-envelope-square"></i>
                                                    </span>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="income-range">
                                                    <div class="price-adminpro-rate">
                                                        @if(totalputusan() > 0 )
                                                        <h3 style="color: black;"><span class="counter">{{totalputusan()}}</span> Keputusan</h3>
                                                        @else
                                                        <h3 style="color: black;">Tidak Ada Data</h3>
                                                        @endif
                                                    </div>
                                                    <div class="price-graph">
                                                        <span id="sparkline1"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <img src="{{url('images/logo.png')}}" alt="logo" style="width: 30%; margin-left: auto; margin-right:auto; display:block;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{url('template/js/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{url('template/js/counterup/waypoints.min.js')}}"></script>
<script src="{{url('template/js/counterup/counterup-active.js')}}"></script>
@endsection
