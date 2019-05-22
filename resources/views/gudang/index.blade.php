@extends('base.app')
@section('content')
    {{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Gudang</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Kota</th>
                                <th>Jenis</th>
                                <th>Kualitas</th>
                                <th>Berat</th>
                                <th>Jumlah</th>
                                <th>Tgl Masuk</th>
                                <th>Tgl Keluar</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php( $i = 1 )
                                @foreach($v_gudang as $data)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->nama_kota }}</td>
                                        <td>{{ $data->nama_jenis }}</td>
                                        <td>{{ $data->jenis_kualitas }}</td>
                                        <td>{{ $data->berat }} Kg</td>
                                        <td>{{ $data->jumlah_karung }}</td>
                                        <td>{{ $data->tanggal_masuk }}</td>
                                        <td>
                                            @if($data->tanggal_keluar != "")
                                                {{ $data->tanggal_keluar }}
                                            @else
                                                -
                                            @endif
                                        </td>
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
