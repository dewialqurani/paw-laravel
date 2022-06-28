<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserModel;
 
class UserController extends Controller
{
    public function __construct()
    {
        $this->UserModel = new UserModel();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'user' => $this->UserModel->allData(),
        ];
        return view('v_user', $data);
    }


    public function detail($id_donor){
        if (!$this->UserModel->detailData($id_donor)){
            abort(404);
        }
        $data = [
            'user' => $this->UserModel->detailData($id_donor),
        ];
        return view('v_detailuser', $data);
    }

    public function add(){
        return view('v_addpendonor');
    }

    public function insert(){
        //jika validasi data kosong maka tidak bisa melanjutkan ke simpan
        Request()->validate([
            'nama' => 'required|unique:tbl_pendonor|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'umur' => 'required',
            'berat_badan' => 'required',
            'gol_darah' => 'required',
            'donor_ke' => 'required',
        ]);
        $data = [
            'nama' => Request()->nama,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'no_hp' => Request()->no_hp,
            'umur' => Request()->umur,
            'berat_badan' => Request()->berat_badan,
            'gol_darah' => Request()->gol_darah,
            'donor_ke' => Request()->donor_ke,
        ];
        
        $this->UserModel->addData($data);
        return redirect()->route('user')->with('pesan', 'Data berhasil ditambahkan !!!');
    }

    public function edit($id_donor){
        if (!$this->UserModel->detailData($id_donor)){
            abort(404);
        }
        $data = [
            'user' => $this->UserModel->detailData($id_donor),
        ];
        return view('v_editpendonor', $data);
    }

    public function update($id_donor){
        //jika validasi data kosong maka tidak bisa melanjutkan ke simpan
        Request()->validate([
            'nama' => 'required|unique:tbl_pendonor|max:255',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'umur' => 'required',
            'berat_badan' => 'required',
            'gol_darah' => 'required',
            'donor_ke' => 'required',
        ]);
        $data = [
            'nama' => Request()->nama,
            'jenis_kelamin' => Request()->jenis_kelamin,
            'alamat' => Request()->alamat,
            'no_hp' => Request()->no_hp,
            'umur' => Request()->umur,
            'berat_badan' => Request()->berat_badan,
            'gol_darah' => Request()->gol_darah,
            'donor_ke' => Request()->donor_ke,
        ];
        
        $this->UserModel->editData($id_donor, $data);
        return redirect()->route('pendonor')->with('pesan', 'Data berhasil di Update !!!');
    }

    public function delete($id_donor){
        $this->UserModel->deleteData($id_donor);
        return redirect()->route('pendonor')->with('pesan', 'Data berhasil di Hapus !!!');
    }
}