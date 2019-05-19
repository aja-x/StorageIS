@extends('base.app')
@section('content')
    {{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Blok</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Blok</th>
                                <th>Sisa Kapasitas</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php( $i = 1 )
                                @foreach($blok as $data)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->nama_blok }} {{ $data->kolom }} {{ $data->baris }}</td>
                                        <td>{{ $data->sisa_kapasitas }}</td>
                                        <td>Hai :)</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--</div>--}}
@endsection
