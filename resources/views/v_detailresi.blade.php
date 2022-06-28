@extends('layout.v_template')
@section('title','Detail Resipen')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMI - Resipien</title>
</head>
<body>
<div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Daftar Resipien
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Golongan Darah</th>
                    <th>Donor Ke - </th>
                </tr>
            </thead>          
            <tbody>
                <?php $no=1;?>
                <tr>
                <td>{{$no++}}</td>
                <td>{{$user1->nama_res}}</td>
                <td>{{$user1->alamat_res}}</td>
                <td>{{$user1->hp}}</td>
                <td>{{$user1->jenis_darah}}</td>
                <td>{{$user1->jml_darah}}</td>
                <th><a href="/user1" class="btn btn-success">Kembali</a></th>
            </tr>
            </tbody>

        </table>
    </div>
    </div>
<!-- Akhir card tabel-->
</body>
</html>

@endsection