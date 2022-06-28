@extends('layout.v_template')
@section('title','Add Resipen')
@section('content')
    <!-- Awal card form-->
    <div class="card mt-4">
    <div class="card-header bg-danger text-black" >
        Form Data Resipien
    </div>
    <div class="card-body">
        <form method="post" action="/resipen/insert">
            @csrf
            <div class="col-sm-6">
            <table>    
                <tr class="form-group">
                    <td>
                        <label>Nama</label>
                    </td>
                    <td>
                        <input type="text" name="nama_res" class="from-control" value="{{ old('nama_res')}}" placeholder="Input Nama Anda disini !">
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
                        <textarea class="form-control" name="alamat_res" value="{{ old('alamat_res')}}" placeholder="input alamat anda"></textarea>
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
                        <input type="text" name="hp" class="from-control" value="{{ old('hp')}}" placeholder="Input nohp Anda disini !">
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
                        <input type="text" name="jenis_darah" class="from-control" value="{{ old('jenis_darah')}}" placeholder="Input gol.darah Anda disini !">
                        <div class="text-danger">
                            @error('jenis_darah'){{$message}}@enderror
                        </div>
                    </td>                
                </tr>
                <tr class="form-group">
                    <td>
                        <label>Donor Ke - </label>
                    </td>
                    <td>
                        <input type="text" name="jml_darah" class="from-control" value="{{ old('jml_darah')}}" placeholder="Input jumlah Anda disini !">
                        <div class="text-danger">
                            @error('jml_darah'){{$message}}@enderror
                        </div>
                    </td>                
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-success btn-sm" name="simpan">Save</button>
                        <button type="reset" class="btn btn-danger" name="batal">Cancel</button>
                    </td>
                </tr>
                {{ method_field('POST') }}
            </table></div>
        </form>
    </div>
    </div>
<!-- Akhir card form-->

@endsection