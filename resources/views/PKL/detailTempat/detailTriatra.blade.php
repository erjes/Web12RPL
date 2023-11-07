@extends('PKL.pklLayouts.pklheader')

@section('pklBody')
    {{-- ISI TENTANG PKL --}}

    <div class="container-fluid">
        <div class="row h-500 animated-fade-in-up">
            <div class="centered-text">
                <img src="{{ asset('img/SMKN1-JAKARTA.png') }}" alt="" width="200">
                <img src="{{ asset('img/rpllogo.png') }}" alt="" width="200">
                <h1>PRAKTIK KERJA LAPANGAN</h1>
                <a href="home"><button type="button"
                        class="btn btn-primary rounded-pill btn-lg btn-animated m-1">HOME</button></a>
                <button type="button" class="btn btn-primary rounded-pill btn-lg btn-animated m-1"
                    id="scroll-to-tentang-pkl">TEMPAT PKL</button>\
            </div>
        </div>

        {{-- Tempat PKL --}}
        <div class="container animated-fade-in-up-2" id="tentang-pkl-section">
            <div class="row mt-5 mb-5">
                <hr class="hr hr-blurry" />
                <h1 class="text-center">TEMPAT PKL</h1>
                <div class="card">
                    <div class="card-body text-center">
                        <div class="row mt-3 fade-trigger">
                            <div class="card">
                                <div class="align-items-center">
                                    <img src="img/triatraLogo.jpg" class="card-img-top mt-5 mb-5"
                                        style="max-width: 30%" alt="Triatra Sinergia Pratama" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/LobbyTriatra.jpg" class="img-fluid rounded-start " alt="bsn">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Triatra Sinergia Pratama </h5>
                                                <p class="card-text">Jl. Raya Bekasi No.KM 22, Cakung Barat, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13910</p>
                                                <p class="card-text">Bahasa pemrograman yang digunakan adalah :Laravel PHP, Blade, Postgresql, PowerAutomate Visual Programming </p>
                                                <p class="card-text">Jam Masuk - Pulang: 07.30- 16.30</p>
                                                <a class="mb-3" href="https://triatra.co.id/"> triatra.co.id</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">

                                    PT Triatra Sinergia Pratama adalah anak perusahaan PATRiA, anggota Astra. Bisnis TRIATRA adalah perdagangan internasional dan domestik untuk Produk PATRiA. Produk PATRiA adalah pemimpin manufaktur & teknik alat berat di Indonesia yang dapat disesuaikan sesuai permintaan pelanggan.<br>
                                    TRIATRA juga menjadi distributor resmi Powerscreen, TEREX MPS, AlloghtSykes Pump dan MB Crusher untuk wilayah Indonesia. TRIATRA menggunakan inovasi dan teknologi untuk menghasilkan produk yang baik untuk memberikan nilai lebih kepada pelanggan kami dengan dukungan produk yang baik di wilayah Indonesia<br>                                </div>
                            </div>
                        </div>

                        <a href="tempat"><button type="button" class="btn btn-secondary rounded-pill btn-lg btn-animated m-1">Kembali</button></a>

                    </div>



                    {{-- JAVASCRIPT BUTTON TENTANG PKL --}}
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            // Ambil tombol "TENTANG PKL" dan bagian yang akan digeser
                            var scrollToBtn = document.getElementById("scroll-to-tentang-pkl");
                            var tentangPklSection = document.getElementById("tentang-pkl-section");

                            // Tambahkan event listener ke tombol
                            scrollToBtn.addEventListener("click", function() {
                                // Geser halaman ke bagian "TENTANG PKL" dengan efek animasi
                                window.scrollTo({
                                    top: tentangPklSection.offsetTop,
                                    behavior: "smooth" // Efek animasi smooth scroll
                                });
                            });
                        });
                    </script>
                @endsection
