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
        <h4 style="float:left; margin-top:-0px;">No. Penyidikan {{$data->no_penyidikan}}</h4>
        <h4 style="float:right; margin-top:-0px;">P-8 Surat Perintah Penyidikan</h4>
    </div>

    <table style="margin-left: 30px;">
        <tr>
            <td class="text-left" style="width: 90px;">Pertimbangan</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{!!$data->pertimbangan!!}</td>
        </tr>
    </table>

    <table style="margin-left: 30px; margin-top: -16px;">
        <tr>
            <td class="text-left" style="width: 90px;">Dasar</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{!!$data->dasar!!}</td>
        </tr>
    </table>

    <h4 class="text-center" style="text-decoration:underline; text-align: center;">DIPERINTAHKAN</h4>

    <table style="margin-left: 30px;">
        <tr>
            <td class="text-left" style="width: 90px;">Kepada</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{{$data->pegawai->nama}}</td>
        </tr>
    </table>

    <table style="margin-left: 30px;">
        <tr>
            <td class="text-left" style="width: 90px;">Untuk</td>
            <td style="width:18px;">:</td>
            <td class="text-left">{!!$data->untuk!!}</td>
        </tr>
    </table>

    <table style="margin-left: 30px;">
        <tr>
            <td class="text-left" style="width: 90px;">Selesai</td>
            <td style="width:18px;">:</td>
            <td class="text-left"> . . . . . . . . . . . . . . . . . . .</td>
        </tr>
    </table>

    <!-- <table style="margin-left: 400px; margin-top: 30px;">
        <tr>
            <td class="text-right" style="width: 100px;">Dikeluarkan di</td>
            <td style="width:15px;">:</td>
            <td class="text-right">{{$data->dikeluarkan_di}}</td>
        </tr>
        <tr>
            <td class="text-right" style="width: 100px;">Pada Tanggal</td>
            <td style="width:15px;">:</td>
            <td class="text-right">{{$now}}</td>
        </tr>
    </table> -->
    <br><br><br>
    <table>
        <tr>
            <td style="width: 50%; text-align: center;">
                <br>
                <br>
                <br>
                <h5>Yang Menerima Perintah </h5>
                <br>
                <br>
                <h5 style="text-decoration:underline;">{{$data->pegawai->nama}}</h5>
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
