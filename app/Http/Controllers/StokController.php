<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StokModel;
 
class StokController extends Controller
{
    public function __construct(){
        $this->StokModel = new StokModel();
        $this->middleware('auth');
    }
    
    public function index()
    {
        $data = [
            'stok'=>$this->StokModel->allData(),
        ];
        return view('v_stok',$data);
    }
}