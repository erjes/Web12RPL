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
                                    <img src="img/CSISlogo.png" class="card-img-top mt-5 mb-5"
                                        style="max-width: 50%" alt="CSIS" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/lobbyCSIS.jpg" class="img-fluid rounded-start " alt="bsn">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Centre for Strategic and International Studies (CSIS) </h5>
                                                <p class="card-text">Gedung Pakarti Centre, Jl. Tanah Abang III No.23-27, RT.3/RW.3, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta.</p>
                                                <p class="card-text">Bahasa pemrograman yang digunakan adalah : python</p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.30 - 17.00</p>
                                                <a class="mb-3" href="https://www.csis.or.id/">csis.or.id</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">

                                    <p>Centre for Strategic and International Studies (CSIS) adalah lembaga think thank yang fokus pada perekonomian, politik dan perubahan sosial, dan hubungan internasional. CSIS melakukan kajian kebijakan, serta advokasi publik dan pendidikan publik. <br>
                                        CSIS melakukan penelitian di bidang ekonomi, politik dan perubahan sosial, serta hubungan internasional, dengan topik yang dipilih berdasarkan relevansinya dengan kebijakan publik. Studi interdisipliner dianjurkan. Di bidang kebijakan luar negeri, penelitian CSIS dilengkapi dan diperkuat oleh hubungannya dengan jaringan penelitian, akademik, dan organisasi lain yang luas di seluruh dunia.
                                        Kemitraan Regional Di kawasan Asia-Pasifik yang lebih luas, CSIS secara aktif terlibat dengan jaringan lembaga-lembaga Track-Two dan lembaga pemikir regional dan internasional yang berinteraksi dengan kegiatan antar pemerintah.
                                        Hal ini termasuk menjadi tuan rumah bagi Komite Nasional Kerjasama Ekonomi Pasifik Indonesia (INCPEC) untuk Dewan Kerjasama Ekonomi Pasifik (PECC), Komite Anggota Indonesia untuk Dewan Kerjasama Keamanan di Asia Pasifik (CSCAP), dan Sekretariat ISIS di ASEAN. CSIS juga merupakan lembaga pendiri Dewan Kerja Sama Asia Eropa (CAEC).
                                        Melalui partisipasi aktifnya dalam kegiatan Track-Two, CSIS ikut serta dalam upaya mendorong kerja sama regional (ASEAN, Asia Pasifik) dan kerja sama intra-regional (ASEM). <br>
                                        CSIS memiliki program publikasi aktif yang mencakup berbagai subjek dalam bahasa Inggris dan Bahasa Indonesia. <br> <br>

                                      <strong>  Ini termasuk: <br>

                                        1. Buku dan monografi yang meliput penelitian yang dilakukan oleh CSIS. <br>
                                        2. The Indonesian Quarterly, jurnal berbahasa Inggris yang dimulai pada tahun 1974. <br>
                                        3. Analisis CSIS, jurnal triwulanan berbahasa Indonesia yang diterbitkan sejak tahun 1971. <br>
                                        4. Sebuah layanan kliping, yang berfungsi sejak tahun 1971, menyiapkan dan memelihara kliping dengan berbagai tema dari surat kabar nasional dan regional. <br>
                                        5. CSIS bekerja sama dengan Proyek Indonesia dari Universitas Nasional Australia dalam mencetak dan mendistribusikan Buletin Studi Ekonomi Indonesia (BIES). <br>
                                    </strong>
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
