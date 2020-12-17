@extends('layouts.master')
@section('title', 'Admin Panel - Grafik Perbandingan Metode AHP dan VIKOR')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Grafik Perbandingan Metode AHP dan Vikor</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Grafik Perbandingan Metode AHP dan Vikor</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Grafik Perbandingan Metode AHP dan Vikor</h4>
                    </div>
                    <div class="card-body">
                        <div id="grafikPerbandinganMetode" class="flot-chart"></div>
                        <div>
                            Biru : VIKOR
                        </div>
                        <div>
                            Hijau : AHP
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script src="vendor/flot/jquery.flot.js"></script>
<script src="vendor/flot/jquery.flot.pie.js"></script>
<script src="vendor/flot/jquery.flot.resize.js"></script>
<script src="vendor/flot-spline/jquery.flot.spline.min.js"></script>
<script src="js/plugins-init/flot-init.js"></script>
<script>
    $.plot("#grafikPerbandinganMetode", [{
        data: [
            [0, 20],
        ],
        bars: {
            show: true,
            lineWidth: 0,
            fillColor: '#3a7afe'
        }
    }, {
        data: [
            [1, 15],
        ],
        bars: {
            show: true,
            lineWidth: 0,
            fillColor: '#10ca93'
        }
    }], {
        grid: {
            borderWidth: 1,
            borderColor: 'transparent'
        },
        yaxis: {
            tickColor: 'transparent',
            font: {
                color: '#fff',
                size: 10
            }
        },
        xaxis: {
            tickColor: 'transparent',
            font: {
                color: '#fff',
                size: 10
            }
        }
    });
</script>
@endsection
