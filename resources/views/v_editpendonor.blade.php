@extends('layout.v_template')
@section('title','Edit Pendonor')
@section('content')
    <!-- Awal card form-->
    <div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Form Data Donor Darah
    </div>
    <div class="card-body">
        <form method="post" action="/user/pendonor/update/{{$user->id_donor}}">
            @csrf
            <div class="col-sm-6">
            <table>    
                <tr class="form-group">
                    <td>
                        <label>Nama</label>
                    </td>
                    <td>
                        <input type="text" name="nama" class="from-control" value="{{ $user->nama }}" placeholder="Input Nama Anda disini !">
                        <div class="text-danger">
                            @error('nama'){{$message}}@enderror
                        </div>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Jenis Kelamin</label>
                    </td>
                    <td>
                        <select class="from-control" name="jenis_kelamin" value="{{ $user->jenis_kelamin}}">
                            <option></option>
                            <option value="laki-laki">Laki - Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <div class="text-danger">
                            @error('jenis_kelamin'){{$message}}@enderror
                        </div>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Alamat</label>
                    </td>
                    <td>
                        <textarea class="form-control" name="alamat" value="{{ $user->alamat }}" placeholder="input alamat anda"></textarea>
                        <div class="text-danger">
                            @error('alamat'){{$message}}
                            @enderror
                        </div>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Nomor HP</label>
                    </td>
                    <td>
                        <input type="text" name="no_hp" class="from-control" value="{{ $user->no_hp }}" placeholder="Input nohp Anda disini !">
                        <div class="text-danger">
                            @error('no_hp'){{$message}}@enderror
                        </div>
                    </td>
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Umur</label>
                    </td>
                    <td>
                        <input type="text" name="umur" class="from-control" value="{{ $user->umur }}" placeholder="Input umur Anda disini !">
                        <div class="text-danger">
                            @error('umur'){{$message}}@enderror
                        </div>
                    </td>                
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Berat Badan</label>
                    </td>
                    <td>
                        <input type="text" name="berat_badan" class="from-control" value="{{ $user->berat_badan }}" placeholder="Input BB Anda disini !">
                        <div class="text-danger">
                            @error('berat_badan'){{$message}}@enderror
                        </div>
                    </td>                
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Golongan Darah</label>
                    </td>
                    <td>
                        <input type="text" name="gol_darah" class="from-control" value="{{ $user->gol_darah }}" placeholder="Input gol.darah Anda disini !">
                        <div class="text-danger">
                            @error('gol_darah'){{$message}}@enderror
                        </div>
                    </td>                
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Donor Ke - </label>
                    </td>
                    <td>
                        <input type="text" name="donor_ke" class="from-control" value="{{ $user->donor_ke }}" placeholder="Input jumlah Anda disini !">
                        <div class="text-danger">
                            @error('donor_ke'){{$message}}@enderror
                        </div>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success" name="simpan">Save</button>
                        <a href="/user" class="btn btn-danger">Cancel</a>
                    </td>
                </tr>
                {{ method_field('POST') }}
            </table></div>
        </form>
    </div>
    </div>
<!-- Akhir card form-->

@endsection