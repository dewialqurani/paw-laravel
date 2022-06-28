@extends('layout.v_template')
@section('title','Stok')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PMI - Stok</title>
</head>
<body>
<div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Daftar Stok Darah
    </div>
    @csrf
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>x</th>
                    <th>Golongan Darah A</th>
                    <th>Golongan Darah B</th>
                    <th>Golongan Darah AB</th>
                    <th>Golongan Darah O</th>
                </tr>
            </thead>          
            <tbody>
                @foreach ($stok as $data)
                <tr>
                <td></td>
                <td>{{$data->gol_a}}</td>
                <td>{{$data->gol_b}}</td>
                <td>{{$data->gol_ab}}</td>
                <td>{{$data->gol_o}}</td>
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