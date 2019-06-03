@extends('base.app')
@section('content')
    {{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Penyimpanan @if($gudang->tanggal_keluar != "")<span style="color: #EF172C">*</span>@endif
                        <span class="float-right">
                            <a href="{{ route('gudang.index') }}">
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
                                <th>Jumlah Karung</th>
                                <th>Jalur</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php( $i = 1 )
                            @foreach($blok_gudang as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->nama_blok }} {{ $data->kolom }} {{ $data->baris }}</td>
                                    <td>{{ $data->jumlah_karung }}</td>
                                    <td><span class="badge badge-info">{{ $data->jalur }}</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @if($gudang->tanggal_keluar != "")
                    <div class="card-footer">
                        <h6 style="font-style: italic">
                            <span class="badge badge-warning"> <span style="color: #EF172C">* </span>
                                Data berdasarkan penyimpanan terakhir sebelum keluar gudang.
                            </span>
                        </h6>
                    </div>
                @endif
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Detail Data Gudang
                        <span class="float-right">
                            <form action="{{ route('gudang.destroy', $gudang->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('gudang.show', $gudang->id) }}" class="btn btn-info">
                                    <i class="fa fa-info"></i>
                                </a>
                                @if($gudang->tanggal_keluar == "")
                                    <a href="{{ route('gudang.checkout', $gudang->id) }}" class="btn btn-primary text-white">
                                        <i class="fa fa-truck-moving"></i>
                                    </a>
                                @endif
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </span>
                    </h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset("storage/qr_code/" . $gudang->qr_code) }}">
                    </div>
                    <div class="accrodion-regular">
                        <div id="accordion3">
                            <div class="card mb-2">
                                <div class="card-header" id="headingNine" style="background: #4656E9">
                                    <h5 class="mb-0">
                                        <button class="btn btn-link collapsed text-white" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                            <span class="fas fa-angle-double-down mr-3"></span>Data Gudang (Klik untuk melihat)
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion3">
                                    <div class="card-body">
                                        <table class="table">
                                            <tr>
                                                <td>ID</td>
                                                <td>:&nbsp</td>
                                                <td>{{ $gudang->id }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kota</td>
                                                <td>:&nbsp</td>
                                                <td>{{ $gudang->nama_kota }}</td>
                                            </tr>
                                            <tr>
                                                <td>Jenis</td>
                                                <td>:&nbsp</td>
                                                <td>{{ $gudang->nama_jenis }}</td>
                                            </tr>
                                            <tr>
                                                <td>Kualitas</td>
                                                <td>:&nbsp</td>
                                                <td>{{ $gudang->jenis_kualitas }}</td>
                                            </tr>
                                            <tr>
                                                <td>Berat</td>
                                                <td>:&nbsp</td>
                                                <td>{{ $gudang->berat }} Kg</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah</td>
                                                <td>:&nbsp</td>
                                                <td>{{ $gudang->jumlah_karung }} karung</td>
                                            </tr>
                                            <tr>
                                                <td>Tgl Masuk</td>
                                                <td>:&nbsp</td>
                                                <td>{{ $gudang->tanggal_masuk }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tgl Keluar</td>
                                                <td>:&nbsp</td>
                                                <td>
                                                    @if($gudang->tanggal_keluar != "")
                                                        {{ $gudang->tanggal_keluar }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:&nbsp</td>
                                                <td>
                                                    @inject('gudang_service', 'App\Services\GudangServices')
                                                    @if($gudang_service->isExpired($gudang->id))
                                                        <span class="badge badge-danger text-white">Expired</span>
                                                    @else
                                                        <span class="badge badge-success">Baik</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kota</td>
                                                <td>:&nbsp</td>
                                                <td>{{ $gudang->nama_kota }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--</div>--}}
@endsection
