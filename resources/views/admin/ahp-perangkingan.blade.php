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


        <?php

            // Baris C01
            $c01_c01 = $tbl_antar_kriteria->ak_c01_c01 / $tbl_antar_kriteria->ak_total_c01;
            $c01_c02 = $tbl_antar_kriteria->ak_c01_c02 / $tbl_antar_kriteria->ak_total_c02;
            $c01_c03 = $tbl_antar_kriteria->ak_c01_c03 / $tbl_antar_kriteria->ak_total_c03;
            $c01_c04 = $tbl_antar_kriteria->ak_c01_c04 / $tbl_antar_kriteria->ak_total_c04;
            $c01_c05 = $tbl_antar_kriteria->ak_c01_c05 / $tbl_antar_kriteria->ak_total_c05;
            $jumlah_baris_c01 = $c01_c01 + $c01_c02 + $c01_c03 + $c01_c04 + $c01_c05;


            // Baris C02
            $c02_c01 = $tbl_antar_kriteria->ak_c02_c01 / $tbl_antar_kriteria->ak_total_c01;
            $c02_c02 = $tbl_antar_kriteria->ak_c02_c02 / $tbl_antar_kriteria->ak_total_c02;
            $c02_c03 = $tbl_antar_kriteria->ak_c02_c03 / $tbl_antar_kriteria->ak_total_c03;
            $c02_c04 = $tbl_antar_kriteria->ak_c02_c04 / $tbl_antar_kriteria->ak_total_c04;
            $c02_c05 = $tbl_antar_kriteria->ak_c02_c05 / $tbl_antar_kriteria->ak_total_c05;
            $jumlah_baris_c02 = $c02_c01 + $c02_c02 + $c02_c03 + $c02_c04 + $c02_c05;

            // Baris C03
            $c03_c01 = $tbl_antar_kriteria->ak_c03_c01 / $tbl_antar_kriteria->ak_total_c01;
            $c03_c02 = $tbl_antar_kriteria->ak_c03_c02 / $tbl_antar_kriteria->ak_total_c02;
            $c03_c03 = $tbl_antar_kriteria->ak_c03_c03 / $tbl_antar_kriteria->ak_total_c03;
            $c03_c04 = $tbl_antar_kriteria->ak_c03_c04 / $tbl_antar_kriteria->ak_total_c04;
            $c03_c05 = $tbl_antar_kriteria->ak_c03_c05 / $tbl_antar_kriteria->ak_total_c05;
            $jumlah_baris_c03 = $c03_c01 + $c03_c02 + $c03_c03 + $c03_c04 + $c03_c05;

            // Baris C04
            $c04_c01 = $tbl_antar_kriteria->ak_c04_c01 / $tbl_antar_kriteria->ak_total_c01;
            $c04_c02 = $tbl_antar_kriteria->ak_c04_c02 / $tbl_antar_kriteria->ak_total_c02;
            $c04_c03 = $tbl_antar_kriteria->ak_c04_c03 / $tbl_antar_kriteria->ak_total_c03;
            $c04_c04 = $tbl_antar_kriteria->ak_c04_c04 / $tbl_antar_kriteria->ak_total_c04;
            $c04_c05 = $tbl_antar_kriteria->ak_c04_c05 / $tbl_antar_kriteria->ak_total_c05;
            $jumlah_baris_c04 = $c04_c01 + $c04_c02 + $c04_c03 + $c04_c04 + $c04_c05;

            // Baris C05
            $c05_c01 = $tbl_antar_kriteria->ak_c05_c01 / $tbl_antar_kriteria->ak_total_c01;
            $c05_c02 = $tbl_antar_kriteria->ak_c05_c02 / $tbl_antar_kriteria->ak_total_c02;
            $c05_c03 = $tbl_antar_kriteria->ak_c05_c03 / $tbl_antar_kriteria->ak_total_c03;
            $c05_c04 = $tbl_antar_kriteria->ak_c05_c04 / $tbl_antar_kriteria->ak_total_c04;
            $c05_c05 = $tbl_antar_kriteria->ak_c05_c05 / $tbl_antar_kriteria->ak_total_c05;
            $jumlah_baris_c05 = $c05_c01 + $c05_c02 + $c05_c03 + $c05_c04 + $c05_c05;

        ?>
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
                                        <th>Hasil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->nama}}</td>
                                        <td>
                                            {{$c01_c01 * Helper::getEigenPenghasilanPerbulan($value->ha_pp)}}
                                        </td>
                                        <td>
                                            {{$c02_c02 * Helper::getEigenPekerjaanKepalaKeluarga($value->ha_pkrkk)}}
                                        </td>
                                        <td>
                                            {{$c03_c03 * Helper::getEigenJumlahTanggungan($value->ha_jt)}}
                                        </td>
                                        <td>
                                            {{$c04_c04 * Helper::getEigenPendidikanKepalaKekuarga($value->ha_pddkk)}}
                                        </td>
                                        <td>
                                            {{$c05_c05 * Helper::getEigenSumberAir($value->ha_sa)}}
                                        </td>
                                        <td>
                                            {{($c01_c01 * Helper::getEigenPenghasilanPerbulan($value->ha_pp)) + ($c02_c02 * Helper::getEigenPekerjaanKepalaKeluarga($value->ha_pkrkk)) + ($c03_c03 * Helper::getEigenJumlahTanggungan($value->ha_jt)) + ($c04_c04 * Helper::getEigenPendidikanKepalaKekuarga($value->ha_pddkk)) + ($c05_c05 * Helper::getEigenSumberAir($value->ha_sa))}}
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
