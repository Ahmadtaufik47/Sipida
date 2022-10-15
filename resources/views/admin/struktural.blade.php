@extends('layout.main')

@section('konten')
    @if (session()->has('berhasil'))
        <div class="alert alert-success alert-dismissable fade show" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container-fluid mt-3 mb-3">
        <div class="col-lg-6">
            <h4 class="text-uppercase">Ubah Data Personil</h4>
            <form action="/desa/s/u/{{ $struktural->id }}" method="POST" class="mt-3">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan"
                        value="{{ $struktural->jabatan }}"></input>
                </div>
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control" id="nip" name="nip"
                        value="{{ $struktural->nip }}"></input>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        value="{{ $struktural->nama }}"></input>
                </div>
                <button type="submit" class="btn btn-success">
                    Ubah
                </button>
            </form>
        </div>
    </div>
@endsection
