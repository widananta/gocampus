
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Go Campus
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="{{ asset('assets/font/font-awesome.min.css')}}">
  <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
</head>
<body class=""> 
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Go Campus
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item @yield('a')">
            <a class="nav-link" href="/admin/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
		  <li class="nav-item @yield('b')">
            <a class="nav-link" href="/admin/siswa">
              <i class="material-icons">person</i>
              <p>Data Siswa</p>
            </a>
          </li>
		  <li class="nav-item @yield('c')">
            <a class="nav-link" href="#">
              <i class="material-icons">assignment</i>
              <p>Data Rapor Siswa</p>
            </a>
          </li>
		  <li class="nav-item @yield('d')">
            <a class="nav-link" href="#">
              <i class="material-icons">library_books</i>
              <p>Data Prestasi Siswa</p>
            </a>
          </li>
		  <li class="nav-item @yield('e')">
            <a class="nav-link" href="/admin/rekomendasi/pt">
              <i class="material-icons">account_balance</i>
              <p>Rekomendasi Jurusan</p>
            </a>
          </li>
		  <li class="nav-item @yield('f')">
            <a class="nav-link" href="#">
              <i class="material-icons">history</i>
              <p>Riwayat SNMPTN</p>
            </a>
          </li>
		  <li class="nav-item @yield('g')">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
              <p>Data Alumni</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Dashboard Admin</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
            </form>
			<ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person </i>
                      <p>{{ Auth::user()->name }}</p>
                </a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="ubahpassword.html">Ubah Password</a>
                  <a class="dropdown-item" href="beranda.html">Kembali ke Web</a>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    @yield('content')
          <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="http://sman11sby.com" target="blank">
					Portal Informasi
                </a>
              </li>
			  <li>
                <a href="http://sebelas.net" target="blank">
					Go SNMPTN
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            Go Campus &copy; 2018. T.Informatika Unesa
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <script src="{{ asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <script src="{{ asset('assets/js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>
</body>

</html>
