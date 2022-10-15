@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('konten')
    <div class="bg-success">
        <div class="container">
            <h1 class="fw-bold text-white">
                Sistem Profil <br> Desa
                Kecamatan <br> Leuwiliang
            </h1>

            <img src="{{ asset('images/img1.jpg') }}" class="img-fluid rounded mt-3">
        </div>
    </div>
    <img src="{{ asset('images/wave.svg') }}" alt="wave">
    <div class="container-fluid mt-3 mb-4">
        <div class="container">
            <div class="col-lg-4">
                <div class="card mt-3 mb-3 shadow border border-success">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <i class="fa-solid fa-circle-info text-success"></i>
                            Info
                        </div>
                        <hr>
                        <h5 class="card-text">Manfaat Sipida</h5>
                        <p class="card-text">Sipida memberikan informasi mengenai struktural desa</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <div class="card mt-3 mb-3 shadow border border-success">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <i class="fa-solid fa-circle-info text-success"></i>
                            Info
                        </div>
                        <hr>
                        <h5 class="card-text">Data Desa</h5>
                        <p class="card-text">Data desa digunakan dalam proses analisis dan penyusunan program dalam <br>
                            merencanakan pembangunan desa agar pembangunan tersebut dapat diterima <br> dan sesuai dengan
                            kebutuhan masyarakat.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mt-3 mb-3 shadow border border-success">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <i class="fa-solid fa-circle-info text-success"></i>
                            Info
                        </div>
                        <hr>
                        <h5 class="card-text">Profil Desa</h5>
                        <p class="card-text">Profil desa sangat penting untuk menunjang pembangunan desa yaitu sebagai data
                            dasar yang dibutuhkan dalam proses penyusunan rencana pembangunan desa. Profil desa digunakan
                            sebagai pedoman dalam proses perencanaan pembangunan desa dalam bentuk fisik dan program
                            peningkatan kapasitas penduduk desa.</p>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end">
                <div class="card mt-3 mb-3 shadow border border-success">
                    <div class="card-body">
                        <div class="card-title text-center">
                            <i class="fa-solid fa-circle-info text-success"></i>
                            Info
                        </div>
                        <hr>
                        <h5 class="card-text">Peraturan Mentri Dalam Negeri</h5>
                        <p class="card-text">Nomor 12 Tahun 2007 tentang Pedoman Penyusunan dan Pendayagunaan <br> Data
                            Profil
                            Desa dan Kelurahan. Dalam Permendagri ini juga diatur <br> mekanisme dan instrumen penyusunan
                            profil
                            desa.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-5 text-center border border-0">
            <div class="card-body">
                <img src="{{ asset('images/logo.png') }}" alt="logo-kabupaten" width="64" height="64">
                <h5 class="card-title mt-4">Sistem Wisata Desa</h5>
                <p class="card-text mt-3">Kunjungi Website Siwida Untuk Melihat Wisata Desa di Kecamatan Leuwiliang</p>
                <a href="http://siwida.herokuapp.com" class="link-success text-decoration-none">Ke Website Siwida >></a>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="450" height="256" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Kecamatan%20Leuwiliang&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 256px;
                            width: 450px;
                        }
                    </style>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 256px;
                            width: 450px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
@endsection
