@extends('layouts.master')
@section('title', 'Admin Dashboard')

@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 col-xxl-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card overflow-hidden">
                            <div class="card-body pb-4 px-4 pt-4">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="mb-1">{{Helper::getCountTabel('users')}}</h5>
                                        <span class="text-">Data Pengguna</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card overflow-hidden">
                            <div class="card-body pb-4 px-4 pt-4">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="mb-1">5</h5>
                                        <span class="text-">Data Kritera</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card overflow-hidden">
                            <div class="card-body pb-4 px-4 pt-4">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="mb-1">{{Helper::getCountTabel('tbl_alternatif')}}</h5>
                                        <span class="text-">Data Alternatif</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header border-0 pb-0">
                                <h4 class="card-title">Akun Terbaru</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm mb-0">
                                        <thead>
                                            <tr>
                                                <th><strong>Nama</strong></th>
                                                <th><strong>Email</strong></th>
                                                <th><strong>Waktu Registrasi</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach (Helper::get5DataPengguna() as $key => $value)
                                            <tr>
                                                <td>{{$value->name}}</td>
                                                <td>{{$value->email}}</td>
                                                <td>{{$value->created_at}}</td>
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
            <div class="col-xl-3 col-xxl-4 col-lg-12 col-md-12">
                <div class="card bg-primary text-white">
                    <div class="card-header pb-0 border-0">
                        <h4 class="card-title text-white">Alternatif</h4>
                    </div>
                    <div class="card-body">
                        <div class="widget-media">
                            <ul class="timeline">
                                @foreach (Helper::get5DataAlternatif() as $key => $value)
                                <li>
                                    <div class="timeline-panel">
                                        <div class="media-body">
                                            <h5 class="mb-1 text-white">{{$value->nama}} - {{$value->nik}}</h5>
                                            <small class="d-block">{{$value->created_at}}</small>
                                        </div>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-primary light sharp"
                                                data-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <circle fill="#000000" cx="5" cy="12" r="2" />
                                                        <circle fill="#000000" cx="12" cy="12" r="2" />
                                                        <circle fill="#000000" cx="19" cy="12" r="2" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Detail</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <canvas id="lineChart_3Kk"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-left">
                    <div class="card-header">
                        <h4>Analytical Hierarchy Process (AHP)</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Analytical Hierarchy Process (AHP) adalah suatu metode pengambilan keputusan dengan melakukan perbandingan berpasangan antara kriteria pilihan dan juga perbandingan berpasangan antara pilihan yang ada. Permasalahan pengambilan keputusan dengan AHP umunya dikomposisikan menjadi kriteria, dan alternative pilihan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="card text-left">
                    <div class="card-header">
                        <h4>VISEKRITERIJUMSKO KOMPROMISNO RANGIRANJE (VIKOR)</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Metode VIKOR merupakan metode Multi-Criteria Decision Making (MCDM) yang dapat digunakan untuk menyeleksi lebih dari satu kriteria. Metode VIKOR berfokus dalam perangkingan dengan mengkompromi dari hasil alternatif dan kriteria yang bertentangan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


