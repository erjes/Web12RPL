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

                            </div>
                            <div class="card mt-2">
                                <div class="card-body ">
                                    <div class="container animated-fade-in-up-2" id="tentang-pkl-section">
                                        <div class="row mt-5 mb-5">
                                            <hr class="hr hr-blurry" />
                                            <h1 class="text-center">TEMPAT PKL</h1>
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <div class="row mt-3 fade-trigger">
                                                        <div class="card">
                                                            <div class="align-items-center">
                                                                <img src="img\infomediaLogo.jpg" class="card-img-top mt-5 mb-5"
                                                                    style="max-width: 50%" alt="Infomedia Nusantara" />
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="row g-0">
                                                                    <div class="col-md-4">
                                                                        <img src="img/infomediaLobby.jpg" class="img-fluid rounded-start " alt="error">
                                                                    </div>
                                                                    <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                                                        <div class="card-body">
                                                                            <h5 class="card-title">Infomedia Nusantara</h5>
                                                                            <p class="card-text">Alamat: Jl. RS. Fatmawati Raya No.77-81, RT.6/RW.5, Cipete Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12150</p>
                                                                            <p class="card-text">Jam Masuk - Pulang: 08.00- 15.00</p>
                                                                            <a class="mb-3" href="https://www.infomedia.co.id/">Website: https://www.infomedia.co.id/</a>
                                                                            <p class="card-text"><small class="text-body-secondary"></small></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card mt-2">
                                                            <div class="card-body">
                                                                <p>PT Infomedia Nusantara adalah anak usaha TelkomMetra yang bergerak di bidang alih daya proses bisnis. Hingga akhir tahun 2021, perusahaan ini memiliki 22 kantor layanan yang tersebar di seluruh Indonesia.</p>
                                                                <p>Sejarah perusahaan ini dimulai pada tahun 1975 ketika Elnusa mulai berbisnis di bidang penerbitan direktori. Elnusa kemudian berkolaborasi dengan Perumtel untuk menerbitkan buku telepon (white pages dan yellow pages) yang didistribusikan di lima kota di Indonesia. Pada tahun 1984, bisnis penerbitan ini menjadi sebuah perusahaan tersendiri dengan nama PT Elnusa Yellow Pages. Elnusa memiliki 70% saham perusahaan ini, sementara sisanya dimiliki oleh YDPP Telkom.</p>
                                                                <p>Pada dekade 1990-an, buku telepon yang diterbitkan oleh perusahaan ini telah didistribusikan ke 27 provinsi di Indonesia. Perusahaan ini juga memiliki 26% saham PT Pacrim Kwartanusa Press & Printing, yang bergerak di bidang pencetakan buku telepon. Selain itu, perusahaan ini memiliki sejumlah saham Medianusa (S). Pte. Ltd. asal Singapura yang bertindak sebagai agen iklan di sejumlah buku yellow pages di luar negeri. Pada bulan September 1995, Telkom resmi memiliki 15% saham perusahaan ini, dan pada bulan Oktober 1995, nama perusahaan ini diubah menjadi seperti sekarang.</p>
                                                                <p>Pada tahun 1998, Telkom memiliki 51% saham perusahaan ini, sementara sisanya masih dimiliki oleh Elnusa. Pada dekade 2000-an, perusahaan ini mulai mengembangkan layanan lain untuk melengkapi bisnis penerbitan buku teleponnya, seperti layanan pusat panggilan "Hallo Yellow," CD-ROM Yellow Pages, dan laman web Yellow Pages. Perusahaan ini kemudian memfokuskan bisnisnya pada tiga bidang: penerbitan buku telepon, layanan pusat panggilan, serta layanan penyediaan dan pengelolaan data sesuai kebutuhan klien.</p>
                                                                <p>Pada bulan Juni 2004, perusahaan ini meluncurkan logo baru. Pada bulan Juni 2009, TelkomMetra resmi mengakuisisi 49% saham perusahaan ini yang masih dimiliki oleh Elnusa. Pada tahun 2012, TelkomMetra meningkatkan kepemilikan sahamnya di perusahaan ini menjadi 51%.</p>
                                                                <p>Pada bulan Oktober 2012, perusahaan ini mendirikan PT Infomedia Solusi Humanika untuk berbisnis di bidang penyediaan tenaga kerja. Pada tahun 2013, perusahaan ini menyerahkan bisnis penerbitan buku teleponnya ke Metra Digital Media untuk mengkonsolidasi bisnis periklanan yang ada di internal TelkomMetra. Pada tahun 2015, perusahaan ini berekspansi ke bisnis alih daya teknologi informasi, alih daya proses bisnis, dan alih daya proses pengetahuan, sebagai bagian dari pengembangan terhadap layanan pusat panggilan yang telah disediakan oleh perusahaan ini sejak awal dekade 2000-an. Pada tahun 2020, perusahaan ini memutuskan.</p>
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
