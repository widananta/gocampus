@extends('layouts.dashboard-app')
@section('b','active')
@section('content')
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-success">
                                        <h4 class="card-title ">{{ $siswa->nama }}</h4>
                                        <p class="card-category">Foto</p>
                                        <form action="/admin/siswa/upload/{{ $siswa->id }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                        @if($siswa->foto=='')
                                        <img src="{{ asset('storage/images/profile_default.png')}}" height="200px" width="150px" />
                                        @else
                                        <img src="{{ asset('storage/images/'.$siswa->foto)}}" height="200px" width="150px" />
                                        @endif
                                                {{-- <input type="hidden" name="id" value="{{ $siswa->id }}"> --}}
                                                <input type="hidden" name="oldimage" value="{{ $siswa->foto }}">
                                                <input type="submit" name="submit" value="Ubah Gambar" class="file-upload btn btn-info"><br>
                                                    <input type="file" required name="image" valign="top" value="{{ $siswa->foto }}" class="file-upload btn btn-info"/> {{--
                                                    <input type="file" name="image" value="{{ $siswa->foto }}" class="pull-right" /> --}}
                                        </form>
                                    </div>
                                    <div class="card-body">

                                        <form action="/admin/siswa/save" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" value="{{ $siswa->id }}"> 
                                                        <label class="bmd-label-floating">Nama Siswa</label>
                                                        {{-- <input type="text" name="nama" readonly class="form-control" value="{{ $siswa->nama }}"> --}}
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="bmd-label-floating">Kelas</label>
                                                        <input type="text" name="kelas" readonly class="form-control" value="{{ $siswa->kelas }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <input type="text" name="jenkel" readonly class="form-control" value="{{ $siswa->jenkel }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Umur</label>
                                                        <input type="text" name="umur" readonly class="form-control" value="{{ $siswa->umur }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat</label>
                                                        <input type="text" name="alamat" readonly class="form-control" value="{{ $siswa->alamat }}">
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <button type="submit" name="simpan" value="simpan" class="btn btn-success pull-right">Simpan</button> --}}
                                            <a href="/admin/siswa">
                                                <button type="button" class="btn btn-secondary pull-right">Kembali</button>
                                            </a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
@endsection