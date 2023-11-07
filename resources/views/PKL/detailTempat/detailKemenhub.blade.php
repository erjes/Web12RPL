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
                                    <img src="img/kemenhubLogo.png" class="card-img-top mt-5 mb-5"
                                        style="max-width: 20%" alt="Kemenhub" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/kemehubLobby.jpeg" class="img-fluid rounded-start " alt="Lobby Kemenhub">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Kementrian Perhubungan </h5>
                                                <p class="card-text">Jl. Medan Merdeka Tim. No.8, RT.6/RW.1, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</p>
                                                <p class="card-text">Bahasa pemrograman yang digunakan adalah : VisualBasic (VB.Net)</p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.00- 16.00</p>
                                                <a class="mb-3" href="https://dephub.go.id/">dephub.go.id</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <p>Kementerian Perhubungan adalah salah satu kementerian di pemerintahan Indonesia yang bertanggung jawab atas pengelolaan sektor transportasi dan perhubungan di negara tersebut. Tugas utama Kementerian Perhubungan adalah merencanakan, mengembangkan, dan mengawasi infrastruktur transportasi, seperti jalan, pelabuhan, bandara, dan jalur kereta api. Selain itu, Kementerian Perhubungan juga mengatur dan mengawasi berbagai aspek transportasi, termasuk regulasi transportasi darat, udara, dan laut, serta keamanan transportasi. Kementerian ini berperan penting dalam memastikan konektivitas dan mobilitas yang lancar di seluruh wilayah Indonesia.</p>
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
