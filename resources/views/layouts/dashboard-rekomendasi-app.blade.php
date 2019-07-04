@extends('layouts.dashboard-app')
@section('e','active')
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
		  
			<nav class="card card-nav-tabs card-plain">
			  <div class="card-header card-header-success">
				<div class="nav-tabs-navigation">
					<div class="nav-tabs-wrapper">
					  <ul class="nav nav-tabs" data-tabs="tabs">
						<li class="nav-item">
						  <a class="nav-link @yield('1')" href="datauniversitas.html">Perguruan Tinggi</span></a>
						</li>
						<li class="nav-item">
						  <a class="nav-link @yield('2')" href="dataprodi.html">Program Studi</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link @yield('3')" href="datamapel.html">Mapel</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link @yield('4')" href="datahobi.html">Hobi</a>
						</li>
						<li class="nav-item">
						  <a class="nav-link @yield('5')" href="datajurusan.html">Grading Jurusan</a>
						</li>
					  </ul>
					</div>
				</div>
			  </div>
			</nav>
		  
                    
    @yield('contents')
		  
        </div>
      </div>
@endsection