<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Go Campus</title>
    <link href="{{ asset('assets_2/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/css/addons/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_2/css/font-awesome.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" /> {{--
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title> --}}

    <!-- Fonts -->
    {{--
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        
        .full-height {
            height: 100vh;
        }
        
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        
        .position-ref {
            position: relative;
        }
        
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        
        .content {
            text-align: center;
        }
        
        .title {
            font-size: 84px;
        }
        
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        
        .m-b-md {
            margin-bottom: 30px;
        }
    </style> --}}
</head>

<body>
    <div class="logo">
        <div class="container">

            <table class="tabel-image">
                <tr style="width: 100%;">
                    <td style="width: 50%;">
                        <a href="beranda.html">
                            <img height="70" src="assets/img/logo.png" alt="logo go campus sman 11 surabaya">
                        </a>
                    </td>
                    <td style="width: 50%;">
                        <div class="social">

                            <div class="pojokkanan">
                                @if (Route::has('login')) 
                                    @auth
                                        <a href="{{ url('login') }}" class="btn gocampus-color btn-round btn-lg"><i class="fa fa-user"></i>Home</a> @else
                                <a href="{{ route('login') }}" class="btn gocampus-color btn-round btn-lg"><i class="fa fa-user"></i>Login</a> @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn gocampus-color btn-round btn-lg"><i class="fa fa-user"></i>Register</a> @endif @endauth @endif
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="nav-wrap">
        <nav class="navbar navbar-expand-lg navbar-dark gocampus-color">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="basicExampleNav">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item @yield('a')">
                            <a class="nav-link" href="/">
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item @yield('b')">
                            <a class="nav-link" href="/cari-jurusan">Cari Jurusan
							</a>
                        </li>
                        <li class="nav-item @yield('c')">
                            <a class="nav-link" href="/riwayat-snmptn">Riwayat SNMPTN</a>
                        </li>
                        <li class="nav-item @yield('d')">
                            <a class="nav-link" href="/data-alumni">Data Alumni</a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    </div>
    @yield('content')
    <footer class="page-footer font-small gocampus-color">

		  <div class="footer-copyright text-center py-3">Copyright © 2018 .
			<a href="index.php?page=index"> SMAN 11 Surabaya with Teknik Informatika Unesa</a>
		  </div>

		</footer>
    <script type="text/javascript" src="{{ asset('assets_2/js/jquery-3.3.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets_2/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets_2/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets_2/js/mdb.min.js') }}"></script>
    <script src="{{ asset('assets/js/Chart.bundle.js') }}"></script>
	<script src="{{ asset('assets/js/utils.js') }}"></script>
	<script src="{{ asset('assets/js/Chart.PieceLabel.js') }}"></script>


	   <script>
		
                var ctx = document.getElementById("myChart").getContext('2d');
				ctx.height = 300;
                var myChart = new Chart(ctx, {
                    type: 'pie',
                 data: {
				datasets: [ {
					data: [125,145],
					backgroundColor: [
                            window.chartColors.purple,
                            window.chartColors.orange
									]

								} ],
				labels: ['SAINTEK', 'SOSHUM']
			},
			options: {
				responsive: true,
				 maintainAspectRatio : false,
                        title: {
                            display: true,
                            text: 'DATA JURUSAN'
                        },
				pieceLabel: {
					render: 'percentage',
					fontColor: ['white', 'white'],
					precision: 2
				}
			}
		} );
	</script>
        <script>
                var ctx = document.getElementById("myChart2").getContext('2d');
				ctx.height = 300;
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [ 150, 200
					 ?>],
                            label: 'Jumlah Siswa',
                            backgroundColor: [
                            window.chartColors.red,
                            window.chartColors.blue
                        ]
                            }],
                        labels: ['IPA','IPS']},
                    options: {
                        responsive : true,
                        maintainAspectRatio : false,
                        title: {
                            display: true,
                            text: 'DATA SISWA'
                        },
						pieceLabel: {
							render: 'percentage',
							fontColor: ['white', 'white'],
							precision: 2
						}
                    }
                });
        </script>
		<script>
                var ctx = document.getElementById("myChart3").getContext('2d');
				ctx.height = 300;
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [100,60],
                            label: 'Jumlah Jenjang',
                            backgroundColor: [
                            window.chartColors.orange,
                            window.chartColors.purple,
							window.chartColors.green
							
                        ]
                            }],
                        labels: ['S1','D3']},
                    options: {
                        responsive : true,
                        maintainAspectRatio : false,
                        title: {
                            display: true,
                            text: 'DATA PRROGRAM STUDI BERDASARKAN JENJANG DI APLIKASI GO CAMPUS'
                        },
						pieceLabel: {
							render: 'percentage',
							fontColor: ['white', 'white'],
							precision: 2
						}
                    }
                });
        </script>
		<script>
                var ctx = document.getElementById("myChart4").getContext('2d');
				ctx.height = 300;
                var myChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [60, 70, 45, 25],
                            label: 'Jumlah Alumni',
                            backgroundColor: [
                            window.chartColors.blue,
                            window.chartColors.yellow,
                            window.chartColors.red,
							window.chartColors.green
                        ]
                            }],
                        labels: ['SNMPTN','SBMPTN','Mandiri','Kerja']},
                    options: {
                        responsive : true,
                        maintainAspectRatio : false,
                        title: {
                            display: true,
                            text: 'DATA ALUMNI SMAN 11 SURABAYA'
                        },
						pieceLabel: {
							render: 'percentage',
							fontColor: ['white', 'white', 'white'],
							precision: 2
						}
                    }
                });
        </script>
    


</body>

</html>