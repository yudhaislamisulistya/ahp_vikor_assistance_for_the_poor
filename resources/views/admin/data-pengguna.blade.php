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
                    <span>Data Pengguna</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pengguna</a></li>
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
                        <h4 class="card-title">Data Pengguna</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Tanggal Buat</th>
                                        <th>Tanggal Ubah</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $value)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$value->name}}</td>
                                            <td>{{$value->email}}</td>
                                            <td>{{$value->created_at}}</td>
                                            <td>{{$value->updated_at}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="#" class="btn btn-danger shadow btn-xs sharp" id="hapusData" data-id="{{$value->id}}"><i class="fa fa-trash"></i></a>
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
    </div>
</div>
@endsection

@section('javascript')
    <!-- Datatable -->
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
    <script>
        $('#hapusData').click(function (e) {
            e.preventDefault();
            var id = $(this).attr("data-id");
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it !!",
                cancelButtonText: "No, cancel it !!",
                closeOnConfirm: !1,
                closeOnCancel: !1,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: "GET",
                        url: "{{url('/hapus-data-pengguna')}}/" + id,
                        success: function (data) {
                            swal("Data Mahasiswa Berhasil Dihapus!", {
                                icon: "success",
                            }).then(function () {
                                window.location = "{{route('showDataPengguna')}}"
                            });
                        }
                    });
                } else {
                    swal("Data Mahasiswa Gagal Dihapus!", {
                        icon: "error",
                    });
                }
            });
        });
    </script>
@endsection
