@extends('layout')

@section('konten')
    <div class="container mt-5">
        <div class="row justify-content-between align-items-center mb-3">
            <div class="col-md-6">
                <h4 class="mb-0">Daftar Mahasiswa</h4>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-success">Tambah Mahasiswa</a>
            </div>
        </div>

        @if (session('status'))
            <div class="alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                {{ session('status') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                    id="btn-close-alert"></button>


            </div>
        @endif

        <div class="alert alert-danger alert-dismissible fade show" id="alert-confirmation" role="alert"
            style="display: none;">
            Apakah anda yakin ingin menghapus data ini ?
            <button type="button" id="btn-destroy" class="btn btn-danger">Ya</button>
            <button type="button" id="btn-cancel" class="btn btn-warning">Tidak</button>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="text-center align-middle">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Hobi</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswas as $mahasiswa)
                                <tr class="text-center align-middle">
                                    <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                    <td>{{ $mahasiswa->nama_depan . ' ' . $mahasiswa->nama_belakang }}</td>
                                    <td>{{ $mahasiswa->nim }}</td>
                                    <td>{{ $mahasiswa->agama }}</td>
                                    <td>{{ $mahasiswa->alamat }}</td>
                                    <td>{{ $mahasiswa->jk }}</td>
                                    <td>{{ $mahasiswa->hobi }}</td>
                                    <td>{{ $mahasiswa->no_hp }}</td>
                                    <td>
                                        <div class="btn-group d-flex justify-content-around">
                                            <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}"
                                                class="btn btn-info btn-sm">Lihat</a>
                                            <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                                                class="btn btn-warning btn-sm">Ubah</a>
                                            <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        setTimeout(function() {
            document.getElementById('alert-success').style.display = 'none';
        }, 4000); // hide the notification after 10 seconds
    </script>


    <script>
        // Select the delete buttons
        const deleteButtons = document.querySelectorAll('.btn-danger');

        // Add a click event listener to each delete button
        deleteButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                // Show the confirmation alert
                document.getElementById('alert-confirmation').style.display = 'block';

                // Get the form associated with the delete button
                const form = button.closest('form');

                // Add a click event listener to the destroy button
                document.getElementById('btn-destroy').addEventListener('click', function() {
                    // Submit the form to delete the record
                    form.submit();
                });

                // Add a click event listener to the cancel button
                document.getElementById('btn-cancel').addEventListener('click', function() {
                    // Hide the confirmation alert
                    document.getElementById('alert-confirmation').style.display = 'none';
                });
            });
        });
    </script>

    <script>
        // Select all elements with the class name 'my-class'
        const elements = document.getElementById('alert-success');
        const button = document.getElementById('btn-close-alert');


        // Add a click event listener to the button
        button.addEventListener('click', function() {
            elements.remove();

        })
    </script>
@endpush
