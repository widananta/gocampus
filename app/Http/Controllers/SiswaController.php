<?php

namespace App\Http\Controllers;

use App\siswa;
use Carbon\Carbon;
use Image;
use File;
use Symfony\Component\Finder\Iterator\FilenameFilterIterator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class SiswaController extends Controller
{ /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // mengambil data siswa
        $siswa = siswa::all();

        // mengirim data siswa ke view siswa
        return view('admin-siswa/index', ['siswa' => $siswa]);
        // return view('admin-siswa/index');
    }
    //inser store
    public function insert()
    {
        return view('admin-siswa/insert');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kelas' => 'required',
            'jenkel' => 'required',
            'umur' => 'required',
            'alamat' => 'required'
        ]);
        siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'jenkel' => $request->jenkel,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        return redirect('/admin/siswa');
    }
    //edit save

    public function edit($id)
    {
        // mengambil data siswa
        $siswa = siswa::find($id);
        //$siswa = DB::table('siswa')->where('id', $id)->get();
        if ($siswa) {
            return view('admin-siswa/edit', ['siswa' => $siswa]);
        } else {
            // return redirect('/admin/siswa');
            return view('admin-siswa/not-found');
        }
        // mengirim data siswa ke view siswa
    }
    public function save(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'id' => 'required',
            'kelas' => 'required',
            'jenkel' => 'required',
            'umur' => 'required',
            'alamat' => 'required'
        ]);
        $siswa = siswa::find($request->id);
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->jenkel = $request->jenkel;
        $siswa->umur = $request->umur;
        $siswa->alamat = $request->alamat;
        $siswa->save();
        return redirect('admin/siswa');
    } 
    //details upload
    public function details($id)
    {
        // mengambil data siswa
        $siswa = siswa::find($id);
        //$siswa = DB::table('siswa')->where('id', $id)->get();
        if ($siswa) {
            return view('admin-siswa/details', ['siswa' => $siswa]);
        } else {
            // return redirect('/admin/siswa');
            return view('admin-siswa/not-found');
        }
        // mengirim data siswa ke view siswa
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            //req image
            $file = $request->file('image');
            //rename dengan uniqid dan timestamp
            $fileName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
            //simpan file ke tujuan
            $file->storeAs('public/images/', $fileName);
            //update nama foto dalam database
            $siswa = siswa::find($request->id);
            $siswa->foto = $fileName;
            $siswa->save();
            //hapus foto lama dalam folder
            $oldimage = $request->oldimage;
            $filepath=storage_path().'/app/public/images/'.$oldimage;
            unlink($filepath);
            // Storage::delete('images/', $oldimage);
            // $oldimage->delete();
        }
        return redirect('/admin/siswa/details/' . $request->id);
    }
    //delete trash and
    public function delete($id)
    {
        // mengambil data siswa
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('admin/siswa');
        // mengirim data siswa ke view siswa
    }
    public function trash()
    {
        // mengambil data siswa
        $siswa = siswa::onlyTrashed()->get();

        // mengirim data siswa ke view siswa
        return view('admin-siswa/trash', ['siswa' => $siswa]);
    }
    //restore and delete permanents
    public function deletepermanent($id)
    {
        // mengambil data siswa
        $siswa = siswa::onlyTrashed()->where('id', $id);
        $siswa->forceDelete();
        return redirect('/admin/siswa/trash');
        // mengirim data siswa ke view siswa
    }
    public function deletepermanents()
    {
        // mengambil data siswa
        $siswa = siswa::onlyTrashed();
        $siswa->forceDelete();
        return redirect('/admin/siswa/trash');
        // mengirim data siswa ke view siswa
    }
    public function restore($id)
    {
        // mengambil data siswa
        $siswa = siswa::onlyTrashed()->where('id', $id);
        $siswa->restore();
        // mengirim data siswa ke view siswa
        return redirect('/admin/siswa/trash');
    }
}
