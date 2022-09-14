@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('konten')
    @foreach ($struktur_desa as $anggota)
        <a href="#">{{ $anggota->nama }}</a>
    @endforeach

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Visi</h5>
                    <p class="card-text">{{ $data_desa->visi }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Misi</h5>
                    <p class="card-text">{{ $data_desa->misi }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
