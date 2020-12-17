@extends('layouts.master')

@section('title', 'Admin Panel - Hasil Alternatif')

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
                    <span>Hasil Alternatif</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Hasil Alternatif</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Hasil Alternatif (Menentukan Nilai Masing-Masing Alternatif Berdasarkan Kriterianya)</h4>
                        <a href="{{route('showTambahDataAlternatif')}}" class="btn btn-primary btn-sm">Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Penghasilan Perbulan</th>
                                        <th>Pekerjaan Kepala Keluarga</th>
                                        <th>Jumlah Tanggungan</th>
                                        <th>Pendidikan Kepala Keluarga</th>
                                        <th>Sumber Air</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->nama}}</td>
                                        <td>
                                            {{Helper::getStatusDataAlternatif($value->ha_pp)}}
                                        </td>
                                        <td>
                                            {{Helper::getStatusDataAlternatif($value->ha_pkrkk)}}
                                        </td>
                                        <td>
                                            {{Helper::getStatusDataAlternatif($value->ha_jt)}}
                                        </td>
                                        <td>
                                            {{Helper::getStatusDataAlternatif($value->ha_pddkk)}}
                                        </td>
                                        <td>
                                            {{Helper::getStatusDataAlternatif($value->ha_sa)}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        <a href="{{route('showAHPPerangkingan')}}" class="btn btn-primary btn-sm">Proses</a>
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
