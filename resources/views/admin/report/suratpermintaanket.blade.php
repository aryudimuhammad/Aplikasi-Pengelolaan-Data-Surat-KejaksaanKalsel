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
        <h4 style="float:left; margin-top:-0px;">P-4 Surat Permintaan Keterangan</h4>
        <h4 style="float:right; margin-top:-0px;">Banjarmasin, {{$now}}</h4>
    </div>

    <table style="margin-top: -20px;">
        <tr>
            <td class="text-left" style="width: 60px;">No. Pol</td>
            <td style=" width:18px;">:</td>
            <td class="text-left">{{$data->no_pol}}</td>
        </tr>
        <tr>
            <td class="text-left">Perihal</td>
            <td>:</td>
            <td class="text-left">{{$data->perihal}}</td>
        </tr>
    </table>

    <table>
        <tr>
            <td style="width: 50%; text-align: center;">
            </td>
            <td style="width: 50%; text-align: center;">
                <h5>Kepada</h5>
                <h5>{{$data->warga->nama_warga}}</h5>
                <br>
                <br>
                <h5 style="text-decoration:underline;">Di</h5>
                <h5>{{$data->warga->alamat}}</h5>
            </td>
        </tr>
    </table>

    <p style="text-align: justify;">{!!$data->uraian!!}</p>

</body>

</html>
