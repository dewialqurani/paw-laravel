@extends('layout.v_template')
@section('title','User Resipen')

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
<!-- Awal card tabel Resipien-->
<h3>Daftar Resipien</h3>
<div class="card-body">
    <a href="/resipen" class="btn btn-primary btn-sm">Add</a>
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
                    <th>Alamat</th>
                    <th>No.Hp</th>
                    <th>Golongan Darah</th>
                    <th>Jumlah Darah yang Dibutuhkan</th>
                    <th>Action</th>
                </tr>
            </thead>          
            <tbody>
                <?php $no=1;?>
                @foreach ($user1 as $data)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$data->nama_res}}</td>
                <td>{{$data->alamat_res}}</td>
                <td>{{$data->hp}}</td>
                <td>{{$data->jenis_darah}}</td>
                <td>{{$data->jml_darah}}</td>
                <td>
                    <a href="/user1/detail/{{$data->id_resi}}" class="btn btn-success">Detail</a>
                    <a href="/user1/resipen/edit/{{$data->id_resi}}" class="btn btn-warning">Edit</a>
                    <a href="/user1/delete/{{$data->id_resi}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
<!-- Akhir card tabel-->
</body>
</html>
@endsection