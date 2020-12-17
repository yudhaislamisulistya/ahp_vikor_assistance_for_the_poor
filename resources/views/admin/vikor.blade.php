@extends('layouts.master')

@section('title', 'Admin Panel - Metode VIKOR')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Perhitungan Dengan Metode VIKOR</span>
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
                    <div class="card-header">
                        <h2>Menyusun Alternatif Dan Kriteria Kedalam Bentuk Matriks Keputusan</h2>
                    </div>
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data  as $key => $value)
                                        <tr>
                                            <td>{{$value->nama}}</td>
                                            <td>{{$value->ha_pp}}</td>
                                            <td>{{$value->ha_pkrkk}}</td>
                                            <td>{{$value->ha_jt}}</td>
                                            <td>{{$value->ha_pddkk}}</td>
                                            <td>{{$value->ha_sa}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Normalisasi Tabel (MAX-X / MAX-MIN)</h2>
                    </div>
                    <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data  as $key => $value)
                                        <tr>
                                            <td>{{$value->nama}}</td>
                                            <td>{{(max($C1Value)-$value->ha_pp) / (max($C1Value)-min($C1Value))}}</td>
                                            <td>{{(max($C2Value)-$value->ha_pkrkk) / (max($C2Value)-min($C2Value))}}</td>
                                            <td>{{(max($C3Value)-$value->ha_jt) / (max($C3Value)-min($C3Value))}}</td>
                                            <td>{{(max($C4Value)-$value->ha_pddkk) / (max($C4Value)-min($C4Value))}}</td>
                                            <td>{{(max($C5Value)-$value->ha_sa) / (max($C5Value)-min($C5Value))}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
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
                        <h2>Menentukan Bobot Kriteria</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('postVikorBobot')}}" method="post">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kriteria</th>
                                            <th>Bobot</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>C1</td>
                                            <td>Penghasilan Perbulan</td>
                                            <td>
                                                <input type="text" name="b_pp" class="form-control" value="{{$bobot->b_pp}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>C2</td>
                                            <td>Pekerjaan Kepala Keluarga</td>
                                            <td>
                                                <input type="text" name="b_pkrpkk" class="form-control" value="{{$bobot->b_pkrpkk}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>C3</td>
                                            <td>Jumlah Tanggungan</td>
                                            <td>
                                                <input type="text" name="b_jt" class="form-control" value="{{$bobot->b_jt}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>C4</td>
                                            <td>Pendidikan Kepala Keluarga</td>
                                            <td>
                                                <input type="text" name="b_pddpkk" class="form-control" value="{{$bobot->b_pddpkk}}">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>C1</td>
                                            <td>Sumber Air</td>
                                            <td>
                                                <input type="text" name="b_sa" class="form-control" value="{{$bobot->b_sa}}">
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
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Hasil Normalisasi Dikali Bobot ((MAX-X / MAX-MIN) * Bobot)</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('postAHPPerbandinganSumberAir')}}" method="post">
                            @csrf
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>C1</th>
                                            <th>C2</th>
                                            <th>C3</th>
                                            <th>C4</th>
                                            <th>C5</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data  as $key => $value)
                                        <tr>
                                            <td>{{$value->nama}}</td>
                                            <td>{{((max($C1Value)-$value->ha_pp) / (max($C1Value)-min($C1Value)) * $bobot->b_pp)}}</td>
                                            <td>{{((max($C2Value)-$value->ha_pkrkk) / (max($C2Value)-min($C2Value)) * $bobot->b_pkrpkk)}}</td>
                                            <td>{{((max($C3Value)-$value->ha_jt) / (max($C3Value)-min($C3Value)) * $bobot->b_jt)}}</td>
                                            <td>{{((max($C4Value)-$value->ha_pddkk) / (max($C4Value)-min($C4Value)) * $bobot->b_pddpkk)}}</td>
                                            <td>{{((max($C5Value)-$value->ha_sa) / (max($C5Value)-min($C5Value)) * $bobot->b_sa)}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Nilai Utility Measure (s) dan Regrate Measure R</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Status</th>
                                        <th>S</th>
                                        <th>R</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $SValue = array();
                                        $RValue = array();
                                    ?>
                                    @foreach ($data  as $key => $value)
                                    <?php
                                        $alternatif_array = array();
                                        array_push($alternatif_array, ((max($C1Value)-$value->ha_pp) / (max($C1Value)-min($C1Value)) * $bobot->b_pp), ((max($C2Value)-$value->ha_pkrkk) / (max($C2Value)-min($C2Value)) * $bobot->b_pkrpkk), ((max($C3Value)-$value->ha_jt) / (max($C3Value)-min($C3Value)) * $bobot->b_jt), ((max($C4Value)-$value->ha_pddkk) / (max($C4Value)-min($C4Value)) * $bobot->b_pddpkk), ((max($C5Value)-$value->ha_sa) / (max($C5Value)-min($C5Value)) * $bobot->b_sa));
                                        $alternatif_s = ((max($C1Value)-$value->ha_pp) / (max($C1Value)-min($C1Value)) * $bobot->b_pp) + ((max($C2Value)-$value->ha_pkrkk) / (max($C2Value)-min($C2Value)) * $bobot->b_pkrpkk) + ((max($C3Value)-$value->ha_jt) / (max($C3Value)-min($C3Value)) * $bobot->b_jt) + ((max($C4Value)-$value->ha_pddkk) / (max($C4Value)-min($C4Value)) * $bobot->b_pddpkk) + ((max($C5Value)-$value->ha_sa) / (max($C5Value)-min($C5Value)) * $bobot->b_sa);
                                    ?>
                                    <tr>
                                        <td>{{$value->nama}}</td>
                                        <td>{{$alternatif_s}}</td>
                                        <td>{{max($alternatif_array)}}</td>
                                    </tr>

                                    <?php
                                        array_push($SValue, $alternatif_s);
                                        array_push($RValue, max($alternatif_array));
                                    ?>
                                    @endforeach
                                    <tr>
                                        <td>S MIN & R MIN</td>
                                        <td>{{min($SValue)}}</td>
                                        <td>{{min($RValue)}}</td>
                                    </tr>
                                    <tr>
                                        <td>S MAX & R MAX</td>
                                        <td>{{max($SValue)}}</td>
                                        <td>{{max($RValue)}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Menentukan Indeks</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Index</th>
                                        <th>Rank</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $SValue = array();
                                        $RValue = array();
                                    ?>
                                    @foreach ($data  as $key => $value)
                                    <?php
                                        $alternatif_array = array();
                                        array_push($alternatif_array, ((max($C1Value)-$value->ha_pp) / (max($C1Value)-min($C1Value)) * $bobot->b_pp), ((max($C2Value)-$value->ha_pkrkk) / (max($C2Value)-min($C2Value)) * $bobot->b_pkrpkk), ((max($C3Value)-$value->ha_jt) / (max($C3Value)-min($C3Value)) * $bobot->b_jt), ((max($C4Value)-$value->ha_pddkk) / (max($C4Value)-min($C4Value)) * $bobot->b_pddpkk), ((max($C5Value)-$value->ha_sa) / (max($C5Value)-min($C5Value)) * $bobot->b_sa));
                                        $alternatif_s = ((max($C1Value)-$value->ha_pp) / (max($C1Value)-min($C1Value)) * $bobot->b_pp) + ((max($C2Value)-$value->ha_pkrkk) / (max($C2Value)-min($C2Value)) * $bobot->b_pkrpkk) + ((max($C3Value)-$value->ha_jt) / (max($C3Value)-min($C3Value)) * $bobot->b_jt) + ((max($C4Value)-$value->ha_pddkk) / (max($C4Value)-min($C4Value)) * $bobot->b_pddpkk) + ((max($C5Value)-$value->ha_sa) / (max($C5Value)-min($C5Value)) * $bobot->b_sa);
                                        array_push($SValue, $alternatif_s);
                                        array_push($RValue, max($alternatif_array));
                                    ?>


                                    @endforeach
                                    @foreach ($data  as $key => $value)
                                    <?php
                                        $alternatif_array = array();
                                        array_push($alternatif_array, ((max($C1Value)-$value->ha_pp) / (max($C1Value)-min($C1Value)) * $bobot->b_pp), ((max($C2Value)-$value->ha_pkrkk) / (max($C2Value)-min($C2Value)) * $bobot->b_pkrpkk), ((max($C3Value)-$value->ha_jt) / (max($C3Value)-min($C3Value)) * $bobot->b_jt), ((max($C4Value)-$value->ha_pddkk) / (max($C4Value)-min($C4Value)) * $bobot->b_pddpkk), ((max($C5Value)-$value->ha_sa) / (max($C5Value)-min($C5Value)) * $bobot->b_sa));
                                        $alternatif_s = ((max($C1Value)-$value->ha_pp) / (max($C1Value)-min($C1Value)) * $bobot->b_pp) + ((max($C2Value)-$value->ha_pkrkk) / (max($C2Value)-min($C2Value)) * $bobot->b_pkrpkk) + ((max($C3Value)-$value->ha_jt) / (max($C3Value)-min($C3Value)) * $bobot->b_jt) + ((max($C4Value)-$value->ha_pddkk) / (max($C4Value)-min($C4Value)) * $bobot->b_pddpkk) + ((max($C5Value)-$value->ha_sa) / (max($C5Value)-min($C5Value)) * $bobot->b_sa);
                                        array_push($SValue, $alternatif_s);
                                        array_push($RValue, max($alternatif_array));
                                    ?>
                                    <tr>
                                        <td>{{$value->nama}}</td>
                                        <td>{{(0.5 * ($alternatif_s-min($SValue))/(max($SValue)-min($SValue))+0.5*(max($alternatif_array)-min($RValue))/(max($RValue)-min($RValue)))}}</td>
                                        <td>{{++$key}}</td>
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
</div>
@endsection

