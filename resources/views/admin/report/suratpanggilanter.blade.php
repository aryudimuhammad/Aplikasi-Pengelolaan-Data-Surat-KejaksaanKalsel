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
        <!-- <h4 style="float:left; margin-top:-0px;">No. Panggilan {{$data->no_panggilan}}</h4> -->
        <h4 style="float:right; margin-top:-0px;">P-9 Surat Panggilan Tersangka</h4>
    </div>

    <table>
        <tr>
            <td style="width: 65%; text-align: center;">
            </td>
            <td style="width: 35%; ">
                <h5 style="margin-top: -0px;">KEPADA YTH,</h5>
                <h5 style="margin-top: -9px;">{{$data->warga->nama_warga}}</h5>
                <h5 style="margin-top: -9px;">di {{$data->kota}}</h5>
            </td>
        </tr>
    </table>

    <p style="margin-left: 30px;">Dengan ini kami minta kedatangan saudara pada : </p>
    <br>
    <table style="margin-left: 30px; margin-top: -16px;">
        <tr>
            <td class="text-left" style="width: 90px;">Hari</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{{$hari}}</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 90px;">Tanggal</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{{$tgl}}</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 90px;">Jam</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{{$jam}} WITA</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 90px;">Tempat</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{{$data->tempat}}</td>
        </tr>
        <tr>
            <td class="text-left" style="width: 90px;">Menghadap</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{{$data->pegawai->nama}}</td>
        </tr>
    </table>
    <br>
    <table style="margin-left: 30px; text-align:justify;">
        <tr>
            <td>
                <p>{!!$data->keterangan!!}</p>
            </td>
        </tr>
    </table>
    <br>

    <br><br><br>
    <table>
        <tr>
            <td style="width: 50%; text-align: center;">
                <br>
                <br>
                <br>
                <!-- <h5>Yang Menerima Perintah </h5> -->
                <br>
                <br>
                <!-- <h5 style="text-decoration:underline;">{{$data->pegawai->nama}}</h5> -->
            </td>
            <td style="width: 50%; text-align: center;">
                <h5>Banjarmasin, {{$now}}</h5>
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


</body>

</html>
