@extends('layout.v_template')
@section('title','Detail Pendonor')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMI - Pendonor</title>
</head>
<body>
<div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Daftar Pendonor Darah
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Umur</th>
                    <th>BB</th>
                    <th>Golongan Darah</th>
                    <th>Donor Ke - </th>
                </tr>
            </thead>          
            <tbody>
                <?php $no=1;?>
                <tr>
                <td>{{$no++}}</td>
                <td>{{$user->nama}}</td>
                <td>{{$user->jenis_kelamin}}</td>
                <td>{{$user->alamat}}</td>
                <td>{{$user->no_hp}}</td>
                <td>{{$user->umur}}</td>
                <td>{{$user->berat_badan}}</td>
                <td>{{$user->gol_darah}}</td>
                <td>{{$user->donor_ke}}</td>
                <th><a href="/user" class="btn btn-success">Kembali</a></th>
            </tr>
            </tbody>

        </table>
    </div>
    </div>
<!-- Akhir card tabel-->
</body>
</html>

@endsection