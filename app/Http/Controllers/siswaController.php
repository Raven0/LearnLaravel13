<?php

namespace App\Http\Controllers;

use App\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index(){
        $data = siswa::all();
        
        return view('siswa.index', compact('data'));
    }
}
