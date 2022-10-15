@extends('layout.kelola')

@section('konten')
    <div class="container mt-3 mb-3">
        @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                {{ session('berhasil') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h5>Edit Gambar Desa {{ $desa->nama_desa }}</h5>
        <form action="/desa/img/u/{{ $desa->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img_desa" class="form-label">
                        Gambar Desa &nbsp;
                        <small class="text-danger">
                            [ Maksimal 2MB ]
                        </small>
                    </label>
                    <input class="form-control" type="file" id="img_desa" name="img_desa">
                </div>
                <div class="mb-3">
                    <label for="img_kades" class="form-label">
                        Gambar Kepala Desa &nbsp;
                        <small class="text-danger">
                            [ Maksimal 1MB ]
                        </small>
                    </label>
                    <input class="form-control" type="file" id="img_kades" name="img_kades">
                </div>
                <input type="hidden" id="old_img_desa" name="old_img_desa" value="{{ $desa->img_desa }}">
                <input type="hidden" id="old_img_kades" name="old_img_kades" value="{{ $desa->img_kades }}">
                <button type="submit" class="btn btn-success">
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
