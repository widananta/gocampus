@extends('layouts.welcome')
@section('c','active')
@section('content')
		<div class="container">
			<div class="container-fluid">
			
				<h2 class="text-center"><strong>Riwayat SNMPTN</strong></h2>
				<p class="text-center" style="padding-bottom:20px;">Lihat Rekam Jejak SNMPTN Tiap Tahun</p>
				
				<div class="row pull-right">
					<div class="kotak-filter">
						<label>Filter Prodi</label>
						<select class="form-control">
							<option value="" disabled selected>Pilih salah satu</option>
							<option value="1">Teknik Informatika</option>
							<option value="2">Data dinamis</option>
						</select>
					</div>
					<div class="kotak-filter">
						<label>Filter PTN</label>
						<select class="form-control">
							<option value="" disabled selected>Pilih salah satu</option>
							<option value="1">UNESA</option>
							<option value="2">Data dinamis</option>
						</select>
					</div>
				</div>
				
				<canvas id="canvas" style="background-color: aliceblue;"></canvas>	
				
			</div>
		</div>

            <div class="container">
			<div class="container-fluid">
                
                <hr>
			     
                <div class="table-responsive">
				
					<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
					  <thead>
						<th class="text-center">
                          No.
                        </th>
                        <th>
                          Program Studi
                        </th>
                        <th>
                          Perguruan Tinggi
                        </th>
                        <th>
                          Tahun
                        </th>
                        <th>
                          Kuota SNMPTN
                        </th>
						<th>
                          Jumlah Peminat
                        </th>
					  </thead>
					  <tbody>
                        <tr>
                          <td class="text-center">
                            1
                          </td>
                          <td>
                            Teknik Informatika
                          </td>
                          <td>
                            Universitas Negeri Surabaya
                          </td>
                          <td class="text-center">
                            2018
                          </td>
                          <td class="text-center">
                            24
                          </td>
                          <td class="text-center">
                            1000
                          </td>
                        </tr>
                          <tr>
							  <td class="text-center">
                                2
                              </td>
                              <td>
                                Sistem Informasi
                              </td>
                              <td>
                                Universitas Negeri Surabaya
                              </td>
                              <td class="text-center">
                                2018
                              </td>
                              <td class="text-center">
                                24
                              </td>
                              <td class="text-center">
                                1000
                              </td>
                          </tr>
                          <tr>
							  <td class="text-center">
                                3
                              </td>
                              <td>
                                Pendidikan Teknologi Informasi
                              </td>
                              <td>
                                Universitas Negeri Surabaya
                              </td>
                              <td class="text-center">
                                2018
                              </td>
                              <td class="text-center">
                                12
                              </td>
                              <td class="text-center">
                                1000
                              </td>
                          </tr>
                          <tr>
							  <td class="text-center">
                                4
                              </td>
                              <td>
                                Kurikulum Teknologi dan Pendidikan
                              </td>
                              <td>
                                Universitas Negeri Surabaya
                              </td>
                              <td class="text-center">
                                2018
                              </td>
                              <td class="text-center">
                                27
                              </td>
                              <td class="text-center">
                                1020
                              </td>
                              </tr>
                          <tr>
							  <td class="text-center">
                                5
                              </td>
                              <td>
                                Desain Komunikasi Visual
                              </td>
                              <td>
                                Universitas Negeri Surabaya
                              </td>
                              <td class="text-center">
                                2018
                              </td>
                              <td class="text-center">
                                36
                              </td>
                              <td class="text-center">
                                1000
                              </td>
                          </tr>
						
					  </tbody>
					</table>
				</div>
				
			</div>
		</div>
@endsection