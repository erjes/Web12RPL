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
                                        style="max-width: 20%" alt="Dinas Perhubungan" />
                                </div>
                                <div class="card-body">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="img/dishubBus.jpg" class="img-fluid rounded-start " alt="UPAS Dinas Perhubungan">
                                        </div>
                                        <div class="col-md-8 d-flex align-items-center" style="height: auto">
                                            <div class="card-body">
                                                <h5 class="card-title">Unit Pengelola Angkutan Sekolah (UPAS) Dishub DKI Jakarta </h5>
                                                <p class="card-text">Jl.H.Bokir Bin Bin Djiun No 1 Jakarta timur</p>
                                                <p class="card-text">Bahasa pemrograman yang digunakan adalah : PHP,Java,HTML </p>
                                                <p class="card-text">Jam Masuk - Pulang: 08.00- 17.00</p>
                                                <a class="mb-3" href="www.Unitpengelolaangkutansekolah.com">Unitpengelolaangkutansekolah.com</a>
                                                <p class="card-text"><small class="text-body-secondary"></small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="card mt-2">
                                <div class="card-body">

                                    <h3>TUGAS<br></h3>
                                    Unit Pengelola mempunyai tugas melaksanakan kegiatan pengelolaan angkutan bus sekolah.<br>
                                    <h3>FUNGSI<br></h3>
                                    <h3> Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat (1), Unit Pengelola menyelenggarakan fungsi :<br></h3>
                                    1. penyusunan rencana strategis dan rencana kerja dan anggaran Unit Pengelola.<br>
                                    2. pelaksanaan rencana strategis dan dokumen pelaksanaan anggaran Unit Pengelola.<br>
                                    3. penyusunan standar dan prosedur pelayanan pengelolaan angkutan bus sekolah.<br>
                                    4. penyelenggaraan pengoperasian angkutan bus sekolah pada jaringan utama dan jaringan penghubung.<br>
                                    5. pelaksanaan pengelolaan angkutan bus sekolah.<br>
                                    6. pelaksanaan penyediaan prasarana dan sarana angkutan bus sekolah.<br>
                                    7. pelaksanaan pengawasan, pengendalian, monitoring dan evaluasi pelayanan angkutan bus sekolah.<br>
                                    8. pemeliharaan dan perawatan prasarana dan sarana teknis.<br>
                                    9. penyusunan penghitungan biaya pelayanan angkutan bus sekolah.<br>
                                    10. pelaksanaan koordinasi dan kerja sama dengan SKPD/UKPD, instansi pemerintah/swasta dan pihak terkait dalam rangka pelayanan angkutan bus sekolah.<br>
                                    11. pelaksanaan pengelolaan kepegawaian, keuangan dan barang Unit Pengelola.<br>
                                    12. pelaksanaan kegiatan publikasi dan kehumasan Unit Pengelola.<br>
                                    13. perencanaan, pelaksanaan dan pengelolaan teknologi komunikasi dan informasi Unit Pengelola.<br>
                                    14. pelaksanaan kegiatan ketatausahaan dan kerumahtanggaan.<br>
                                    15. pengelolaan kearsipan Unit Pengelola, dan <br>
                                    pelaporan dan mempertanggungjawabkan pelaksanaan tugas dan fungsi Unit Pengelola.</div>
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
