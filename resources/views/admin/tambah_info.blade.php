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
            <h4 class="text-uppercase">Tambah Info Desa</h4>
            <form action="/desa/i/s/" method="POST" class="mt-3">
                @csrf
                <select class="form-select" name="desa_id" id="desa_id" aria-label="Personil Desa">
                    @foreach ($list_desa as $desa)
                        <option value="{{ $desa->id }}">{{ $desa->nama_desa }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}"
                        required></input>
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" value="{{ old('isi') }}"
                        required></input>
                </div>
                <button type="submit" class="btn btn-success">
                    Tambah
                </button>
            </form>
        </div>
    </div>
@endsection
