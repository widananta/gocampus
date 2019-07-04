<?php

namespace App\Http\Controllers;

use App\pt;
use Illuminate\Http\Request; 

class PTController extends Controller
{
    public function index()
    {
        $pt = pt::all();

        // mengirim data siswa ke view siswa
        return view( 'admin-rekomendasi/pt/index', ['pt' => $pt]);
        // return view('layouts/dashboard-rekomendasi-app');

        // return view('admin-siswa/index');
    }
}
