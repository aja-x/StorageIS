@extends('base.app')
@section('content')
    {{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0"></h5>
                    <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Blok</th>
                                <th>Kapasitas</th>
                                <th>Sisa</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php( $i = 1 )
                                @foreach($blok as $data)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->nama_blok }} {{ $data->kolom_blok }} {{ $data->baris_blok }}</td>
                                        <td>{{ $data->kapasitas_blok }}</td>
                                        <td>{{ $data->sisa_kapasitas_blok }}</td>
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
