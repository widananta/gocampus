@extends('layouts.welcome')
@section('b','active')
@section('content')
		<div class="container">
			<div class="container-fluid">
			
				<h2 class="text-center"><strong>Cari Jurusan</strong></h2>
				<p class="text-center" style="padding-bottom:30px;">Cari Jurusan yang Sesuai dengan Minat Anda</p>
<!--
			 Jangan Dihapus, Buat Jaga-Jaga
				<div class="input-group md-form form-sm form-1 pl-0">
					<div class="btn-group search-panel">
						<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span id="search_concept">Semua </span></button>
						<div class="dropdown-menu">
							<a class="dropdown-item" href="#">Semua</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Program Studi</a>
							<a class="dropdown-item" href="#">Perguruan Tinggi</a>
						</div>
					</div>
					<input class="form-control my-0 py-1" type="text" placeholder="Cari sesuatu disini . . ." aria-label="Search">
					<div class="btn-group">
						<button class="btn btn-default gocampus-color" type="button">
							<i class="material-icons">search</i>
						</button>
					</div>
				</div>
-->
				<div class="row pull-right">
                <form method="post">
					<div class="kotak-filter">
						<label>Filter Kelompok</label>
                        <input type="hidden" name="submit" value="submit"/>
						<select class="form-control" name="kelompok" onchange="this.form.submit();">
							<option value="" selected>Pilih salah satu</option>
							<option value="Saintek">Saintek</option>
							<option value="Soshum">Soshum</option>
						</select>
					</div>
					<div class="kotak-filter">
						<label>Filter Nilai</label>
						<select class="form-control" name="nilai">
							<option value="">Pilih salah satu</option>
							<option value="1">100-81</option>
							<option value="2">80-61</option>
							<option value="1">60-41</option>
							<option value="2">40-21</option>
							<option value="1">20-0</option>
						</select>
					</div>
					<div class="kotak-filter">
						<label>Filter Mapel</label>
						<select class="form-control" name="mapel" >
							<option value="" selected>Pilih salah satu</option>
							<option value="Matematika">Matematika</option>
							<option value="IPS">IPS</option>
							<option value="IPA">IPA</option>
							<option value="Bahasa Indonesia">Bahasa Indonesia</option>
							<option value="Bahasa Inggris">Bahasa Inggris</option>
							<option value="Kimia">Kimia</option>
							<option value="Fisika">Fisika</option>
						</select>
					</div>
					<div class="kotak-filter">
						<label>Filter Hobi</label>
						<select class="form-control" name="hobi">
							<option value="" selected>Pilih salah satu</option>
							<option value="Voli">Voli</option>
							<option value="Futsal">Futsal</option>
							<option value="Tari">Tari</option>
							<option value="Game">Game</option>
						</select>
                        <button type="submit">Submit</button>
					</div>
                 </form>
				</div>
				<div class="table-responsive">
					<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
					  <thead>
						<tr>
						  <th class="th">Nomor
						  </th>
						  <th class="th">Program Studi
						  </th>
						  <th class="th">Perguruan Tinggi
						  </th>
						  <th class="th">Kelompok
						  </th>
						  <th class="th">Kuota SNMPTN
						  </th>
						  <th class="th">Kuota SBMPTN
						  </th>
						  <th class="th">Kuota Mandiri
						  </th>
						</tr>
					  </thead>
					  <tbody>
                          <tr>
                              <td>1</td>
                              <td>Teknik Informatika</td>
                              <td>ITS</td>
                              <td>Saintek</td>
                              <td>50</td>
                              <td>40</td>
                              <td>40</td>
                              <td>40</td>
                          </tr>
					  </tbody>
					</table>
				</div>
				
			</div>
		</div>
    
@endsection