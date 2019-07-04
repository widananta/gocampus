@extends('layouts.dashboard-app')
@section('b','active')
@section('content')
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-success">
                                        <h4 class="card-title ">Form Input Data Siswa</h4>
                                        <p class="card-category">Isi data dengan baik dan benar!</p>
                                    </div>
                                    <div class="card-body">

                                        <form action="/admin/siswa/store" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Nama Siswa</label>
                                                        <input type="text" name="nama" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Kelas</label>
                                                        <input type="text" name="kelas" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <input type="text" name="jenkel" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Umur</label>
                                                        <input type="text" name="umur" required="required" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input type="text" name="alamat" required="required" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" name="simpan" value="simpan" class="btn btn-success pull-right">Simpan</button>
                                            <a href="/admin/siswa">
                                                <button type="button" class="btn btn-secondary pull-right">Batal</button>
                                            </a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
@endsection