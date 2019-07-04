<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        return view('index/index');
    }
    //
    public function jurusan()
    {
        return view('index/jurusan');
    }
    //
    public function snmptn()
    {
        return view('index/snmptn');
    }
    //
    public function alumni()
    {
        return view('index/alumni');
    }
}
