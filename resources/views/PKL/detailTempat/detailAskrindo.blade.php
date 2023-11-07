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
                                    <img src="img/LogoAskrindo.jpg" class="card-img-top mt-5 mb-5"
                                        style="max-width: 30%" alt="Badan Standarisasi Nasional" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/AskrindoLobby.jpg" class="img-fluid rounded-start " alt="bsn">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">PT. Asuransi Kredit Indonesia (Askrindo) </h5>
                                                <p class="card-text">Jl. Angkasa Blok B No.9, RW.10, Gn. Sahari Sel., Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610</p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.00- 17.00</p>
                                                <a class="mb-3" href="https://askrindo.co.id/">askrindo.co.id</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    PT. Asuransi Kredit Indonesia atau PT. Askrindo merupakan salah satu Badan Usaha Milik Negara (BUMN) yang  bergerak dalam asuransi/penjaminan, tidak dapat dipisahkan dari pembangunan ekonomi Bangsa dan Negara Republik Indonesia. <br>
                                    Keberadaan PT Askrindo yang merupakan salah satu Badan Usaha Milik Negara (BUMN), bergerak dalam asuransi kerugian senantiasa mengiringi keberhasilan pembangunan ekonomi Bangsa dan Negara Republik Indonesia. Sesuai dengan Visi dan Misinya, PT Askrindo senantiasa menjalankan peran dan fungsinya sebagai Collateral Subtitution Institution, yaitu lembaga penjamin yang menjembatani kesenjangan antara UMKM yang layak namun tidak memiliki agunan yang cukup untuk memperoleh kredit dari lembaga keuangan, baik perbankan maupun lembaga keuangan non-bank. <br>
                                    Berdiri tanggal 6 April 1971 berdasarkan Peraturan Pemerintah Republik Indonesia Nomor 1/1971 tanggal 11 Januari 1971, untuk mengemban misi dalam pemberdayaan Usaha Mikro, Kecil dan Menengah (UMKM) guna menunjang pertumbuhan perekonomian Indonesia. Peran PT. Askrindo dalam pemberdayaan UMKM adalah sebagai lembaga penjamin atas kredit yang disalurkan oleh perbankan kepada UMKM. <br>
                                    Pada tanggal 31 Maret 2020 berdasarkan Keputusan Mentri BUMN, PT Askrindo bergabung dengan Holding BUMN asuransi dan penjaminan, Indonesia Financial Group (IFG).
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
