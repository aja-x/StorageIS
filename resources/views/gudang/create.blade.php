@extends('base.app')
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Tambah Data Gudang</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('gudang.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="kota" class="col-form-label">Asal Kota</label>
                            <select class="form-control" name="kota" id="kota">
                                @foreach($kota as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kota }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_beras" class="col-form-label">Jenis Beras</label>
                            <select class="form-control" name="jenis_beras" id="jenis_beras">
                                @foreach($jenisberas as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_jenis }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kualitas_beras" class="col-form-label">Kualitas Beras</label>
                            <select class="form-control" name="kualitas_beras" id="kualitas_beras">
                                @foreach($kualitasberas as $data)
                                    <option value="{{ $data->id }}">{{ $data->jenis_kualitas }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="berat_beras" class="col-form-label">Berat Beras</label>
                            <select class="form-control" name="berat_beras" id="berat_beras">
                                @foreach($berat as $data)
                                    <option value="{{ $data->id }}">{{ $data->berat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Jumlah Karung</label>
                            <input id="inputText3" type="number" class="form-control" name="jumlah_karung" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
