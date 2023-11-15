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
                                    <img src="img/LogoKominfo.jpg" class="card-img-top mt-5 mb-5"
                                        style="max-width: 30%" alt="Badan Standarisasi Nasional" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/KominfoLobby.jpg" class="img-fluid rounded-start " alt="bsn">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Kementerian Komunikasi dan Informasi </h5>
                                                <p class="card-text">Jalan Tanah Abang I No.1 Petojo Selatan Gambir RT.11, RT.11/RW.8, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160</p>
                                                <p class="card-text">Bahasa pemrograman yang digunakan adalah : PHP, HTML, CS</p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.00- 17.0</p>
                                                <a class="mb-3" href="https://www.kominfo.go.id/">kominfo.go.id</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <strong><h2>Tugas Kominfo</h2></strong> <br>
                                    Kementerian Komunikasi dan Informatika mempunyai tugas menyelenggarakan urusan pemerintahan di bidang komunikasi dan informatika untuk membantu Presiden dalam menyelenggarakan pemerintahan negara.
                                    <br>
                                    <strong><h2>Fungsi Kominfo</h2></strong> br
                                    <br>
                                    1. Perumusan dan penetapan kebijakan di bidang pengelolaan sumber daya dan perangkat pos dan informatika, penyelenggaraan pos dan informatika, penatakelolaan aplikasi informatika, pengelolaan informasi dan komunikasi publik. <br>
                                    2. Pelaksanaan kebijakan di bidang pengelolaan sumber daya dan perangkat pos dan informatika, penyelenggaraan pos dan informatika, penatakelolaan aplikasi informatika, pengelolaan informasi dan komunikasi publik. <br>
                                    3. Pelaksanaan bimbingan teknis dan supervisi atas pelaksanaan pengelolaan sumber daya dan perangkat pos dan informatika, penyelenggaraan pos dan informatika, penatakelolaan aplikasi informatika, pengelolaan informasi dan komunikasi publik. <br>
                                    4. Pelaksanaan penelitian dan pengembangan sumber daya manusia di bidang komunikasi dan informatika. <br>
                                    5. Pelaksanaan dukungan yang bersifat substantif kepada seluruh unsur organisasi di lingkungan Kementerian Komunikasi dan Informatika. <br>
                                    6. Pembinaan dan pemberian dukungan administrasi di lingkungan Kementerian Komunikasi dan Informatika. <br>
                                    7. Pengelolaan barang milik/kekayaan negara yang menjadi tanggung jawab Kementerian Komunikasi dan Informatika. <br>
                                    8. Pengawasan atas pelaksanaan tugas di lingkungan Kementerian Komunikasi dan Informatika. <br>

                                </div>
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
