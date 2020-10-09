<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Surat Perintah Penyidikan</title>
    <link rel="icon" type="image/png" href="{{url('images/logo.png')}}">
    <style>
        .logo {
            margin-top: 15px;
            float: left;
            margin-right: -5px;
            width: 6%;
            padding: 0px;
            text-align: right;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid;
            padding-left: 5px;
            text-align: center;
            font-size: 10px;
        }

        .judul {
            text-align: center;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 20%;
        }

        .ttd {
            margin-left: 45%;
            text-align: center;

        }

        .ttd2 {
            margin-left: 25%;
            text-align: center;

        }

        .sizeimg {
            width: 60px;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 13%;
        }

        .header {
            margin-top: -40px;
            margin-bottom: 0px;
            text-align: center;
            height: 150px;
            padding: 0px;
        }

        hr {
            margin-top: 10%;
            height: 3px;
            background-color: black;
        }

        br {
            margin-bottom: 5px !important;
        }

        h5 {
            line-height: 0.3;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="logo">
            <img class="sizeimg" src="images/logo.png">
        </div>
        <div class="headtext">
            <h3 style="margin:0px;">KEJAKSAAN REPUBLIK INDONESIA</h3>
            <h2 style="margin:0px;">KEJAKSAAN TINGGI KALIMANTAN SELATAN</h2>
            <p style="margin:0px;">Jl. D.I Panjalitan No.26, Banjarmasin
            </p>
        </div>
        <hr>
        <div>
            <h5><span style="float:left; margin-top:-20px;">Dicetak Oleh : {{ $user }}/{{ $role }}</span><br><br>
                <span style="float:left; margin-top:5px;">Periode :
                    {{Carbon\Carbon::parse($periode)->translatedFormat('F')}}/{{ $year }}</span>
            </h5>

            <h5><span style="float:right; margin-top:-30px;">Tanggal Cetak :
                    {{Carbon\Carbon::parse($now)->translatedFormat('d F Y')}}</span><br><br>
                {{-- <span style="float:right; margin-top:5px;">Halaman :</span> --}}
            </h5>
            <br>
        </div>
    </div>

    <div class="container" style="margin-top:-40px;">
        <h3 style="text-align:center;text-transform: uppercase;">Laporan Surat Perintah Penyidikan(P-8)</h3>

        <table class='table table-bordered nowrap'>
            <thead>
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Tanggal Surat</th>
                    <th scope="col" class="text-center">No Surat</th>
                    <th scope="col" class="text-center">Yang Bertugas</th>
                    <th scope="col" class="text-center">Dari Keterangan (P-4)</th>
                    <th scope="col" class="text-center">Dari Penyelidikan (P-2)</th>
                    <th scope="col" class="text-center">Pertimbangan</th>
                    <th scope="col" class="text-center">Dasar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $d)
                <tr>
                    <td scope="col" class="text-center">{{ $loop->iteration }}</td>
                    <td scope="col" class="text-center">
                        {{Carbon\Carbon::parse($d->created_at)->translatedFormat('d F Y')}}
                    </td>
                    <td scope="col" class="text-center">{{ $d->no_penyidikan }}</td>
                    <td scope="col" class="text-center">{{ $d->pegawai->nama }}</td>
                    <td scope="col" class="text-center">
                        {{ $d->hasil_penyelidikan->permintaan_keterangan->no_pol }}</td>
                    <td scope="col" class="text-center">
                        {{ $d->hasil_penyelidikan->permintaan_keterangan->perintah_penyelidikan->no_penyelidikan}}</td>
                    <td scope="col" class="text-center">{!! $d->pertimbangan !!}</td>
                    <td scope="col" class="text-center">{!! $d->dasar !!}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <br>
        <br>
        <div class="ttd">
            <h5>
                Banjarmasin, {{Carbon\Carbon::parse($now)->translatedFormat('d F Y')}}
            </h5>
            <h5>a.n KEPALA KEJAKSAAN TINGGI KALIMANTAN SELATAN</h5>
            <h5>ASISTEN TINDAK PIDANA UMUM</h5>
            <h5>SELAKU PENUNTUT UMUM</h5>
            <br>
            <br>
            <h5 style="text-decoration:underline;">INDAH LAILA, S.H, M.M</h5>

            <h5>Jaksa Utama Pratama NIP. 197205241997032003</h5>
        </div>

    </div>
</body>

</html>
