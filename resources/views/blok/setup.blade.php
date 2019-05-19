@extends('base.app')
@section('content')
    {{--<div class="ecommerce-widget">--}}
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Ukuran Gudang</h5>
                    <p>Masukkan ukuran gudang terlebih dahulu</p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('blok.setup') }}">
                        @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Banyak Blok</label>
                            <input id="inputText3" type="number" class="form-control" name="banyak-blok" required>
                        </div>
                            <label for="inputText4" class="col-form-label">Ukuran Tiap Blok</label>
                        <div class="form-group form-inline">
                            <input id="inputText4" type="number" class="form-control" name="baris" placeholder="Baris" required>
                            &nbsp&nbspX&nbsp&nbsp
                            <input id="inputText4" type="number" class="form-control" name="kolom" placeholder="Kolom" required>
                        </div>
                        <div class="form-group">
                            <label for="inputText5" class="col-form-label">Maksimal Tumpukan</label>
                            <input id="inputText5" type="number" class="form-control" name="tumpukan" required>
                        </div>
                        <div class="form-group">
                            <label for="inputText6" class="col-form-label">Banyak Karung Tiap Tumpukan</label>
                            <input id="inputText6" type="number" class="form-control" name="karung_tumpukan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--</div>--}}
@endsection
