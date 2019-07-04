@extends('layouts.dashboard-app')
@section('a','active')
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
		  
		  <a href="/admin/siswa" class="btn btn-success">Kembali</a>
		  <a href="permanents-delete" class="btn btn-danger"onclick="javascript: return confirm('Anda yakin hapus permanen semua data ini ?')">hapus-semua</a>
		  
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
							<?php $number = 0;
							$number++;
							?>
							<tr>
							  <td class="text-center">{{ $p->id }}</td>
							  <td class="text-center">{{ $p->nama }}</td>
							  <td>{{ $p->kelas }}</td>
							  <td>{{ $p->jenkel }}</td>
							  <td>{{ $p->alamat }}</td>
							  <td>{{ $p->umur }}</td>
							  <td>{{ $p->foto }}</td>
							  <td class="td-actions text-right">
								<a href="restore/{{ $p->id }}" class="btn waves-effect waves-light btn-success">Restore</a>
								<a href="perma-delete/{{ $p->id }}" class="btn waves-effect waves-light btn-danger"onclick="javascript: return confirm('Anda yakin hapus permanen data ini?')">Delete</a>
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