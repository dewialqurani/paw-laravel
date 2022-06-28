@extends('layout.v_template')
@section('title','Edit Resipen')
@section('content')
    <!-- Awal card form-->
    <div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Form Data Resipien
    </div>
    <div class="card-body">
        <form method="POST" action="/user1/resipen/update/{{$user1->id_resi}}">
            @csrf
            <div class="col-sm-6">
            <table>    
                <tr class="form-group">
                    <td>
                        <label>Nama</label>
                    </td>
                    <td>
                        <input type="text" name="nama_res" class="from-control" value="{{ $user1->nama_res }}" placeholder="Input Nama Anda disini !">
                        <div class="text-danger">
                            @error('nama_res'){{$message}}@enderror
                        </div>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Alamat</label>
                    </td>
                    <td>
                        <textarea class="form-control" name="alamat_res" value="{{ $user1->alamat_res }}" placeholder="input alamat anda"></textarea>
                        <div class="text-danger">
                            @error('alamat_res'){{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Nomor HP</label>
                    </td>
                    <td>
                        <input type="text" name="hp" class="from-control" value="{{ $user1->hp }}" placeholder="Input nohp Anda disini !">
                        <div class="text-danger">
                            @error('hp'){{$message}}@enderror
                        </div>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Golongan Darah</label>
                    </td>
                    <td>
                        <input type="text" name="jenis_darah" class="from-control" value="{{ $user1->jenis_darah }}" placeholder="Input gol.darah Anda disini !">
                        <div class="text-danger">
                            @error('jenis_darah'){{$message}}@enderror
                        </div>
                    </td>                
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Jumlah Darah yang Dibutuhkan  </label>
                    </td>
                    <td>
                        <input type="text" name="jml_darah" class="from-control" value="{{ $user1->jml_darah }}" placeholder="Input jumlah Anda disini !">
                        <div class="text-danger">
                            @error('jml_darah'){{$message}}@enderror
                        </div>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success" name="simpan">Save</button>
                        <a href="/user1" class="btn btn-danger">Cancel</a>
                    </td>
                </tr>
                {{ method_field('POST') }}
            </table></div>
        </form>
    </div>
    </div>
<!-- Akhir card form-->

@endsection