<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User1Model;
 
class User1Controller extends Controller
{
    public function __construct()
    {
        $this->User1Model = new User1Model();
        $this->middleware('auth');
    }
    public function index()
    {
        $data = [
            'user1' => $this->User1Model->allData(),
        ];
        return view('v_user1', $data);
    }


    public function detail($id_resi){
        if (!$this->User1Model->detailData($id_resi)){
            abort(404);
        }
        $data = [
            'user1' => $this->User1Model->detailData($id_resi),
        ];
        return view('v_detailresi', $data);
    }

    public function add(){
        return view('v_addresipen');
    }

    public function insert(){
        //jika validasi data kosong maka tidak bisa melanjutkan ke simpan
        Request()->validate([
            'nama_res' => 'required|unique:tbl_resipen|max:255',
            'alamat_res' => 'required',
            'hp' => 'required',
            'jenis_darah' => 'required',
            'jml_darah' => 'required',
        ]);
        $data = [
            'nama_res' => Request()->nama_res,
            'alamat_res' => Request()->alamat_res,
            'hp' => Request()->hp,
            'jenis_darah' => Request()->jenis_darah,
            'jml_darah' => Request()->jml_darah,
        ];
        
        $this->User1Model->addData($data);
        return redirect()->route('user1')->with('pesan', 'Data berhasil ditambahkan !!!');
    }

    public function edit($id_resi){
        if (!$this->User1Model->detailData($id_resi)){
            abort(404);
        }
        $data = [
            'user1' => $this->User1Model->detailData($id_resi),
        ];
        return view('v_editresipen', $data);
    }

    public function update($id_resi){
        //jika validasi data kosong maka tidak bisa melanjutkan ke simpan
        Request()->validate([
            'nama_res' => 'required|unique:tbl_resipen|max:255',
            'alamat_res' => 'required',
            'hp' => 'required',
            'jenis_darah' => 'required',
            'jml_darah' => 'required',
        ]);
        $data = [
            'nama_res' => Request()->nama_res,
            'alamat_res' => Request()->alamat_res,
            'hp' => Request()->hp,
            'jenis_darah' => Request()->jenis_darah,
            'jml_darah' => Request()->jml_darah,
        ];
        
        $this->User1Model->editData($id_resi, $data);
        return redirect()->route('resipen')->with('pesan', 'Data berhasil di Update !!!');
    }

    public function delete($id_resi){
        $this->User1Model->deleteData($id_resi);
        return redirect()->route('resipen')->with('pesan', 'Data berhasil di Hapus !!!');
    }
}