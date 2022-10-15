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
            <i class="fa-solid fa-pen-to-square text-success fa-3x mb-3"></i>
            <h4 class="text-uppercase">Ubah Visi & Misi</h4>
            <form action="/desa/u/{{ $desa->id }}" method="POST" class="mt-3">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="visi" class="form-label">Visi</label>
                    <input type="text" class="form-control" id="visi" name="visi"
                        value="{{ $desa->visi }}"></input>
                </div>
                <div class="mb-3">
                    <label for="misi" class="form-label">Misi</label>
                    <input type="text" class="form-control" id="misi" name="misi"
                        value="{{ $desa->misi }}"></input>
                </div>
                <button type="submit" class="btn btn-success">
                    Ubah
                </button>
            </form>
        </div>
    </div>
@endsection
