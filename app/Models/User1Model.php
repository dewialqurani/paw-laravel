<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User1Model extends Model
{
    public function allData(){
        return DB::table('tbl_resipen')->get();
    }


    public function detailData($id_resi){
        return DB::table('tbl_resipen')->where('id_resi', $id_resi)->first();
    }


    public function addData($data)
    {
        DB::table('tbl_resipen')->insert($data);
    }

    public function editData($id_resi, $data)
    {
        DB::table('tbl_resipen')->where('id_resi', $id_resi)->update($data);
    }

    public function deleteData($id_resi)
    {
        DB::table('tbl_resipen')->where('id_resi', $id_resi)->delete();
    }
}