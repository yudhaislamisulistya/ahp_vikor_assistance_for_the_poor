@extends('layouts.master')

@section('title', 'Admin Panel - Data Kriteria')

@section('css')
<link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Data Kriteria</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Kriteria</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Kriteria</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kriteria</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Penghasilan Perbulan</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Pekerjaan Kepala Keluarga</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Jumlah Tanggungan</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Pendidikan Kepala Keluarga</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Sumber Air</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-left">
                    <div class="card-header">
                        Penghasilan Perbulan
                    </div>
                  <div class="card-body">
                    <div class="table-responsive table">
                        <table class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5</td>
                                    <td><=500.000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>600.000 - 1.500.000</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>1.600.000 - 2.500.000</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2.600.000 – 4.000.000</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>> 4.000.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-left">
                    <div class="card-header">
                        Pekerjaan Kepala Keluarga
                    </div>
                  <div class="card-body">
                    <div class="table-responsive table">
                        <table class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5</td>
                                    <td>Tidak Bekerja</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Buruh</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Petani</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Pedagang / Wiraswasta</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Pengusaha / PNS</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-left">
                    <div class="card-header">
                        Jumlah Tanggungan
                    </div>
                  <div class="card-body">
                    <div class="table-responsive table">
                        <table class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5</td>
                                    <td>>12 Orang</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>8-12 Orang</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>7-8 Orang</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>3-5 Orang</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1-2 Orang</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-left">
                    <div class="card-header">
                        Pendidikan Kepala Keluarga
                    </div>
                  <div class="card-body">
                    <div class="table-responsive table">
                        <table class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>5</td>
                                    <td>Tidak Sekolah</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>SD</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>SMP</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>SMA</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Perguruan Tinggi</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-left">
                    <div class="card-header">
                        Sumber Air
                    </div>
                  <div class="card-body">
                    <div class="table-responsive table">
                        <table class="display">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kriteria</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>4</td>
                                    <td>Air Sungai</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sumur Bor</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PDAM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <!-- Datatable -->
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
@endsection

