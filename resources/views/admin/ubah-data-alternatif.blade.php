@extends('layouts.master')

@section('title', 'Admin Panel - Tambah Data Alternatif')


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Ubah Data Alternatif</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Ubah Data Alternatif</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if (Session::get("status") == "success")
                    <div class="alert alert-success" role="alert"><strong>Berhasil! </strong>Data Berhasil Diubah
                        Kedalam Database</div>
                    @elseif(Session::get("status") == "failed")
                    <div class="alert alert-danger" role="alert"><strong>Gagal! </strong>Data Gagal Diubah Kedalam
                        Database</div>
                    @endif
                    <div class="card-header">
                        <h4 class="card-title">Form Ubah Data Alternatif</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('postUbahDataAlternatif', ['id' => $data->id])}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">NIK</label>
                                    <div class="col-sm-9">
                                        <input value="{{$data->nik}}" type="text" class="form-control" placeholder="Masukkan NIK" name="nik">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input value="{{$data->nama}}" type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input value="{{$data->alamat}}" type="text" class="form-control" placeholder="Masukkan Alamat" name="alamat">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Penghasilan Perbulan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ha_pp" id="ha_pp">
                                            <option value="{{$data->ha_pp}}" selected>{{$data->ha_pp}}</option>
                                            <option disabled value>-------------------</option>
                                            <option value="5"><=500.000</option>
                                            <option value="4">600.000 - 1.500.000</option>
                                            <option value="3">1.600.000 - 2.500.000</option>
                                            <option value="2">2.600.000 – 4.000.000</option>
                                            <option value="1">> 4.000.000</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pekerjaan Kepala Keluarga</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ha_pkrkk" id="ha_pkrkk">
                                            <option value="{{$data->ha_pkrkk}}" selected>{{$data->ha_pkrkk}}</option>
                                            <option disabled value>-------------------</option>
                                            <option value="5">Tidak Bekerja</option>
                                            <option value="4">Buruh</option>
                                            <option value="3">Petani</option>
                                            <option value="2">Pedagang / Wirausaha</option>
                                            <option value="1">Pengusaha / PNS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pekerjaan Jumlah Tanggungan</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ha_jt" id="ha_jt">
                                            <option value="{{$data->ha_jt}}" selected>{{$data->ha_jt}}</option>
                                            <option disabled value>-------------------</option>
                                            <option value="5">>12</option>
                                            <option value="4">8-12</option>
                                            <option value="3">7-8</option>
                                            <option value="2">3-6</option>
                                            <option value="1">1-2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan Kepala Keluarga</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ha_pddkk" id="ha_pddkk">
                                            <option value="{{$data->ha_pddkk}}" selected>{{$data->ha_pddkk}}</option>
                                            <option disabled value>-------------------</option>
                                            <option value="5">Tidak Sekolah</option>
                                            <option value="4">SD</option>
                                            <option value="3">SMP</option>
                                            <option value="2">SMA</option>
                                            <option value="1">Perguruan Tinggi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Pendidikan Kepala Keluarga</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="ha_sa" id="ha_sa">
                                            <option value="{{$data->ha_sa}}" selected>{{$data->ha_sa}}</option>
                                            <option disabled value>-------------------</option>
                                            <option value="4">Air Sungai / Air Hujan</option>
                                            <option value="3">Sumur BOR</option>
                                            <option value="2">PDAM</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

