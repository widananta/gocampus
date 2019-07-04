@extends('layouts.welcome')
@section('d','active')
@section('content')
        <div class="container">
			<div class="container-fluid">
			    <h2 class="text-center"><strong>Data Alumni</strong></h2>
				<p class="text-center" style="padding-bottom:30px;">Riwayat Alumni yang Diterima Masuk Perguruan Tinggi Negeri</p>
                
                <canvas id="canvas" style="background-color: aliceblue;"></canvas>
				
			</div>
		</div>
        <div class="container">
			<div class="container-fluid">
                
                <hr>
			     
                <div class="table-responsive">
                    <style>
                        
                    </style>
					<table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
					  <thead>
						<tr>
						  <th class="th">Nomor
						  </th>
						  <th class="th">Nama
						  </th>
						  <th class="th">Lulusan
						  </th>
						  <th class="th">Nomor HP
						  </th>
						  <th class="th">Email
						  </th>
						  <th class="th">ID LINE
						  </th>
						  <th class="th">Universitas
						  </th>
                        <th class="th">Program Studi
						  </th>
                            <th class="th">Diterima Jalur
						  </th>
						</tr>
					  </thead>
					  <tbody>
							<tr>
							  <td class="text-center">
								1
							  </td>
							  <td>
								Muhamad Ramadhan
							  </td>
							  <td class="text-center">
								2016
							  </td>
							  <td>
								083831811803
							  </td>
							  <td>
                                  muhamadramadhan57@gmail.com
							  </td>
							  <td>
								@ramadhanlmzero
							  </td>
							  <td>
								Universitas Negeri Surabaya
							  </td>
							  <td>
								Teknik Informatika
							  </td>
							  <td class="text-center">
								SBMPTN
							  </td>
                          </tr>
                          <tr>
							  <td class="text-center">
								2
							  </td>
							  <td>
								Ringgia Widananta Fikar
							  </td>
							  <td class="text-center">
								2016
							  </td>
							  <td>
								083831811803
							  </td>
							  <td>
								muhamadramadhan57@gmail.com
							  </td>
							  <td>
								@ramadhanlmzero
							  </td>
							  <td>
								Universitas Negeri Surabaya
							  </td>
							  <td>
								Teknik Informatika
							  </td>
							  <td class="text-center">
								SBMPTN
							  </td>
                          </tr>
                          <tr>
							  <td class="text-center">
								3
							  </td>
							  <td>
								Dian Novita Yohanes
							  </td>
							  <td class="text-center">
								2016
							  </td>
							  <td>
								083831811803
							  </td>
							  <td>
								muhamadramadhan57@gmail.com
							  </td>
							  <td>
								@ramadhanlmzero
							  </td>
							  <td>
								Universitas Negeri Surabaya
							  </td>
							  <td>
								Teknik Informatika
							  </td>
							  <td class="text-center">
								Mandiri
							  </td>
                          </tr>
                          <tr>
							  <td class="text-center">
								4
							  </td>
							  <td>
								Celia Angelina Nogo Koban
							  </td>
							  <td class="text-center">
								2016
							  </td>
							  <td>
								083831811803
							  </td>
							  <td>
								muhamadramadhan57@gmail.com
							  </td>
							  <td>
								@ramadhanlmzero
							  </td>
							  <td>
								Universitas Negeri Surabaya
							  </td>
							  <td>
								Teknik Informatika
							  </td>
                              <td class="text-center">
								Mandiri
							  </td>
                          </tr>
                          <tr>
							  <td class="text-center">
								5
							  </td>
							  <td>
								Fandi Ilham
							  </td>
							  <td class="text-center">
								2016
							  </td>
							  <td>
								083831811803
							  </td>
							  <td>
								muhamadramadhan57@gmail.com
							  </td>
							  <td>
								@ramadhanlmzero
							  </td>
							  <td>
								Universitas Negeri Surabaya
							  </td>
							  <td>
								Teknik Informatika
							  </td>
							  <td class="text-center">
								SBMPTN
							  </td>
                          </tr>
						
					  </tbody>
					</table>
				</div>
				
			</div>
		</div>
@endsection