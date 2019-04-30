@extends('base.app')
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Edit Asal Kota</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('kota.update', $asalKota->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Nama Kota</label>
                            <input id="inputText3" type="text" class="form-control"
                                   name="nama_kota" value="{{ $asalKota->nama_kota }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
