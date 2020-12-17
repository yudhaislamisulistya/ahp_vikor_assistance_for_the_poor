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
                    <span>Data Alternatif</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Alternatif</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Matriks</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{route('showAHPPerbandinganAntarKriteria')}}" class="btn btn-primary btn-block">Matriks Perbandingan Antar Kriteria</a>
                        <a href="{{route('showAHPPerbandinganPenghasilanPerbulan')}}" class="btn btn-primary btn-block">Matriks Perbandingan Sub Kriteria Penghasilan Perbulan</a>
                        <a href="{{route('showAHPPerbandinganPekerjaanKepalaKeluarga')}}" class="btn btn-primary btn-block">Matriks Perbandingan Sub Kriteria Pekerjaan Kepala Keluarga</a>
                        <a href="{{route('showAHPPerbandinganJumlahTanggungan')}}" class="btn btn-primary btn-block">Matriks Perbandingan Sub Kriteria Jumlah Tunggangan</a>
                        <a href="{{route('showAHPPerbandinganPendidikanKepalaKeluarga')}}" class="btn btn-primary btn-block">Matriks Perbandingan Sub Kriteria Pendidikan Kepala Keluarga</a>
                        <a href="{{route('showAHPPerbandinganSumberAir')}}" class="btn btn-primary btn-block">Matriks Perbandingan Sub Kriteria Sumber Air</a>
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

