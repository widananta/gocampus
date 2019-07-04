@extends('layouts.welcome')
@section('a','active')
@section('content')
<div class="container">

    <div class="main-panel">
        <div class="container">
            <div class="container-fluid">
                <h2 class="text-center" style="padding-bottom:10px;"><strong>Selamat Datang di Go Campus</strong></h2>
                <p class="text-center subjudul" style="padding-bottom:30px;">Aplikasi Monitoring dan Evaluasi Seleksi Masuk Perguruan Tinggi Negeri</p>

                <div class="row">
                    <div class="col-md-3">
                        <div class="featured-box">
                            <i class="fa gocampus-color fa-user"></i>
                            <h4>Kelola Data Siswa dan Alumni</h4>
                            <p>Simpan data siswa dan juga alumni yang diterima masuk ke perguruan tinggi negeri.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="featured-box">
                            <i class="fa gocampus-color fa-book"></i>
                            <h4>Pantau Perkembangan Nilai Rapor</h4>
                            <p>Kelola data dan pantau perkembangan nilai rapor tiap siswa.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="featured-box">
                            <i class="fa gocampus-color fa-graduation-cap"></i>
                            <h4>Merekomendasikan Jurusan</h4>
                            <p>Membantu siswa dalam memilih jurusan yang sesuai hobi, mapel favorit, dan nilai akademis.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="featured-box">
                            <i class="fa gocampus-color fa-edit"></i>
                            <h4>Catat Rekam Jejak SNMPTN</h4>
                            <p>Catat rekam jejak SNMPTN tiap tahun untuk dijadikan bahan evaluasi internal sekolah.</p>
                        </div>
                    </div>
                </div>

                <hr>

                <p class="text-center subjudul" style="padding-bottom:30px;">Statistik Data Go Campus</p>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <canvas id="myChart" style="background-color: aliceblue; width: 100%;"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <canvas id="myChart4" style="background-color: aliceblue; width: 100%;"></canvas>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <canvas id="myChart2" style="background-color: aliceblue; width: 100%;"></canvas>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <canvas id="myChart3" style="background-color: aliceblue; width: 100%;"></canvas>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection