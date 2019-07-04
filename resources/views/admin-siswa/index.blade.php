@extends('layouts.dashboard-app')
@section('b','active')
@section('content')
	<div class="content">
        <div class="container-fluid">
		
		  <div class="alert alert-success" style="padding-top:10px; padding-bottom: 10px; margin-bottom: 50px;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      Data berhasil disimpan !
					</span>
		  </div>
		  
		  <a href="/admin/siswa/insert" class="btn btn-success">Tambah Data</a>
		  <a href="/admin/siswa/trash" class="btn btn-danger">Data Dihapus</a>
		  
		  <div class="row">
			  <div class="col-md-12">
				  <div class="card">
					<div class="card-header card-header-success">
					  <h4 class="card-title ">Data Siswa</h4>
					  <p class="card-category">Data siswa meliputi NIS, nama, kelas, dan kontak yang dapat dihubungi</p>
					</div>
					<div class="card-body">
					
					  <div class="table-responsive">
						<table class="table" id="tabel-rama">
						  
						  <thead class=" text-success">
							<th class="text-center">
							  No.
							</th>
							<th>
							  Nama
							</th>
							<th>
							  Kelas
							</th>
							<th>
							  Jenkel
							</th>
							<th>
							  Alamat
							</th>
							<th>
							  Umur
							</th>
							<th>
							  Foto
							</th>
							<th class="text-right">
							  Aksi
							</th>
						  </thead>
						  <tbody>
							@foreach($siswa as $p)
							<tr>
							  <td class="text-center">{{ $p->id }}</td>
							  <td class="text-center">{{ $p->nama }}</td>
							  <td>{{ $p->kelas }}</td>
							  <td>{{ $p->jenkel }}</td>
							  <td>{{ $p->alamat }}</td>
							  <td>{{ $p->umur }}</td>
							  <td>
                                                                @if($p->foto=='')
                                                                    <img src="{{ asset('storage/images/profile_default.png')}}" alt="" height="50px" width="30px">
                                                                @else
                                                                    <img src="{{ asset('storage/images/'.$p->foto)}}" alt=""  height="50px" width="30px">
                                                                @endif</td>
							  <td class="td-actions text-right">
								<a href="siswa/details/{{ $p->id }}" class="btn waves-effect waves-light btn-success"> <i class="material-icons">visibility</i></a>
								<a href="siswa/edit/{{ $p->id }}" class="btn waves-effect waves-light btn-success"> <i class="material-icons">edit</i></a>
								<a href="siswa/delete/{{ $p->id }}" class="btn waves-effect waves-light btn-danger"onclick="javascript: return confirm('Anda yakin hapus ?')"> <i class="material-icons">close</i></a>
							  </td>
							</tr>
							@endforeach
							
						  </tbody>
						</table>
					  </div>
					</div>
				  </div>
				</div>
				</div>
			  
			</div>
		  </div>
@endsection