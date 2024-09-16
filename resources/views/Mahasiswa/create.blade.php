@extends('layout')

@section('konten')
    <h4>Silahkan Mengisi Data</h4>
    @if ($errors->any())
        <div class="alert alert-danger">
            Maaf, terdapat kesalahan dalam input data. <br> Silahkan periksa kembali data Anda.
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf
        <label for=""></label>
        <div class="row">
            <div class="col">
                <label for="basic-url" class="form-label mt-2">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror"
                    placeholder="Masukkan Nama Depan" aria-label="Nama Depan" value="{{ old('nama_depan') }}">
                @error('nama_depan')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="col">
                <label for="basic-url" class="form-label mt-2">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror"
                    placeholder="Masukkan Nama Belakang" aria-label="Nama Belakang" value="{{ old('nama_belakang') }}">
                @error('nama_belakang')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Nomor Induk Mahasiswa</label>
        <input type="number" name="nim" class="form-control @error('nim') is-invalid @enderror "
            placeholder="Masukkan NIM" value="{{ old('nim') }}">
        @error('nim')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Agama</label>
        <select name="agama" class="form-control @error('agama') is-invalid @enderror" aria-label=Default select example
            value="{{ old('agama') }}">
            <option value="">Pilih</option>
            <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
            <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
            <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
            <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
            <option value="Khonghu" {{ old('agama') == 'Khonghucu' ? 'selected' : '' }}>Khonghucu</option>
        </select>
        @error('agama')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Alamat</label>
        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
            placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
        @error('alamat')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Jenis Kelamin</label>
        <div class="form-check">
            <input value="Pria" name="jk" class="form-check-input" type="radio"
                {{ old('jk') == 'Pria' ? 'checked' : '' }}>
            <label class="form-check-label" for="Pria">
                Pria
            </label>
        </div>
        <div class="form-check">
            <input value="Wanita" class="form-check-input" type="radio" name="jk"
                {{ old('jk') == 'Wanita' ? 'checked' : '' }}>
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
            placeholder="Masukkan Hobi" value="{{ old('hobi') }}">
        @error('hobi')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror

        <label for=""></label>
        <label for="basic-url" class="form-label mt-2">Nomor HP</label>
        <input type="number" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror"
            placeholder="Masukkan Nomor HP" value="{{ old('no_hp') }}">
        @error('no_hp')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror


        <div class="form-check form-switch mt-2">
            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="syarat"
                value="1" {{ old('syarat') == 1 ? 'checked' : '' }}>
            <label class="form-check-label" for="flexSwitchCheckDefault">Menerima Syarat dan Ketentuan</label>
        </div>
        @error('syarat')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
        @enderror
        <br>
        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection
