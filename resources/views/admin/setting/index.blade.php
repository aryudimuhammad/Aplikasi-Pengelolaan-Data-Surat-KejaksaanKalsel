@extends('layouts.admin.app')

@section('title') Setting Profile @endsection

@section('head')
<style>
    #imgView {
        width: 100%;
        height: 100%;
    }

    #gambar_nodin {
        width: 100%;
        height: 100%;
    }

    .loadAnimate {
        animation: setAnimate ease 2.5s infinite;
    }

    @keyframes setAnimate {
        0% {
            color: #000;
        }

        50% {
            color: transparent;
        }

        99% {
            color: transparent;
        }

        100% {
            color: #000;
        }
    }

    .custom-file-label {
        cursor: pointer;
    }
</style>
@endsection

@section('content')
<!-- Header-->
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list shadow-reset">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="breadcome-heading">
                                <h1>Profile</h1>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <ul class="breadcome-menu">
                                <li><a href="{{route('dashboard')}}">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Profile</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content-->
<div class="project-details-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="project-details-wrap shadow-reset">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                            <div class="project-details-title">
                                <h2 style="margin-left:4%;"><span class="profile-details-name-nn">Profile</span>
                                    {{ Auth::user()->name }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 float-left">
                            <br>
                            <div class="project-details-mg">
                                <div class="row">
                                    <div>
                                        <img src="{{ url('images/profile/'. Auth::user()->gambar )}}"
                                            alt="Gambar Tidak Ada" id="gambar"
                                            style="width: 75%; height:75%; display: block; margin: auto;">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="project-details-mg">
                                <div class="row">
                                    <div>
                                        <img src="/images/nopict.png" alt="Gambar Tidak Ada" id="imgView"
                                            class="card-img-top img-fluid"
                                            style="width: 75%; height:75%; display: block; margin: auto;">
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="project-details-mg">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="project-details-st">
                                            <span><strong>Nama :</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="project-details-dt">
                                            <span>{{ Auth::user()->name }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-details-mg">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="project-details-st">
                                            <span><strong>Email :</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="project-details-dt">
                                            <span>{{ Auth::user()->email }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="project-details-mg">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="project-details-st">
                                            <span><strong>Alamat :</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="project-details-dt">
                                            <span>{{ Auth::user()->alamat }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="project-details-mg">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="project-details-st">
                                            <span><strong>Phone :</strong></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="project-details-dt">
                                            <span>1{{ Auth::user()->telp }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 float-right">
                            <div class="project-details-tab">
                                <ul class="nav nav-tabs res-pd-less-sm">
                                    <li class="active"><a data-toggle="tab" href="#home">Setting Profile</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#menu1">Ganti Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content res-tab-content-project">
                                    <!----setting profile -->
                                    <div id="home" class="tab-pane fade in active animated zoomInLeft">
                                        <div class="user-details-completeness">
                                            <div class="row">
                                                <form enctype="multipart/form-data" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <br>
                                                        <div class="form-group">
                                                            <label for="name">Nama Lengkap</label>
                                                            <input type="text" name="name" id="name"
                                                                class="form-control" placeholder="Masukkan Nama Lengkap"
                                                                value="{{ Auth::user()->name }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">E-Mail</label>
                                                            <input type="email" name="email" id="email"
                                                                class="form-control" placeholder="Masukkan Email"
                                                                value="{{ Auth::user()->email }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="telp">Nomor Telepon</label>
                                                            <input type="number" name="telp" id="telp"
                                                                class="form-control"
                                                                placeholder="Masukkan Nomor Telepon"
                                                                value="{{ Auth::user()->telp }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="keterangan">Role Pengguna</label>
                                                            <input type="text" name="keterangan" id="keterangan"
                                                                class="form-control" placeholder="Masukkan Role"
                                                                value="{{ Auth::user()->keterangan }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="alamat">Alamat</label>
                                                            <textarea name="alamat" id="alamat" class="form-control"
                                                                placeholder="Masukkan Alamat">{{ Auth::user()->alamat }}</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gambar">Gambar</label>
                                                            <input type="file" name="pict" id="pict"
                                                                class="form-control"
                                                                onchange="document.getElementById('pict').value = this.value;"
                                                                aria-describedby="pict" value="{{old('pict')}}">
                                                            <p>Note : Masukkan Gambar jika ingin mengubah Gambar</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" class="btn btn-danger"
                                                            data-dismiss="modal">Reset</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!----ganti password -->
                                    <div id="menu1" class="tab-pane fade animated bounceInUp">
                                        <div class="project-details-completeness">
                                            <br>
                                            <br>
                                            <form method="post">
                                                {{ method_field('patch') }}
                                                @csrf
                                                <div class="form-group">
                                                    <label for="password_lama">Password Lama</label>
                                                    <input type="password" name="password_lama" id="password_lama"
                                                        class="form-control" placeholder="Masukkan Password Lama">
                                                    <p>Note : Masukkan Password jika ingin mengubah Password</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password_baru">Password Baru</label>
                                                    <input type="password" name="password_baru" id="password_baru"
                                                        class="form-control" placeholder="Masukkan Password Baru">
                                                    <p>Note : Masukkan Password jika ingin mengubah Password</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="konfirmasi_password">Konfirmasi Password</label>
                                                    <input type="password" name="konfirmasi_password"
                                                        id="konfirmasi_password" class="form-control"
                                                        placeholder="Konfirmasi Password">
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-danger"
                                                        data-dismiss="modal">Reset</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
                    url: "{{url('/admin/user/delete/')}}" + '/' + id,
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

<script>
    $("#pict").change(function(event) {
        fadeInAdd();
        getURL(this);
    });

    $("#pict").on('click', function(event) {
        fadeInAdd();
    });

    function getURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            var filename = $("#pict").val();
            filename = filename.substring(filename.lastIndexOf('\\') + 1);
            reader.onload = function(e) {
                debugger;
                $('#imgView').attr('src', e.target.result);
                $('#imgView').hide();
                $('#imgView').fadeIn(500);
                $('.custom-file-label').text(filename);
            }
            reader.readAsDataURL(input.files[0]);
        }
        $(".alert").removeClass("loadAnimate").hide();
    }

    function fadeInAdd() {
        fadeInAlert();
    }

    function fadeInAlert(text) {
        $(".alert").text(text).addClass("loadAnimate");
    }
</script>
@endsection
