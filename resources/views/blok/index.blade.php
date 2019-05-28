@extends('base.app')
@section('content')
    {{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
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
                                        <td>{{ $data->nama_blok }}</td>
                                        <td>{{ $data->sisa_kapasitas }}</td>
                                        <td>
                                            <a href="{{ route('blok.show', $data->nama_blok) }}" class="btn btn-info">
                                                <i class="fa fa-info"></i>
                                            </a>
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
    {{--</div>--}}
@endsection
