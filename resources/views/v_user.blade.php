@extends('layout.v_template')
@section('title','User Pendonor')

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
    <!-- Awal card tabel Resipien-->
    <h3>Daftar Pendonor Darah</h3>
    <div class="card-body">
    <a href="/pendonor" class="btn btn-primary btn-sm">Add</a>
    @csrf
    @if (session('pesan'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa fa-check"></i> Success !</h4>
            {{session('pesan')}}.
        </div>
    @endif
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
                    <th>Donor Ke</th>
                    <th>Action</th>
                </tr>
            </thead>          
            <tbody>
                <?php $no=1;?>
                @foreach ($user as $data)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->jenis_kelamin}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->no_hp}}</td>
                <td>{{$data->umur}}</td>
                <td>{{$data->berat_badan}}</td>
                <td>{{$data->gol_darah}}</td>
                <td>{{$data->donor_ke}}</td>
                <td>
                    <a href="/user/detail/{{$data->id_donor}}" class="btn btn-success">Detail</a>
                    <a href="/user/pendonor/edit/{{$data->id_donor}}" class="btn btn-warning">Edit</a>
                    <a href="/user/delete/{{$data->id_donor}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
<!-- Akhir card tabel-->

<!-- Awal card tabel Resipien-->
</body>
</html>
@endsection