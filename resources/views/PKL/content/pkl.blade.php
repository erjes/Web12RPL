@extends('PKL.pklLayouts.pklheader')

@section('pklBody')
    {{-- ISI TENTANG PKL --}}

    <div class="container-fluid">
        <div class="row h-500 animated-fade-in-up">
            <div class="centered-text">
                <img src="{{ asset('img/SMKN1-JAKARTA.png') }}" alt="" width="200">
                <img src="{{ asset('img/rpllogo.png') }}" alt="" width="200">
                <h1>PRAKTIK KERJA LAPANGAN</h1>
                <button type="button" class="btn btn-primary rounded-pill btn-lg btn-animated m-1"
                    id="scroll-to-tentang-pkl">TENTANG PKL</button>
                <a href="tempat"><button type="button" class="btn btn-primary rounded-pill btn-lg btn-animated m-1">TEMPAT
                        PKL</button></a>


            </div>
        </div>

        <div class="container animated-fade-in-up-2" id="tentang-pkl-section">
            <div class="row mt-5 mb-5">
                <hr class="hr hr-blurry" />
                <h1 class="text-center">TENTANG PKL</h1>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">PKL adalah singkatan dari Praktek Kerja Lapangan. Praktek Kerja Lapangan adalah
                            program pendidikan yang umumnya diperlukan sebagai bagian dari kurikulum di berbagai lembaga
                            pendidikan, terutama di tingkat sekolah menengah dan perguruan tinggi. Program ini bertujuan
                            untuk memberikan pengalaman praktis kepada siswa atau mahasiswa dalam lingkungan kerja yang
                            sesungguhnya dan membantu mereka mengembangkan keterampilan yang diperlukan untuk mempersiapkan
                            diri memasuki dunia kerja. PKL juga dikenal dengan nama magang atau internship.</p>
                        <p class="card-text mb-3">Adapun Tujuan PKL antara lain sebagai berikut:</p>

                        <div class="row mt-3 fade-trigger">

                            <div class="col-4">
                                <div class="card text-white bg-info mb-3 card-hover-zoom">
                                    <div class="card-body" style="height: 250px">
                                        <div class="card-title">
                                            <img src="{{ asset('img/experience.png') }}" alt="" width="200">
                                            <h4 class="text-center">1. Pengalaman Praktis</h4>
                                        </div>
                                        <p class="card-text">PKL memberikan kesempatan bagi siswa atau mahasiswa untuk
                                            mendapatkan pengalaman kerja nyata.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card text-white bg-info mb-3 card-hover-zoom">
                                    <div class="card-body" style="height: 250px">
                                        <img src="{{ asset('img/skilldevelopment.png') }}" alt="" width="200">
                                        <div class="card-title">
                                            <h4 class="text-center">2. Pengembangan Keterampilan</h4>
                                        </div>
                                        <p class="card-text">
                                            PKL membantu siswa mengembangkan keterampilan beragam yang diperlukan di dunia
                                            kerja, termasuk komunikasi, pemecahan masalah, dan manajemen waktu
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card text-white bg-info mb-3 card-hover-zoom">
                                    <div class="card-body" style="height: 250px">
                                        <img src="{{ asset('img/understanding.png') }}" alt="" width="200">
                                        <div class="card-title">
                                            <h4 class="text-center">3. Pemahaman Industri</h4>
                                        </div>
                                        <p class="card-text">
                                            Melalui PKL, peserta dapat memahami lebih dalam industri atau sektor tempat
                                            mereka melakukan magang.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card text-white bg-info mb-3 card-hover-zoom">
                                    <div class="card-body" style="height: 250px">
                                        <img src="{{ asset('img/networking.png') }}" alt="" width="200">

                                        <div class="card-title">
                                            <h4 class="text-center">4. Memperluas Jaringan</h4>
                                        </div>
                                        <p class="card-text">
                                            PKL memungkinkan membangun jaringan profesional dengan para ahli di industri
                                            yang diminati. Hal ini membuka peluang untuk mendapatkan informasi dan potensi
                                            pekerjaan di masa depan.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card text-white bg-info mb-3 card-hover-zoom">
                                    <div class="card-body" style="height: 250px">
                                        <img src="{{ asset('img/career.png') }}" alt="" width="200">

                                        <div class="card-title">
                                            <h4 class="text-center">5. Persiapan Karir</h4>
                                        </div>
                                        <p class="card-text">
                                            PKL membantu siswa atau mahasiswa memahami pekerjaan yang mereka minati, sejalan
                                            dengan ekspektasi, dan menentukan bidang yang paling sesuai bagi mereka.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card text-white bg-info mb-3 card-hover-zoom">
                                    <div class="card-body" style="height: 250px">
                                        <img src="{{ asset('img/evaluation.png') }}" alt="" width="200">

                                        <div class="card-title">
                                            <h4 class="text-center">6. Evaluasi Diri</h4>
                                        </div>
                                        <p class="card-text">
                                            PKL juga memungkinkan peserta untuk mengevaluasi diri mereka sendiri dan
                                            mengidentifikasi area di mana mereka perlu berkembang lebih lanjut.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
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
