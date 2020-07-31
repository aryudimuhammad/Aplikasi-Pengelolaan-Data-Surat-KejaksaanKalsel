<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="{{route('settingIndex')}}"><img src="{{ url('images/profile/'. Auth::user()->gambar )}}" style="width:100px; height:100px;" alt="" />
            </a>
            <h3>{{ Auth::user()->name }}</h3>
            <p>@if(Auth::user()->role == 1) Admin @elseif(Auth::user()->role == 2) - @endif</p>
            <strong>AP+</strong>
        </div>
        <div class="left-custom-menu-adp-wrap">
            <ul class="nav navbar-nav left-sidebar-menu-pro">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}"><i class="fa big-icon fa-tachometer"></i> <span class="mini-dn">Dashboard</span></a>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-server"></i> <span class="mini-dn">Data Master</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('jabatanIndex')}}" class="dropdown-item">Data Jabatan</a>
                        <a href="{{route('pangkatIndex')}}" class="dropdown-item">Data Pangkat</a>
                        <a href="{{route('pegawaiIndex')}}" class="dropdown-item">Data Pegawai</a>
                    </div>
                </li>
                <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-dropbox"></i> <span class="mini-dn">Pengelolaan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                        <a href="{{route('terimaIndex')}}" class="dropdown-item">Surat Terima</a>
                        <a href="{{route('penyelidikanIndex')}}" class="dropdown-item">Perintah Penyilidikan</a>
                        <a href="{{route('keteranganIndex')}}" class="dropdown-item">Permintaan Keterangan</a>
                        <a href="{{route('hasilpenyelidikanIndex')}}" class="dropdown-item">Hasil Penyelidikan</a>
                        <a href="{{route('perintahpenyidikanIndex')}}" class="dropdown-item">Perintah Penyidikan</a>
                        <a href="{{route('panggilanIndex')}}" class="dropdown-item">Panggilan Tersangka</a>
                        <a href="{{route('hasilpenyidikanIndex')}}" class="dropdown-item">Hasil Penyidikan</a>
                        <a href="{{route('putusanIndex')}}" class="dropdown-item">Keputusan Pengadilan</a>
                    </div>
                </li>
                <li class="nav-item"><a href="{{route('settingIndex')}}" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-cogs"></i> <span class="mini-dn">Setting</span> </a>
                </li>
                <li class="nav-item"><a href="{{route('userIndex')}}" role="button" aria-expanded="false" class="nav-link"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Admin</span> </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
