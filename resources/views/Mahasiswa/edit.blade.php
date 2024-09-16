@extends('layout')

@section('konten')
    <h4>Ubah Mahasiswa</h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            Maaf, terdapat kesalahan dalam input data. <br> Silahkan periksa kembali data Anda.
        </div>
    @endif


    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for=""></label>
        <div class="row mt-2">
            <div class="col">
                <label for="basic-url" class="form-label">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror"
                    placeholder="Masukkan Nama Depan" aria-label="Nama Depan"
                    value="{{ old('nama_depan', $mahasiswa->nama_depan) }}">
                @error('nama_depan')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="basic-url" class="form-label">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror"
                    placeholder="Masukkan Nama Belakang" aria-label="Nama Belakang"
                    value="{{ old('nama_belakang', $mahasiswa->nama_belakang) }}">
                @error('nama_belakang')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Nomor Induk Mahasiswa</label>
        <input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror "
            placeholder="Masukkan NIM" value="{{ old('nim', $mahasiswa->nim) }}">
        @error('nim')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Agama</label>
        <select name="agama" class="form-control @error('agama') is-invalid @enderror" aria-label=Default select example
            value="{{ old('agama', $mahasiswa->agama) }}">
            <option value="">Pilih</option>
            <option value="Islam" {{ old('agama', $mahasiswa->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
            <option value="Katolik" {{ old('agama', $mahasiswa->agama) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
            <option value="Hindu" {{ old('agama', $mahasiswa->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
            <option value="Buddha" {{ old('agama', $mahasiswa->agama) == 'Buddha' ? 'selected' : '' }}>Buddha</option>
            <option value="Khonghucu" {{ old('agama', $mahasiswa->agama) == 'Khonghucu' ? 'selected' : '' }}>Khonghucu
            </option>
        </select>

        @error('agama')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Alamat</label>
        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror "
            placeholder="Masukkan Alamat" value="{{ old('alamat', $mahasiswa->alamat) }}">
        @error('alamat')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Jenis Kelamin</label>
        <div class="form-check">
            <input value="Pria" name="jk" class="form-check-input" type="radio"
                {{ old('jk', $mahasiswa->jk) == 'Pria' ? 'checked' : '' }}>
            <label class="form-check-label" for="Pria">
                Pria
            </label>
        </div>
        <div class="form-check ">
            <input value="Wanita" class="form-check-input " type="radio" name="jk"
                {{ old('jk', $mahasiswa->jk) == 'Wanita' ? 'checked' : '' }}>
            <label class="form-check-label" for="Wanita">
                Wanita
            </label>
        </div>
        @error('jk')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Hobi</label>
        <input type="text" name="hobi" class="form-control @error('hobi') is-invalid @enderror"
            placeholder="Masukkan Hobi" value="{{ old('hobi', $mahasiswa->hobi) }}">
        @error('hobi')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Nomor HP</label>
        <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
            placeholder="Masukkan Nomor HP" value="{{ old('no_hp', $mahasiswa->no_hp) }}">
        @error('no_hp')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror


        <div class="form-check form-switch mt-2">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="syarat"
                value="1" {{ old('syarat', $mahasiswa->syarat) == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="flexSwitchCheckDefault">Menerima Syarat dan Ketentuan</label>
        </div>
        @error('syarat')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
        <br>
        <button class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
