@extends('layout')

@section('konten')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Mahasiswa Sekian</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Nama</th>
                                <td>{{ $mahasiswa->nama_depan . ' ' . $mahasiswa->nama_belakang }}</td>
                            </tr>
                            <tr>
                                <th>NIM</th>
                                <td>{{ $mahasiswa->nim }}</td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td>{{ $mahasiswa->agama }}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>{{ $mahasiswa->alamat }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td>{{ $mahasiswa->jk }}</td>
                            </tr>
                            <tr>
                                <th>Hobi</th>
                                <td>{{ $mahasiswa->hobi }}</td>
                            </tr>
                            <tr>
                                <th>No HP</th>
                                <td>{{ $mahasiswa->no_hp }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary float-end">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
