@extends('layouts.dashboard-app')
@section('a','active')
@section('content')
      <div class="content">
        <div class="container-fluid">
          <div class="alert alert-success">
            <span>Selamat datang di aplikasi Go Campus SMA Negeri 11 Surabaya !</span>
          </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
		  <div class="row">
			  <div class="col-lg-3 col-md-6 col-sm-6">
				  <div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
					  <div class="card-icon">
						<i class="material-icons">person</i>
					  </div>
					  <p class="card-category">Rapor Siswa</p>
					  <h3 class="card-title">1000</h3>
					</div>
					<div class="card-footer">
					  <div class="stats">
						<i class="material-icons">update</i> Diperbarui tanggal 10 September 2018
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
				  <div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
					  <div class="card-icon">
						<i class="material-icons">library_books</i>
					  </div>
					  <p class="card-category">Data Prestasi</p>
					  <h3 class="card-title">70</h3>
					</div>
					<div class="card-footer">
					  <div class="stats">
						<i class="material-icons">update</i> Diperbarui tanggal 10 September 2018
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
				  <div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
					  <div class="card-icon">
						<i class="material-icons">history</i>
					  </div>
					  <p class="card-category">Data SNMPTN</p>
					  <h3 class="card-title">5</h3>
					</div>
					<div class="card-footer">
					  <div class="stats">
						<i class="material-icons">update</i> Diperbarui tanggal 10 September 2018
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
				  <div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
					  <div class="card-icon">
						<i class="material-icons">person</i>
					  </div>
					  <p class="card-category">Data Alumni</p>
					  <h3 class="card-title">5000</h3>
					</div>
					<div class="card-footer">
					  <div class="stats">
						<i class="material-icons">update</i> Diperbarui tanggal 10 September 2018
					  </div>
					</div>
				  </div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				  <div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
					  <div class="card-icon">
						<i class="material-icons">account_balance</i>
					  </div>
					  <p class="card-category">Data Universitas</p>
					  <h3 class="card-title">50</h3>
					</div>
					<div class="card-footer">
					  <div class="stats">
						<i class="material-icons">update</i> Diperbarui tanggal 10 September 2018
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
				  <div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
					  <div class="card-icon">
						<i class="material-icons">account_balance</i>
					  </div>
					  <p class="card-category">Data Prodi</p>
					  <h3 class="card-title">770</h3>
					</div>
					<div class="card-footer">
					  <div class="stats">
						<i class="material-icons">update</i> Diperbarui tanggal 10 September 2018
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
				  <div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
					  <div class="card-icon">
						<i class="material-icons">account_balance</i>
					  </div>
					  <p class="card-category">Data Mapel</p>
					  <h3 class="card-title">50</h3>
					</div>
					<div class="card-footer">
					  <div class="stats">
						<i class="material-icons">update</i> Diperbarui tanggal 10 September 2018
					  </div>
					</div>
				  </div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
				  <div class="card card-stats">
					<div class="card-header card-header-success card-header-icon">
					  <div class="card-icon">
						<i class="material-icons">account_balance</i>
					  </div>
					  <p class="card-category">Data Hobi</p>
					  <h3 class="card-title">50</h3>
					</div>
					<div class="card-footer">
					  <div class="stats">
						<i class="material-icons">update</i> Diperbarui tanggal 10 September 2018
					  </div>
					</div>
				  </div>
			</div>
        </div>
      </div>
    </div>
@endsection