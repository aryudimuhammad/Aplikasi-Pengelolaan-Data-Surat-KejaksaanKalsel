<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Terima</title>
    <link rel="icon" type="image/png" href="{{url('images/logo.png')}}">
    <style>
        .logo {
            margin-top: 15px;
            float: left;
            margin-right: -5px;
            width: 15%;
            padding: 0px;
            text-align: right;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 0px solid;
            font-size: 14px;
        }

        .judul {
            text-align: center;
        }

        .headtext {
            float: right;
            margin-left: 0px;
            width: 75%;
            padding-left: 0px;
            padding-right: 10%;
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
            padding-right: 10%;
        }

        .header {
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
            line-height: 0.1;
        }
    </style>
</head>

<body>

    <div class="header">
        <div class="logo">
            <img class="sizeimg" src="images/logo.png">
        </div>
        <div class="headtext">
            <h4 style="margin:0px;">KEJAKSAAN REPUBLIK INDONESIA</h4>
            <h3 style="margin:0px;">KEJAKSAAN TINGGI KALIMANTAN SELATAN</h3>
            <p style="margin:0px;">Jl. D.I Panjalitan No.26, Banjarmasin
            </p>
        </div>
        <hr>
        <h4 style="float:right; margin-top:-0px;">P-1</h4>
    </div>


    <div class="container" style="margin-top:-40px;">
        <h3 style="text-align:center;text-transform: uppercase;">Laporan Surat Terima</h3>
        <br>
        <p> -------- Yang Bertanda tangan dibawah ini saya : --------------------------------------------------</p>
        <p style="text-align: center;"> --------------: INDAH LAILA, S.H, M.M :--------------</p>
        <p style="text-align: justify;">Jaksa Utama Pratama NIP. 197205241997032003 Jabatan Kepala Kejaksaan Tinggi Kalimantan Selatan pada kantor tersebut diatas menerangkan dengan sebenernya bahwa pada hari ini tanggal {{$now}} Pukul {{$time}} Waktu Setempat, telah datang ke SPKT seorang @if($data->jenis_kelamin == 1) laki-laki @else perempuan @endif mengaku : </p>

        <table style="padding-bottom: 3px;">
            <tr>
                <td class="text-left" style="padding-left: 60px; width:160px;">1. Nama Lengkap</td>
                <td style="width:18px;">:</td>
                <td class="text-left">{{$data->nama_warga}}</td>
            </tr>
            <tr>
                <td class="text-left" style="padding-left: 60px;">2. Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td class="text-left">{{$data->tempat_lahir}}, {{$data->tgl_lahir}}</td>
            </tr>
            <tr>
                <td class="text-left" style="padding-left: 60px;">3. Agama</td>
                <td>:</td>
                <td class="text-left"> @if($data->agama == 1) Islam @elseif($data->agama == 2) Kristen Protestan @elseif($data->agama == 3) Katolik @elseif($data->agama == 4) Hindu @elseif($data->agama == 5) Buddha @else Kong Hu Cu @endif</td>
            </tr>
            <tr>
                <td class="text-left" style="padding-left: 60px;">4. Kewarganegaraan</td>
                <td>:</td>
                <td class="text-left">{{$data->kewarganegaraan}}</td>
            </tr>
            <tr>
                <td class="text-left" style="padding-left: 60px;">5. Pekerjaan</td>
                <td>:</td>
                <td class="text-left">{{$data->pekerjaan}}</td>
            </tr>
            <tr>
                <td class="text-left" style="padding-left: 60px;">6. Alamat</td>
                <td>:</td>
                <td class="text-left">{{$data->alamat}}</td>
            </tr>
            </tr>
            <tr>
                <td class="text-left" style="padding-left: 60px;">7. Kontak</td>
                <td>:</td>
                <td class="text-left">{{$data->kontak}}</td>
            </tr>
        </table>

        <p style="text-align: justify;">{!!$surat->uraian!!}</p>
        <p>Demikian Surat Tanda Penerimaan Laporan ini dibuat untuk dapat digunakan seperlunya.</p>
        <br>
        <br>

        <table>
            <tr>
                <td style="width: 50%; text-align: center;">
                    <br>
                    <br>
                    <br>
                    <h5>Pelapor</h5>
                    <br>
                    <br>
                    <h5 style="text-decoration:underline;">{{$data->nama_warga}}</h5>
                </td>
                <td style="width: 50%; text-align: center;">
                    <h5>Banjarmasin, {{Carbon\Carbon::parse($now)->translatedFormat('d F Y')}}</h5>
                    <h5>a.n KEPALA KEJAKSAAN TINGGI KALIMANTAN SELATAN</h5>
                    <h5>ASISTEN TINDAK PIDANA UMUM</h5>
                    <h5>SELAKU PENUNTUT UMUM</h5>
                    <br>
                    <br>
                    <h5 style="text-decoration:underline;">INDAH LAILA, S.H, M.M</h5>
                    <h5>Jaksa Utama Pratama NIP. 197205241997032003</h5>
                </td>
            </tr>
        </table>

    </div>

</body>

</html>
