@extends('base.app')
@section('content')
{{--<div class="ecommerce-widget">--}}
@inject('home_service', 'App\Services\HomeServices' )
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Selamat Datang</h5>
                <div class="card-body">
                    Selamat datang, {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Kapasitas</h5>
                        <h2 class="mb-0"> {{ $home_service->getTotalKapasitas() }}</h2>
                        Karung
                    </div>
                    <div class="float-right icon-circle-medium icon-box-lg bg-primary-light mt-1">
                        <i class="fa fa-warehouse fa-fw fa-sm text-primary"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Total Beras</h5>
                        <h2 class="mb-0"> {{ $home_service->getTotalBeras() }}</h2>
                        Karung
                    </div>
                    <div class="float-right icon-circle-medium icon-box-lg bg-info-light mt-1">
                        <i class="fa fa-box-open fa-fw fa-sm text-info"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card border-3 border-top border-top-primary">
                <div class="card-body">
                    <div class="d-inline-block">
                        <h5 class="text-muted">Sisa Kapasitas</h5>
                        <h2 class="mb-0"> {{ $home_service->getSisaKapasitas() }}</h2>
                        Karung
                    </div>
                    <div class="float-right icon-circle-medium icon-box-lg bg-brand-light mt-1">
                        <i class="fa fa-boxes fa-fw fa-sm text-brand"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--</div>--}}
@endsection
