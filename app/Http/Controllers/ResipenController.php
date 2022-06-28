<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 
class ResipenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('v_resipen');
    }
}