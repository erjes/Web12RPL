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
                                    <img src="img/gatewayLogo.png" class="card-img-top mt-5 mb-5"
                                        style="max-width: 50%" alt="Badan Standarisasi Nasional" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/gatewayLoby.jpg" class="img-fluid rounded-start " alt="bsn">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Gateway Container Line</h5>
                                                <p class="card-text"> Jl. Otto Iskandar Dinata Komp. III No.18, RT.1/RW.1, Cipinang Cempedak, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13340</p>
                                                <p class="card-text">Bahasa pemrograman yang digunakan adalah : React Java,Laravel</p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.00- 16.00</p>
                                                <a class="mb-3" href="gateway-id.com"> gateway-id.com</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">

                                    <p>Gateway Container Line Indonesia adalah perusahaan ekspedisi barang yang lahir pada bulan Oktober 2009 untuk menjawab kebutuhan logistik dalam bisnisnya. Dengan nilai kami yang “Hebat, Kompetitif, dan Terkemuka”, kami menjamin bahwa Anda akan ditangani oleh staf kami yang berpengalaman, terampil, dan berdedikasi. Di era disrupsi ini, kami hadir untuk memberikan solusi kepada pelanggan kami. Pasar berubah dengan cepat, tidak hanya harga yang kompetitif yang menjadi pertimbangan utama, namun juga kecepatan pengiriman dengan pelayanan prima terhadap produk Anda. Kami percaya produk Anda adalah produk kami, jadi pelanggan Anda adalah pelanggan kami. Kami di sini untuk membantu Anda dengan layanan tingkat terbaik dan respon cepat kami. Di bawah kelompok kami, kami akan menjadi Distribusi Solusi Anda dengan Layanan Standar Global kami dan ketika Anda berpikir tentang penyelesaian masalah terutama untuk logistik dan distribusi atau perluasan pasar, Anda akan memikirkan kami. Staf kami yang terlatih dan berpengetahuan luas memastikan bahwa setiap pengiriman dikirimkan dengan aman dan didokumentasikan secara akurat.

                                        Tim juga siap dan mampu membantu masyarakat impor/ekspor di bidang kepabeanan dan perizinan. Dengan kinerja kerja kami yang mahir, kami dapat mengamankan dan menangani bisnis Anda tanpa gagal.

                                        Sistem operasi yang cepat dan kuat menjamin kepuasan pelanggan. Gateway Container Line dapat dengan mudah menyesuaikan solusi transportasi dan logistik untuk memenuhi setiap kebutuhan pengiriman karena perusahaan ini merupakan operator yang solid dalam skala global
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
