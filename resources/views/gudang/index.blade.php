@extends('base.app')
@section('content')
{{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Welcome</h5>
                <div class="card-body">
                    Welcome {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
{{--</div>--}}
@endsection
