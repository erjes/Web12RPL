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
                                    <img src="img\pusintekLogo.jpg" class="card-img-top mt-5 mb-5"
                                        style="max-width: 50%" alt="PUSINTEK" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/gedungPusintek.jpg" class="img-fluid rounded-start " alt="bsn">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Pusat Sistem Informasi dan Teknologi Keuangan (PUSINTEK)</h5>
                                                                       <p>Jl. Gn. Sahari No.4, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610<br>
                                                                       Bahasa Pemrograman yang digunakan adalah: PHP, dan JAVASCRIPT <br>
                                                                       Jam Masuk - Pulang: 08.30 - 16.00 <br> </p>
                                                <a class="mb-3" href="https://setjen.kemenkeu.go.id/">setjen.kemenkeu.go.id</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <p>
                                        Pusat Sistem Informasi dan Teknologi Keuangan (PUSINTEK) adalah sebuah lembaga atau unit dalam sebuah perusahaan atau organisasi yang fokus pada pengelolaan sistem informasi dan teknologi keuangan. Berikut adalah penjelasan singkat tentang PUSINTEK:
                                        </p>

                                        <p><strong>Profil Perusahaan PUSINTEK:</strong></p>

                                        <strong>Fokus Utama:</strong> PUSINTEK berfokus pada pengembangan, pengelolaan, dan pemanfaatan teknologi informasi dan sistem informasi dalam konteks keuangan. Ini mencakup perencanaan, implementasi, dan pemeliharaan sistem informasi keuangan yang efisien dan aman.<br>
                                        <strong>Peran Strategis:</strong> PUSINTEK memiliki peran strategis dalam mendukung pengambilan keputusan keuangan dan operasional perusahaan. Mereka menyediakan alat dan sistem yang memungkinkan analisis data keuangan, pelaporan, dan manajemen risiko.<br>
                                        <strong>Keamanan Data:</strong> Karena PUSINTEK mengelola informasi keuangan yang sensitif, mereka juga bertanggung jawab untuk memastikan keamanan dan kepatuhan data finansial perusahaan dengan regulasi dan standar yang berlaku.<br>
                                        <strong>Inovasi Teknologi:</strong> PUSINTEK terus berinovasi dalam memanfaatkan teknologi terkini untuk mengoptimalkan proses keuangan. Mereka dapat memperkenalkan sistem baru, seperti perangkat lunak akuntansi atau solusi pembayaran digital, untuk meningkatkan efisiensi.<br>
                                        <strong>Integritas dan Transparansi:</strong> PUSINTEK memastikan integritas dan transparansi dalam pengelolaan keuangan perusahaan. Mereka dapat mengimplementasikan praktik dan kontrol yang memastikan bahwa data keuangan akurat dan dapat dipercaya.<br>
                                        <strong>Pelatihan dan Pengembangan:</strong> PUSINTEK mungkin juga menyediakan pelatihan dan pengembangan untuk karyawan dalam penggunaan sistem informasi keuangan, sehingga mereka dapat bekerja secara efektif dengan alat-alat tersebut.<br>
                                        <strong>Kemitraan Eksternal:</strong> PUSINTEK mungkin menjalin kemitraan dengan penyedia layanan teknologi dan perusahaan-perusahaan terkait untuk memastikan bahwa teknologi yang digunakan terus berkembang sesuai dengan kebutuhan perusahaan.<br>
                                        PUSINTEK memainkan peran penting dalam mendukung keberhasilan operasi keuangan suatu perusahaan dan dapat membantu memastikan bahwa perusahaan berada di jalur yang benar menuju pertumbuhan dan kesuksesan.</p>



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
