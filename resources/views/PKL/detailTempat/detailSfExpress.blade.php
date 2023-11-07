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
                                    <img src="img/expressLogo.png" class="card-img-top mt-5 mb-5"
                                        style="max-width:25%" alt="" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/SFKERRY.jpg" class="img-fluid rounded-start " alt="SF Kerry"
                                            style="max-width:150%" alt=""/>
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">SF Expess Indonesia ex-Kerry Express Indonesia</h5>
                                                <p class="card-text">Jl. Harapan II No.5, RT.2/RW.5, Setu, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13880.</p>
                                                <p class="card-text">Bahasa pemrograman yang digunakan adalah : PHP, dan Java</p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.00- 16.00</p>
                                                <a class="mb-3" href="http://id.kex-express.com/">id.kex-express.com</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">

                                    <p>Sejak diresmikanna Kerry Express Indonesia pada tahun 2018, kami berfokus pada layanan “Next Day Delivery” dengan biaya terjangkau, Kerry Express Indonesia sip melayani kebutuhan pengiriman paket Anda sampai ke tujuan dengan aman.</p>

                                    <p>   Pada tahun 2022, Kerry Express Indonesia resmi bergabung dengan SF International. SF International didirikan di Shunde, Provinsi Guangdong pada tahun 1993 yang merupakan penyedia layanan logistik terintegrasi terbesar di Tiongkok dan terbesar keempat di dunia Jaringan SF International mencakup Singapura, Korea Selatan, Malaysia, Jepang, Thailand, Vietnam, Mongolia, India, India, Kamboja, Myanmar, Brunei, Uni Emirat Arab, Sri Lanka, Bangladesh, Pakistan, Filipina, Amerika Serikat, Kanada, Meksiko, Brasil, Australia, Selandia Baru, Rusia dan 28 negara UE.</p>

                                    <p>   Kini, di Tahun 2023, Kerry Express Indonesia bertransformasi menjadi SF Express Indonesia berupaya untuk selalu memberikan layanan optimal sebagai jasa ekspedisi domestik dan internasional. </p>
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
