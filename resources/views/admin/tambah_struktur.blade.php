@extends('layout.kelola')

@section('konten')
    @if (session()->has('berhasil'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container-fluid mt-3 mb-3">
        <div class="col-lg-6">
            <h4 class="text-uppercase">Tambah Data Personil</h4>
            <form action="/desa/s/s/" method="POST" class="mt-3">
                @csrf
                <select class="form-select" name="desa_id" id="desa_id" aria-label="Personil Desa">
                    @foreach ($list_desa as $desa)
                        <option value="{{ $desa->id }}">{{ $desa->nama_desa }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan') }}"
                        required></input>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip" value="{{ old('nip') }}"
                        required></input>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}"
                        required></input>
                </div>
                <button type="submit" class="btn btn-success">
                    Tambah
                </button>
            </form>
        </div>
    </div>
@endsection
