@extends('layouts.dashboard-rekomendasi-app')
@section('1','active')
@section('contents')
<a href="formdataperguruantinggi.html">
    <button type="button" class="btn btn-success">Tambah Data</button>
</a>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title ">Data Perguruan Tinggi</h4>
                <p class="card-category">List perguruan tinggi ternama di Indonesia</p>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table" id="tabel-rama">

                        <thead class=" text-success">
                            <th class="text-center">
                                No.
                            </th>
                            <th>
                                Perguruan Tinggi
                            </th>
                            <th>
                                Singkatan
                            </th>
                            <th>
                                Asal Kota
                            </th>
                            <th class="text-right">
                                Aksi
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($pt as $p)
                                
                            <tr>
                                <td class="text-center">
                                    {{ $p->id }}
                                </td>
                                <td>
                                    {{ $p->nama_kampus }}
                                </td>
                                <td>
                                    {{ $p->singkatan }}
                                </td>
                                <td>
                                    {{ $p->kota }}
                                </td>
                                <td class="td-actions text-right">

                                    <button type="button" rel="tooltip" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" rel="tooltip" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                                        <i class="material-icons">close</i>
                                    </button>

                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel">Konfirmasi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-left">Anda yakin ingin menghapus data ini?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    <button type="button" class="btn btn-danger">Hapus Data</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
@endsection