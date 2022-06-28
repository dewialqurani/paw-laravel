<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PendonorModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_pendonor')->get();
    }

    public function detailData($id_donor){
        return DB::table('tbl_pendonor')->where('id_donor', $id_donor)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_pendonor')->insert($data);
    }

    public function editData($id_donor, $data)
    {
        DB::table('tbl_pendonor')->where('id_donor', $id_donor)->update($data);
    }

    public function deleteData($id_donor)
    {
        DB::table('tbl_pendonor')->where('id_donor', $id_donor)->delete();
    }
}
