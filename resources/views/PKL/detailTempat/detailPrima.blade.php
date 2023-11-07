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
                                    <img src="img/primaLogo.jpg" class="card-img-top mt-5 mb-5"
                                        style="max-width: 30%" alt="PT Prima Nur Panurjwan" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/primaLoby.jpg" class="img-fluid rounded-start " alt="Gedung PT Prima Nur Panurjwan">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">PT Prima Nur Panurjwan</h5>
                                                <p class="card-text">Yos Sudarso Megah Blok B No. 19-20, Jalan Yos Sudarso No. 1, Koja, RT.16/RW.6, Kb. Bawang, Kec. Tj. Priok, Jkt Utara.</p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.30- 15.30</p>
                                                <a class="mb-3" href="https://www.samudera.id/pnp/id/5/tentangkami">samudera.id</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    PT Prima Nur Panurjwan (PNP) adalah anak perusahaan PT Samudera Indonesia Tbk yang didirikan sejak tahun 1986. PNP menyediakan jasa bongkar muat, cargodoring, dan pergudangan untuk kargo domestik (kontainer dan breakbulk) di Pelabuhan Tanjung Priok. <br>
                                    <br>
                                    PNP sekarang mengoperasikan Dermaga Serbaguna Nusantara (DSN) sejak 2005 dengan skema BOT (Built, Operate dan Transfer) selama 25 tahun dan juga ditunjuk oleh PT Pelabuhan Indonesia II sebagai salah satu perusahaan bongkar muat terpilih untuk mengoperasikan dermaga 208-209 di Tanjung Priok sejak tahun 2010.
                                    Pelanggan PT Prima adalah perusahaan pelayaran domestik yang memiliki berbagai rute pengiriman dari Tanjung Priok ke pelabuhan utama lainnya di Indonesia.
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
