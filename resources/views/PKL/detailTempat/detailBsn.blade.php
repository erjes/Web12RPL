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
                                    <img src="img/bsnLogo-removebg-preview.png" class="card-img-top mt-5 mb-5"
                                        style="max-width: 50%" alt="Badan Standarisasi Nasional" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/gedungBSN.jpg" class="img-fluid rounded-start " alt="bsn">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Badan Standarisasi Nasional (BSN) </h5>
                                                <p class="card-text">Gedung I BPPT, Jl. M.H. Thamrin No.8, Kb. Sirih, Kec.
                                                    Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10340.</p>
                                                <p class="card-text">Bahasa pemrograman yang digunakan adalah : PHP  dan Framework nya yaitu Laravel</p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.00- 15.30</p>
                                                <a class="mb-3" href="https://bsn.go.id/">bsn.go.id</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">

                                    <p>Badan Standardisasi Nasional (BSN) adalah lembaga pemerintah di Indonesia yang bertanggung jawab untuk mengembangkan standar nasional dalam berbagai bidang. Badan ini memiliki peran penting dalam mengoordinasikan upaya standarisasi di seluruh sektor industri dan layanan di Indonesia.</p>
                                    <p>BSN didirikan pada tahun 1997 berdasarkan Undang-Undang Nomor 4 Tahun 1992 tentang Perindustrian. Badan ini kemudian diperbarui melalui Undang-Undang Nomor 20 Tahun 2014 tentang Standar Nasional. Sejak itu, BSN telah menjadi lembaga yang memiliki wewenang dalam pengembangan dan harmonisasi standar di Indonesia.</p>
                                    <p>BSN memiliki beberapa peran utama, termasuk mengembangkan, mengadopsi, dan mempromosikan standar nasional. Mereka juga bertanggung jawab atas penilaian kesesuaian dan akreditasi lembaga standar. Badan ini bekerja sama dengan berbagai pihak, seperti pemerintah, industri, akademisi, dan masyarakat, untuk menciptakan standar yang mendukung pertumbuhan dan perkembangan berkelanjutan di Indonesia.</p>
                                    <p>BSN memiliki komite teknis yang terdiri dari para ahli dalam berbagai bidang. Komite ini bertugas mengembangkan standar nasional untuk berbagai produk, layanan, dan industri. Standar-standar ini membantu meningkatkan kualitas, keselamatan, dan efisiensi dalam berbagai sektor ekonomi.</p>
                                    <p>BSN juga memainkan peran penting dalam memastikan keselamatan produk dan layanan yang beredar di pasar. Mereka mengembangkan standar yang mengatur kualitas, keamanan, dan kinerja produk tertentu, yang melindungi konsumen dari produk yang berpotensi berbahaya.</p>
                                    <p>BSN bekerja sama dengan organisasi standar internasional, seperti ISO (International Organization for Standardization) dan IEC (International Electrotechnical Commission), untuk memastikan bahwa standar nasional Indonesia sejalan dengan standar internasional. Ini penting untuk memfasilitasi perdagangan internasional dan memperkuat posisi industri Indonesia di pasar global.</p>
                                    <p>BSN juga aktif dalam penyediaan pendidikan dan pelatihan terkait standar nasional. Mereka membantu meningkatkan pemahaman masyarakat, pelaku industri, dan pihak terkait lainnya tentang pentingnya standar dalam proses produksi, layanan, dan manajemen.</p>
                                    <p>Badan Standarisasi Nasional adalah elemen kunci dalam memajukan kualitas dan daya saing produk dan layanan Indonesia. Dengan mengembangkan dan menerapkan standar nasional yang sesuai, BSN berkontribusi pada pertumbuhan ekonomi yang berkelanjutan, keselamatan masyarakat, dan integrasi Indonesia dalam pasar global. Melalui kerja keras dan kolaborasi lintas sektor, BSN terus menjadi garda terdepan dalam upaya standarisasi di negara ini.</p>
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
