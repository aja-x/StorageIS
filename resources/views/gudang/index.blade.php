@extends('base.app')
@section('content')
    {{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Gudang
                        <span class="float-right">
                            <a href="{{ route('gudang.create') }}">
                                <button class="btn btn-primary">Tambah</button>
                            </a>
                        </span>
                    </h5>
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
                                <th>Status</th>
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
                                        <td>
                                            @inject('gudang_service', 'App\Services\GudangServices')
                                            @if($gudang_service->isExpired($data->id))
                                                <span class="badge badge-danger text-white">Expired</span>
                                            @else
                                                <span class="badge badge-success">Baik</span>
                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('gudang.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('gudang.show', $data->id) }}" class="btn btn-info">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                @if($data->tanggal_keluar == "")
                                                    <a href="{{ route('gudang.checkout', $data->id) }}" class="btn btn-primary text-white">
                                                        <i class="fa fa-truck-moving"></i>
                                                    </a>
                                                @endif
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
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
