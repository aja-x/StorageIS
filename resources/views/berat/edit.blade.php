@extends('base.app')
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Edit Berat Beras</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('berat.update', $berat->id) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Berat (Kg)</label>
                            <input id="inputText3" type="number" class="form-control"
                                   name="berat" value="{{ $berat->berat }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
