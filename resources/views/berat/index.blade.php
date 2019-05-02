@extends('base.app')
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Berat Beras</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered custom1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Berat</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php( $i = 1 )
                            @foreach($berat as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->berat }} Kg</td>
                                    <td>

                                        <form action="{{ route('berat.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('berat.edit', $data->id) }}" class="btn btn-warning text-white">
                                                <i class="fa fa-edit"></i>
                                            </a>
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

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Tambah Berat Beras</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('berat.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Berat (Kg)</label>
                            <input id="inputText3" type="number" class="form-control" name="berat" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
