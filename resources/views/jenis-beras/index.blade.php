@extends('base.app')
@section('content')
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Jenis Beras</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered custom1">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jenis</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php( $i = 1 )
                            @foreach($jenisberas as $data)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $data->nama_jenis }}</td>
                                    <td>

                                        <form action="{{ route('jenisberas.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('jenisberas.edit', $data->id) }}" class="btn btn-warning text-white">
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
                    <h5 class="mb-0">Tambah Jenis Beras</h5>
                    <p></p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('jenisberas.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Nama Jenis Beras</label>
                            <input id="inputText3" type="text" class="form-control" name="nama_jenis" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
