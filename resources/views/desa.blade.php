@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
@endsection

@section('konten')
    <div class="container mt-3 mb-3">
        <div class="d-flex justify-content-end">
            <a href="http://siwida.herokuapp.com/maps/{{ str_replace(' ', '-', $data_desa->nama_desa) }}"
                class="text-success text-decoration-none">
                Lihat Wisata Desa {{ $data_desa->nama_desa }}
            </a>
        </div>
        @auth
            <br>
            <a href="/desa/img/e/{{ $data_desa->id }}" class="btn btn-success mb-3">
                Ubah Gambar
            </a>
        @endauth

        @if ($data_desa->img_desa !== '')
            <img src="{{ asset('storage/' . $data_desa->img_desa) }}" class="img-fluid rounded mb-3">
        @else
            <img src="{{ asset('images/img1.jpg') }}" class="img-fluid rounded mb-3">
        @endif
        <h5>Struktur Pemerintahan Desa {{ $data_desa->nama_desa }}</h5>
        <hr>
        <div class="d-flex justify-content-center mt-3 mb-3">
            <img src="{{ asset('images/Diagram.png') }}" class="img-fluid" alt="diagram">
        </div>

        @auth
            <a href="/desa/e/{{ $data_desa->id }}" class="btn btn-success mb-3">
                Ubah Visi & Misi
            </a>
        @endauth
        <div class="row mb-4">
            <div class="col-sm-6">
                <div class="card border border-success shadow">
                    <div class="card-body">
                        <h5 class="card-title">Visi</h5>
                        <p class="card-text">{{ $data_desa->visi }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card border border-success shadow">
                    <div class="card-body">
                        <h5 class="card-title">Misi</h5>
                        <p class="card-text">{{ $data_desa->misi }}</p>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <section class="kades" id="kades">
            <div class="d-flex justify-content-center">
                <div class="card border border-0" style="width: 18rem;">
                    @foreach ($struktur_desa as $pimpinan)
                        @if (Str::upper($pimpinan->jabatan) === 'PIMPINAN DESA')
                            @if ($data_desa->img_kades !== '')
                                <div class="img-thumbnail border-success shadow-sm">
                                    <img src="{{ asset('storage/' . $data_desa->img_kades) }}" class="img-fluid"
                                        width="100%" height="256" style="height: 256px">
                                </div>
                                @auth
                                    <a href="/desa/img/e/{{ $data_desa->id }}" class="btn btn-success mb-3">
                                        Ubah Gambar Kades
                                    </a>
                                @endauth
                            @else
                                <div class="border text-center">
                                    <a href="/desa/img/e/{{ $data_desa->id }}" class="text-success">
                                        <i class="fa-solid fa-add fa-5x mb-5 mt-5"></i>
                                    </a>
                                </div>
                            @endif
                            <div class="card-body text-center">
                                <h5 class="card-title">Pimpinan Desa</h5>
                                <p class="card-text text-muted"> {{ $pimpinan->nip }} </p>
                                <p class="card-text">{{ $pimpinan->nama }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <h5>Personil Desa</h5>
        <hr>
        @auth
            <a href="/desa/s/c/" class="btn btn-success mb-3">
                Tambah
            </a>
        @endauth
        <table class="table table-bordered shadow-sm">
            <thead class="text-center table-success">
                <tr>
                    <th scope="col">Jabatan</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    @auth
                        <th scope="col">Aksi</th>
                    @endauth
                </tr>
            </thead>
            <tbody>
                @foreach ($struktur_desa as $struktur)
                    <tr>
                        <td>{{ $struktur->jabatan }}</td>
                        <td> {{ $struktur->nip }} </td>
                        <td> {{ $struktur->nama }} </td>
                        @auth()
                            <td class="text-center">
                                <a href="/desa/s/e/{{ $struktur->id }}" class="badge btn btn-success border border-0">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                <form action="/desa/s/d/{{ $struktur->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge btn btn-danger border border-0">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        @endauth
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h5>Info Desa</h5>
        <hr>
        @auth
            <a href="/desa/i/c/" class="btn btn-success mb-3">
                Tambah
            </a>
        @endauth

        @foreach ($info_desa as $info)
            <div class="card mb-3 shadow-sm">
                <div class="card-header bg-success text-white">
                    @auth
                        <form action="/desa/i/d/{{ $info->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge btn btn-danger border border-0">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    @endauth
                    {{ $info->judul }}
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $info->isi }}</p>
                    @auth
                        <a href="/desa/i/e/{{ $info->id }}" class="link-success text-decoration-none">
                            Ubah >>
                        </a>
                    @endauth
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q={{ $data_desa->lokasi }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                        href="https://mcpenation.com/">https://mcpenation.com</a></div>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        width: 600px;
                        height: 400px;
                    }

                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        width: 600px;
                        height: 400px;
                    }

                    .gmap_iframe {
                        width: 600px !important;
                        height: 400px !important;
                    }
                </style>
            </div>
        </div>
    </div>
@endsection
