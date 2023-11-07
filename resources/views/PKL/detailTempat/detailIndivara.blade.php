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
                                    <img src="img\indivaraLogo.jpg" class="card-img-top mt-5 mb-5"
                                        style="max-width: 25vh" alt="Indivara" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/indivara.jpg" class="img-fluid rounded-start " alt="bsn">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Indivara Group</h5>
                                                                       <p>Kirana Boutique Office, Jl. Kirana Avenue No.1 - 2, Klp. Gading Tim., Kec. Klp. Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14240<br>                                                                        <br>
                                                                       Bahasa Pemrograman yang digunakan adalah: Java, Zkoss, Html, CSS <br>
                                                                       Jam Masuk - Pulang: 09:00 - 17:30 <br></p>
                                             <a class="mb-3" href="https://www.indivaragroup.com/">windivaragroup.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <p>
                                        <strong><h2>Indivara</h2></strong><br>
                                        Indivara Group adalah salah satu perusahaan induk investasi teknologi terbesar di ASEAN dengan kehadiran signifikan di dua pasar terbesar; Indonesia dan Filipina. Berfokus pada dua divisi besar: Bisnis Enabler dan bisnis Platform. <br>
                                        <strong><h2>Vision</h2></strong> <br>
                                        Menjadi perusahaan penyedia Konsultasi dan Platform TI terkemuka di kawasan ini dengan menggabungkan keterlibatan offline-online secara strategis, menerapkan penetrasi pasar yang kuat, dan memberikan inovasi tiada akhir untuk menghadirkan pengalaman digital terbaik bagi pelanggan kami. <br>
                                        <strong><h2>Misi</h2></strong> <br>
                                        Menginspirasi karyawan untuk menjadi yang terbaik, dengan melibatkan mereka dalam praktik berkelanjutan dan mengantisipasi kebutuhan masyarakat. Percaya bahwa teknologi harus menjadi kekuatan kebaikan dan menciptakan inovasi yang bermanfaat harus menjadi semangat.
                                    </p>
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
