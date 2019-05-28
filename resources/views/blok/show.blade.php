@extends('base.app')
@section('content')
    {{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Detail Blok <span class="badge badge-primary">{{ $blok[0]['nama_blok'] }}</span>
                        <span class="float-right">
                            <a href="{{ route('blok.index') }}">
                                <button class="btn btn-primary">Kembali</button>
                            </a>
                        </span>
                    </h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered custom1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Blok</th>
                                <th>Sisa Kapasitas</th>
                                <th>Penggunaan</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php( $i = 1 )
                            @foreach($blok as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><span class="badge badge-info">{{ $data->nama_blok }} {{ $data->kolom }} {{ $data->baris }}</span></td>
                                    <td>{{ $data->sisa_kapasitas }}</td>
                                    <td>
                                        @inject('blok_service', 'App\Services\BlokServices')
{{--                                        {{ dd($blok_service->getIdGudang($data->id)['blok_gudang']) }}--}}
                                        @if(count($blok_service->getIdGudang($data->id)['blok_gudang']) == 0)
                                            <span class="badge badge-info">Belum digunakan</span>
                                        @else
                                            @php($i = 1)
                                            @foreach($blok_service->getIdGudang($data->id)['blok_gudang'] as $data)
                                            <a href="{{ route('gudang.show', $data->id_gudang) }}">
                                                <span class="badge badge-info"><span class="fa fa-warehouse"></span> ID <span class="badge badge-warning">{{ $data->id_gudang }}</span></span>
                                            </a>
                                            @endforeach
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
{{--        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h5 class="mb-0">Detail Gudang--}}
{{--                        <span class="float-right">--}}
{{--                            <form action="{{ route('gudang.destroy', $gudang->id) }}" method="post">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <a href="{{ route('gudang.show', $gudang->id) }}" class="btn btn-info">--}}
{{--                                    <i class="fa fa-info"></i>--}}
{{--                                </a>--}}
{{--                                @if($gudang->tanggal_keluar == "")--}}
{{--                                    <a href="{{ route('gudang.checkout', $gudang->id) }}" class="btn btn-primary text-white">--}}
{{--                                        <i class="fa fa-truck-moving"></i>--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                                <button type="submit" class="btn btn-danger">--}}
{{--                                    <i class="fa fa-trash"></i>--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        </span>--}}
{{--                    </h5>--}}
{{--                    <p></p>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <table class="table">--}}
{{--                        <tr>--}}
{{--                            <td>Kota</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>{{ $gudang->nama_kota }}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Jenis</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>{{ $gudang->nama_jenis }}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Kualitas</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>{{ $gudang->jenis_kualitas }}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Berat</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>{{ $gudang->berat }}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Jumlah</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>{{ $gudang->jumlah_karung }} karung</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Tgl Masuk</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>{{ $gudang->tanggal_masuk }}</td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Tgl Keluar</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>--}}
{{--                                @if($gudang->tanggal_keluar != "")--}}
{{--                                    {{ $gudang->tanggal_keluar }}--}}
{{--                                @else--}}
{{--                                    ---}}
{{--                                @endif--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Status</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>--}}
{{--                                @inject('gudang_service', 'App\Services\GudangServices')--}}
{{--                                @if($gudang_service->isExpired($gudang->id))--}}
{{--                                    <span class="badge badge-danger text-white">Expired</span>--}}
{{--                                @else--}}
{{--                                    <span class="badge badge-success">Baik</span>--}}
{{--                                @endif--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td>Kota</td>--}}
{{--                            <td>:&nbsp</td>--}}
{{--                            <td>{{ $gudang->nama_kota }}</td>--}}
{{--                        </tr>--}}

{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    {{--</div>--}}
@endsection

