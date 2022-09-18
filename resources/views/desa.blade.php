@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://unpkg.com/treeflex/dist/css/treeflex.css" rel="stylesheet">
@endsection

@section('konten')
    <div class="container mt-3 mb-3">
        <h5>Struktur Pemerintahan Desa {{ $data_desa->nama_desa }}</h5>
        <hr>
        <div class="tf-tree d-flex justify-content-center mt-3 mb-3">
            <ul>
                <li>
                    <span class="tf-nc fw-bold">
                        <a class="text-decoration-none text-black" href="#kades">KEPALA DESA</a>
                    </span>
                    <ul>
                        <li>
                            <span class="tf-nc">KASI</span>
                            <ul>
                                <li>
                                    <span class="tf-nc">PEMERINTAHAN</span>
                                </li>
                                <li>
                                    <span class="tf-nc">KESEJAHTERAAN</span>
                                </li>
                                <li>
                                    <span class="tf-nc">PELAYANAN</span>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="tf-nc border border-0">|</span>
                            <ul>
                                <li>
                                    <span class="tf-nc border border-0">|</span>
                                    <ul>
                                        <li>
                                            <span class="tf-nc">KADUS</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <span class="tf-nc">SEKRETARIS</span>
                            <ul>
                                <li><span class="tf-nc">KAUR TATA USAHA & UMUM</span></li>
                                <li><span class="tf-nc">KAUR KEUANGAN</span></li>
                                <li><span class="tf-nc">KAUR PERENCANAAN</span></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>


        @auth
            <a href="/" class="btn btn-success mb-3">
                Ubah Visi & Misi
            </a>
        @endauth
        <div class="row mb-4">
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

        <hr>
        <section class="kades" id="kades">
            <div class="d-flex justify-content-center">
                <div class="card border border-0" style="width: 18rem;">
                    @foreach ($struktur_desa as $pimpinan)
                        @if (Str::upper($pimpinan->jabatan) === 'PIMPINAN DESA')
                            <img src="{{ asset('images/kades.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
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
            <button class="btn btn-success mb-3">
                Tambah
            </button>
        @endauth
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th scope="col">Jabatan</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($struktur_desa as $struktur)
                    <tr>
                        <td>{{ $struktur->jabatan }}</td>
                        <td> {{ $struktur->nip }} </td>
                        <td> {{ $struktur->nama }} </td>
                        <td class="text-center">
                            <a href="">Edit</a> |
                            <a href="">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

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
