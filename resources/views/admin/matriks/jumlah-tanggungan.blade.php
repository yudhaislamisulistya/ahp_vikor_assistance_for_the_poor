@extends('layouts.master')

@section('title', 'Admin Panel - Perbandingan Antar Kriteria')

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
                    <span>Perbandingan Antar Sub Kriteria Jumlah Tanggungan</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Perbandingan Antar Kriteria</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if (Session::get("status") == "success")
                    <div class="alert alert-success" role="alert"><strong>Berhasil! </strong>Data Berhasil Disimpan
                        Kedalam Database</div>
                    @elseif(Session::get("status") == "failed")
                    <div class="alert alert-danger" role="alert"><strong>Gagal! </strong>Data Gagal Disimpan Kedalam
                        Database</div>
                    @endif
                    <div class="card-header">
                        <h2>Perbandingan Antar Sub Kriteria Jumlah Tanggungan</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('postAHPPerbandinganJumlahTanggungan')}}" method="post">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>S. Tinggi</th>
                                            <th>Tinggi</th>
                                            <th>Cukup</th>
                                            <th>Rendah</th>
                                            <th>Sangat Rendah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>S. Tinggi</td>
                                            <td><input type="text" name="jt_c01_c01" id="jt_c01_c01" value="1"
                                                    class="form-control"></td>
                                            <td>
                                                <select class="form-control" name="jt_c01_c02" id="jt_c01_c02">
                                                    <option value="{{$data->jt_c01_c02}}" selected>{{$data->jt_c01_c02}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="jt_c01_c03" id="jt_c01_c03">
                                                    <option value="{{$data->jt_c01_c03}}" selected>{{$data->jt_c01_c03}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="jt_c01_c04" id="jt_c01_c04">
                                                    <option value="{{$data->jt_c01_c04}}" selected>{{$data->jt_c01_c04}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="jt_c01_c05" id="jt_c01_c05">
                                                    <option value="{{$data->jt_c01_c05}}" selected>{{$data->jt_c01_c05}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tinggi</td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c02_c01"
                                                    value="{{$data->jt_c02_c01}}" id="jt_c02_c01">
                                            </td>
                                            <td><input type="text" name="jt_c02_c02" id="jt_c02_c02" value="1"
                                                    class="form-control"></td>
                                            <td>
                                                <select class="form-control" name="jt_c02_c03" id="jt_c02_c03">
                                                    <option value="{{$data->jt_c02_c03}}" selected>{{$data->jt_c02_c03}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="jt_c02_c04" id="jt_c02_c04">
                                                    <option value="{{$data->jt_c02_c04}}" selected>{{$data->jt_c02_c04}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="jt_c02_c05" id="jt_c02_c05">
                                                    <option value="{{$data->jt_c02_c05}}" selected>{{$data->jt_c02_c05}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cukup</td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c03_c01"
                                                    value="{{$data->jt_c03_c01}}" id="jt_c03_c01">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c03_c02"
                                                    value="{{$data->jt_c03_c02}}" id="jt_c03_c02">
                                            </td>
                                            <td><input type="text" name="jt_c03_c03" id="jt_c03_c03" value="1"
                                                    class="form-control"></td>
                                            <td>
                                                <select class="form-control" name="jt_c03_c04" id="jt_c03_c04">
                                                    <option value="{{$data->jt_c03_c04}}" selected>{{$data->jt_c03_c04}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-control" name="jt_c03_c05" id="jt_c03_c05">
                                                    <option value="{{$data->jt_c03_c05}}" selected>{{$data->jt_c03_c05}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rendah</td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c04_c01"
                                                    value="{{$data->jt_c04_c01}}" id="jt_c04_c01">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c04_c02"
                                                    value="{{$data->jt_c04_c02}}" id="jt_c04_c02">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c04_c03"
                                                    value="{{$data->jt_c04_c03}}" id="jt_c04_c03">
                                            </td>
                                            <td><input type="text" name="jt_c04_c04" id="jt_c04_c04" value="1"
                                                    class="form-control"></td>
                                            <td>
                                                <select class="form-control" name="jt_c04_c05" id="jt_c04_c05">
                                                    <option value="{{$data->jt_c04_c05}}" selected>{{$data->jt_c04_c05}}
                                                    </option>
                                                    <optgroup label="Lebih Baik">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                    </optgroup>
                                                    <optgroup label="Tidak Lebih Baik">
                                                        <option value="1">1/1</option>
                                                        <option value="0.5">1/2</option>
                                                        <option value="0.33">1/3</option>
                                                        <option value="0.25">1/4</option>
                                                        <option value="0.2">1/5</option>
                                                        <option value="0.16">1/6</option>
                                                        <option value="0.14">1/7</option>
                                                        <option value="0.125">1/8</option>
                                                        <option value="0.11">1/9</option>
                                                    </optgroup>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>S. Rendah</td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c05_c01"
                                                    value="{{$data->jt_c05_c01}}" id="jt_c05_c01">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c05_c02"
                                                    value="{{$data->jt_c05_c02}}" id="jt_c05_c02">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c05_c03"
                                                    value="{{$data->jt_c05_c03}}" id="jt_c05_c03">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_c05_c04"
                                                    value="{{$data->jt_c05_c04}}" id="jt_c05_c04">
                                            </td>
                                            <td><input type="text" name="jt_c05_c05" id="jt_c05_c05" value="1"
                                                    class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah</td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_total_c01"
                                                    value="{{$data->jt_total_c01}}" id="total_c01">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_total_c02"
                                                    value="{{$data->jt_total_c02}}" id="total_c02">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_total_c03"
                                                    value="{{$data->jt_total_c03}}" id="total_c03">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_total_c04"
                                                    value="{{$data->jt_total_c04}}" id="total_c04">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" name="jt_total_c05"
                                                    value="{{$data->jt_total_c05}}" id="total_c05">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <button class="btn btn-primary" type="submit">Proses</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php


            // Baris C01
            $c01_c01 = $data->jt_c01_c01 / $data->jt_total_c01;
            $c01_c02 = $data->jt_c01_c02 / $data->jt_total_c02;
            $c01_c03 = $data->jt_c01_c03 / $data->jt_total_c03;
            $c01_c04 = $data->jt_c01_c04 / $data->jt_total_c04;
            $c01_c05 = $data->jt_c01_c05 / $data->jt_total_c05;
            $jumlah_baris_c01 = $c01_c01 + $c01_c02 + $c01_c03 + $c01_c04 + $c01_c05;


            // Baris C02
            $c02_c01 = $data->jt_c02_c01 / $data->jt_total_c01;
            $c02_c02 = $data->jt_c02_c02 / $data->jt_total_c02;
            $c02_c03 = $data->jt_c02_c03 / $data->jt_total_c03;
            $c02_c04 = $data->jt_c02_c04 / $data->jt_total_c04;
            $c02_c05 = $data->jt_c02_c05 / $data->jt_total_c05;
            $jumlah_baris_c02 = $c02_c01 + $c02_c02 + $c02_c03 + $c02_c04 + $c02_c05;

            // Baris C03
            $c03_c01 = $data->jt_c03_c01 / $data->jt_total_c01;
            $c03_c02 = $data->jt_c03_c02 / $data->jt_total_c02;
            $c03_c03 = $data->jt_c03_c03 / $data->jt_total_c03;
            $c03_c04 = $data->jt_c03_c04 / $data->jt_total_c04;
            $c03_c05 = $data->jt_c03_c05 / $data->jt_total_c05;
            $jumlah_baris_c03 = $c03_c01 + $c03_c02 + $c03_c03 + $c03_c04 + $c03_c05;

            // Baris C04
            $c04_c01 = $data->jt_c04_c01 / $data->jt_total_c01;
            $c04_c02 = $data->jt_c04_c02 / $data->jt_total_c02;
            $c04_c03 = $data->jt_c04_c03 / $data->jt_total_c03;
            $c04_c04 = $data->jt_c04_c04 / $data->jt_total_c04;
            $c04_c05 = $data->jt_c04_c05 / $data->jt_total_c05;
            $jumlah_baris_c04 = $c04_c01 + $c04_c02 + $c04_c03 + $c04_c04 + $c04_c05;

            // Baris C05
            $c05_c01 = $data->jt_c05_c01 / $data->jt_total_c01;
            $c05_c02 = $data->jt_c05_c02 / $data->jt_total_c02;
            $c05_c03 = $data->jt_c05_c03 / $data->jt_total_c03;
            $c05_c04 = $data->jt_c05_c04 / $data->jt_total_c04;
            $c05_c05 = $data->jt_c05_c05 / $data->jt_total_c05;
            $jumlah_baris_c05 = $c05_c01 + $c05_c02 + $c05_c03 + $c05_c04 + $c05_c05;



            ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            Perbandingan Antar Sub Kriteria Jumlah Tanggungan 2
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>S. Tinggi</th>
                                        <th>Tinggi</th>
                                        <th>Cukup</th>
                                        <th>S. Rendah</th>
                                        <th>Rendah</th>
                                        <th>Jumlah</th>
                                        <th>Eigen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>S. Tinggi</td>
                                        <td>{{round($c01_c01, 2)}}</td>
                                        <td>{{round($c01_c02, 2)}}</td>
                                        <td>{{round($c01_c03, 2)}}</td>
                                        <td>{{round($c01_c04, 2)}}</td>
                                        <td>{{round($c01_c05, 2)}}</td>
                                        <td>{{round($jumlah_baris_c01, 2)}}</td>
                                        <td>{{round($jumlah_baris_c01 / 5, 2)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tinggi</td>
                                        <td>{{round($c02_c01, 2)}}</td>
                                        <td>{{round($c02_c02, 2)}}</td>
                                        <td>{{round($c02_c03, 2)}}</td>
                                        <td>{{round($c02_c04, 2)}}</td>
                                        <td>{{round($c02_c05, 2)}}</td>
                                        <td>{{round($jumlah_baris_c02, 2)}}</td>
                                        <td>{{round($jumlah_baris_c02 / 5, 2)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Cukup</td>
                                        <td>{{round($c03_c01, 2)}}</td>
                                        <td>{{round($c03_c02, 2)}}</td>
                                        <td>{{round($c03_c03, 2)}}</td>
                                        <td>{{round($c03_c04, 2)}}</td>
                                        <td>{{round($c03_c05, 2)}}</td>
                                        <td>{{round($jumlah_baris_c03, 2)}}</td>
                                        <td>{{round($jumlah_baris_c03 / 5, 2)}}</td>
                                    </tr>
                                    <tr>
                                        <td>Rendah</td>
                                        <td>{{round($c04_c01, 2)}}</td>
                                        <td>{{round($c04_c02, 2)}}</td>
                                        <td>{{round($c04_c03, 2)}}</td>
                                        <td>{{round($c04_c04, 2)}}</td>
                                        <td>{{round($c04_c05, 2)}}</td>
                                        <td>{{round($jumlah_baris_c04, 2)}}</td>
                                        <td>{{round($jumlah_baris_c04 / 5, 2)}}</td>
                                    </tr>
                                    <tr>
                                        <td>S. Rendah</td>
                                        <td>{{round($c05_c01, 2)}}</td>
                                        <td>{{round($c05_c02, 2)}}</td>
                                        <td>{{round($c05_c03, 2)}}</td>
                                        <td>{{round($c05_c04, 2)}}</td>
                                        <td>{{round($c05_c05, 2)}}</td>
                                        <td>{{round($jumlah_baris_c05, 2)}}</td>
                                        <td>{{round($jumlah_baris_c05 / 5, 2)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button class="btn btn-primary" type="submit">Proses</button>
                    </div>
                </div>
            </div>
            <?php

            $lamda_max = ($data->jt_total_c01 * round($jumlah_baris_c01 / 5, 2)) + ($data->jt_total_c02 * round($jumlah_baris_c02 / 5, 2)) + ($data->jt_total_c03 * round($jumlah_baris_c03 / 5, 2)) + ($data->jt_total_c04 * round($jumlah_baris_c04 / 5, 2)) + ($data->jt_total_c05 * round($jumlah_baris_c05 / 5, 2));

            ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>
                            Hasil
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">λ max</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email" value="{{$lamda_max}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">CI / Index Konsistensi</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email" value="{{($lamda_max - 5) / 4}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">CR / Rasio Konsistensi</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email" value="{{(($lamda_max - 5) / 4) / 1.12}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status Konsistensi</label>
                                <?php
                                $cr = (($lamda_max - 5) / 4) / 1.12;
                                $status = "Tidak Konsisten";
                                if ($cr < 0.1 ) {
                                    $status = "Konsisten";
                                }
                                ?>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Email" value="{{$status}}">
                                </div>
                            </div>
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

<script>
    function bada() {
        console.log("Selamat Datang di Indonesia");
    }

    function changeParams(id_data, data) {
        if (parseInt(data) == 1) {
            $(id_data).val('1');
        } else if (parseInt(data) == 2) {
            $(id_data).val('0.5');
        } else if (parseInt(data) == 3) {
            $(id_data).val('0.33');
        } else if (parseInt(data) == 4) {
            $(id_data).val('0.25');
        } else if (parseInt(data) == 5) {
            $(id_data).val('0.2');
        } else if (parseInt(data) == 6) {
            $(id_data).val('0.16');
        } else if (parseInt(data) == 7) {
            $(id_data).val('0.14');
        } else if (parseInt(data) == 8) {
            $(id_data).val('0.125');
        } else if (parseInt(data) == 9) {
            $(id_data).val('0.11');
        } else if (parseFloat(data) == 1) {
            $(id_data).val('1');
        } else if (parseFloat(data) == 0.5) {
            $(id_data).val('2');
        } else if (parseFloat(data) == 0.33) {
            $(id_data).val('3');
        } else if (parseFloat(data) == 0.25) {
            $(id_data).val('4');
        } else if (parseFloat(data) == 0.2) {
            $(id_data).val('5');
        } else if (parseFloat(data) == 0.16) {
            $(id_data).val('6');
        } else if (parseFloat(data) == 0.14) {
            $(id_data).val('7');
        } else if (parseFloat(data) == 0.125) {
            $(id_data).val('8');
        } else if (parseFloat(data) == 0.11) {
            $(id_data).val('9');
        }

        var total_c01 = parseFloat($('#jt_c01_c01').val()) + parseFloat($('#jt_c02_c01').val()) + parseFloat($(
            '#jt_c03_c01').val()) + parseFloat($('#jt_c04_c01').val()) + parseFloat($('#jt_c05_c01').val());

        var total_c02 = parseFloat($('#jt_c01_c02').val()) + parseFloat($('#jt_c02_c02').val()) + parseFloat($(
            '#jt_c03_c02').val()) + parseFloat($('#jt_c04_c02').val()) + parseFloat($('#jt_c05_c02').val());

        var total_c03 = parseFloat($('#jt_c01_c03').val()) + parseFloat($('#jt_c02_c03').val()) + parseFloat($(
            '#jt_c03_c03').val()) + parseFloat($('#jt_c04_c03').val()) + parseFloat($('#jt_c05_c03').val());

        var total_c04 = parseFloat($('#jt_c01_c04').val()) + parseFloat($('#jt_c02_c04').val()) + parseFloat($(
            '#jt_c03_c04').val()) + parseFloat($('#jt_c04_c04').val()) + parseFloat($('#jt_c05_c04').val());

        var total_c05 = parseFloat($('#jt_c01_c05').val()) + parseFloat($('#jt_c02_c05').val()) + parseFloat($(
            '#jt_c03_c05').val()) + parseFloat($('#jt_c04_c05').val()) + parseFloat($('#jt_c05_c05').val());


        $('#total_c01').val(total_c01);
        $('#total_c02').val(total_c02);
        $('#total_c03').val(total_c03);
        $('#total_c04').val(total_c04);
        $('#total_c05').val(total_c05);


    }


    $('#jt_c01_c02').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c01_c02').val();
        changeParams("#jt_c02_c01", data)
    });

    $('#jt_c01_c03').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c01_c03').val();
        changeParams("#jt_c03_c01", data)
    });

    $('#jt_c01_c04').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c01_c04').val();
        changeParams("#jt_c04_c01", data)
    });

    $('#jt_c01_c05').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c01_c05').val();
        changeParams("#jt_c05_c01", data)
    });

    $('#jt_c02_c03').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c02_c03').val();
        changeParams("#jt_c03_c02", data)
    });

    $('#jt_c02_c04').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c02_c04').val();
        changeParams("#jt_c04_c02", data)
    });

    $('#jt_c02_c05').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c02_c05').val();
        changeParams("#jt_c05_c02", data)
    });

    $('#jt_c03_c04').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c03_c04').val();
        changeParams("#jt_c04_c03", data)
    });

    $('#jt_c03_c05').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c03_c05').val();
        changeParams("#jt_c05_c03", data)
    });

    $('#jt_c04_c05').change(function (e) {
        e.preventDefault();
        var data = $('#jt_c04_c05').val();
        changeParams("#jt_c05_c04", data)
    });

</script>
@endsection
