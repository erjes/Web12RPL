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
                <div class="card text-center">
                    <div class="card-body">
                        <div class="row mt-3 fade-trigger">

                            {{-- Data Tempat PKL --}}
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <img src="img\bsnLogo-removebg-preview.png" class="card-img-top"
                                                alt="Badan Standarisasi Nasional" style="width: auto;height: 100px;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-success rounded-2 ">Negeri</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">Badan Standarisasi Nasional (BSN) </h5>
                                            <p class="card-text">Gedung I BPPT, Jl. M.H. Thamrin No.8, Kb. Sirih, Kec.
                                                Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10340</p>
                                            <a class="mb-3" href="https://bsn.go.id/">bsn.go.id</a>
                                        </div>
                                        <a href="detailBsn" class="btn btn-primary mt-2 w-100 ">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="row">
                                            <img src="img/pusintekLogo.jpg" class="card-img-top" alt="PUSINTEK"
                                                style="width: auto" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-success rounded-2">Negeri</span>
                                            <span class="badge rounded-pill badge-success"></span>

                                        </div>
                                        <div class="card" style="height: 57%">
                                            <h5 class="card-title">Pusat Sistem Informasi dan Teknologi Keuangan (PUSINTEK)
                                            </h5>
                                            <p class="card-text">Jl. Gn. Sahari No.4, Ps. Baru, Kecamatan Sawah Besar, Kota
                                                Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610</p>
                                            <a class="mb-3"
                                                href="https://setjen.kemenkeu.go.id/">setjen.kemenkeu.go.id</a>
                                        </div>
                                        <a href="detailPusintek" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img/indivaraLogo.jpg" class="card-img-top" alt="Indivara"
                                                style="max-width: 35%; height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-info rounded-2">Swasta</span>
                                            <span class="badge rounded-pill badge-success"></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">Indivara Group</h5>
                                            <p class="card-text">Kirana Boutique Office, Jl. Kirana Avenue No.1 - 2, Klp.
                                                Gading Tim., Kec. Klp. Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta
                                                14240</p>
                                            <a class="mb-3" href="https://www.indivaragroup.com/">indivaragroup.com</a>
                                        </div>
                                        <a href="detailIndivara" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img\infomediaLogo.jpg" class="card-img-top" alt="Infomedia"
                                                style="max-width: 45%;height: 100px;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-info rounded-2 ">Swasta</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card" style="height: 250px;">
                                            <h5 class="card-title">Infomedia Nusantara</h5>
                                            <p class="card-text">Jl. RS. Fatmawati Raya No.77-81, RT.6/RW.5, Cipete Utara,
                                                Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12150
                                            </p>
                                            <a class="mb-3" href="https://www.infomedia.co.id/">infomedia.co.id</a>
                                        </div>
                                        <a href="detailInfomedia" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img\triatraLogo.jpg" class="card-img-top" alt="Triatra"
                                                style="max-width: 45%;height: 100px;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-info rounded-2 ">Swasta</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card" style="height: 250px;">
                                            <h5 class="card-title">Triatra Sinergia Pratama</h5>
                                            <p class="card-text">Jl. Raya Bekasi No.KM 22, Cakung Barat, Kec. Cakung, Kota
                                                Jakarta Timur, Daerah Khusus Ibukota Jakarta 13910</p>
                                            <a class="mb-3" href="https://triatra.co.id/"> triatra.co.id</a>
                                        </div>
                                        <a href="detailTriatra" class="btn btn-primary mt-2 w-100">Lihat</a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-4 h-75 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <img src="img\gatewayLogo.png" class="card-img-top" alt="Gateway"
                                                style="width: auto;height: 100px;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-info rounded-2 ">Swasta</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card" style="height: 250px;">
                                            <h5 class="card-title">Gateway Container Line</h5>
                                            <p class="card-text">Jl. Otto Iskandar Dinata Komp. III No.18, RT.1/RW.1,
                                                Cipinang Cempedak, Kecamatan Jatinegara, Kota Jakarta Timur, Daerah Khusus
                                                Ibukota Jakarta 13340</p>
                                            <a class="mb-3" href="https://www.gateway-id.com/">gateway-id.com</a>
                                        </div>
                                        <a href="detailGateway" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img\kemenhubLogo.png" class="card-img-top" alt="KemenHub"
                                                style="width: 100%;height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-success rounded-2 ">Negeri</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">Kementrian Perhubungan</h5>
                                            <p class="card-text">Jl. Medan Merdeka Tim. No.8, RT.6/RW.1, Gambir, Kecamatan
                                                Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</p>
                                            <a class="mb-3" href="https://dephub.go.id/"> dephub.go.id</a>
                                        </div>
                                        <a href="detailKemenhub" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img\expressLogo.png" class="card-img-top" alt="SF Express"
                                                style="width: 150%;height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-info rounded-2 ">Swasta</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">SF Expess Indonesia ex-Kerry Express Indonesia</h5>
                                            <p class="card-text">Jl. Harapan II No.5, RT.2/RW.5, Setu, Kec. Cipayung, Kota
                                                Jakarta Timur, Daerah Khusus Ibukota Jakarta 13880</p>
                                            <a class="mb-3" href="http://id.kex-express.com/">id.kex-express.com</a>
                                        </div>
                                        <a href="detailSfExpress" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img\miminLogo.png" class="card-img-top" alt="Admin Pintar Kita"
                                                style="width: 150%;height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-info rounded-2 ">Swasta</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">PT Admin Pintar Kita</h5>
                                            <p class="card-text">Jl. Tanah Abang 5 No.19, RT.2/RW.2, Petojo Sel., Kecamatan
                                                Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10160</p>
                                            <a class="mb-3" href="https://mimin.io">mimin.io</a>
                                        </div>
                                        <a href="detailMimin" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img\kemenhubLogo.png" class="card-img-top" alt="Dishub"
                                                style="width: 150%;height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-success rounded-2 ">Negeri</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">Unit Pengelola Angkutan Sekolah (UPAS) Dishub DKI
                                                Jakarta</h5>
                                            <p class="card-text">Jl.H.Bokir Bin Bin Djiun No 1 Jakarta timur</p>
                                            <a class="mb-3" href="www.Unitpengelolaangkutansekolah.com">
                                                Unitpengelolaangkutansekolah.com</a>
                                        </div>
                                        <a href="detailDishub" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img\primaLogo.jpg" class="card-img-top" alt="Prima Nur Panurjwan"
                                                style="width: 150%;height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-info rounded-2 ">Swasta</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">PT. Prima Nur Panurjwan</h5>
                                            <p class="card-text">Yos Sudarso Megah Blok B No. 19-20, Jalan Yos Sudarso No.
                                                1, Koja, RT.16/RW.6, Kb. Bawang, Kec. Tj. Priok, Jkt Utara.</p>
                                            <a class="mb-3"
                                                href="https://www.samudera.id/pnp/id/5/tentangkami">samudera.id</a>
                                        </div>
                                        <a href="detailPrima" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-4 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img/LogoKominfo.jpg" class="card-img-top" alt="Kominfo"
                                                style="width: 150%;height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-success rounded-2 ">Negeri</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">Kominfotik Kota Adm. Jakarta Pusat</h5>
                                            <p class="card-text">Jalan Tanah Abang I No.1 Petojo Selatan Gambir RT.11,
                                                RT.11/RW.8, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus
                                                Ibukota Jakarta 10160</p>
                                            <a class="mb-3" href="https://www.kominfo.go.id/">kominfo.go.id</a>
                                        </div>
                                        <a href="detailKominfo" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img/LogoAskrindo.jpg" class="card-img-top" alt="Askrindo"
                                                style="width: 150%;height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-success rounded-2 ">Negeri</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">PT. Asuransi Kredit Indonesia (Askrindo)</h5>
                                            <p class="card-text">Jl. Angkasa Blok B No.9, RW.10, Gn. Sahari Sel., Kec.
                                                Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610</p>
                                            <a class="mb-3" href="https://askrindo.co.id/">askrindo.co.id</a>
                                        </div>
                                        <a href="detailAskrindo" class="btn btn-primary mt-2 w-100">Lihat</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-4 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="align-items-center">
                                            <img src="img/CSISlogo.png" class="card-img-top" alt="CSIS"
                                                style="width: 150%;height: auto;" />
                                        </div>
                                        <div class="row p-2 col-md-4 offset-md-4 w-50 text-center">
                                            <span class="badge badge-success bg-success rounded-2 ">Swasta</span>
                                            <span class="badge rounded-pill badge-success "></span>
                                        </div>
                                        <div class="card">
                                            <h5 class="card-title">Centre for Strategic and International Studies (CSIS)</h5>
                                            <p class="card-text">Gedung Pakarti Centre, Jl. Tanah Abang III No.23-27, RT.3/RW.3, Petojo Sel., Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta.</p>
                                            <a class="mb-3" href="https://www.csis.or.id/">CSIS.or.id</a>
                                        </div>
                                        <a href="detailCSIS" class="btn btn-primary mt-2 w-100">Lihat</a>
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



    {{-- <div class="col-4">
              <div class="card text-white bg-info mb-3 card-hover-zoom">
                <div class="card-body" style="height: 250px">
                  <div class="card-title">
                  <img src="{{ asset('img/experience.png') }}" alt="" width="200">
                    <h4 class="text-center">1. Pengalaman Praktis</h4>
                  </div>
                  <p class="card-text">PKL memberikan kesempatan bagi siswa atau mahasiswa untuk mendapatkan pengalaman kerja nyata.</p>
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
                    PKL membantu siswa atau mahasiswa mengembangkan keterampilan beragam yang diperlukan di dunia kerja, termasuk komunikasi, interpersonal, pemecahan masalah, manajemen waktu, dan keterampilan teknis.
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
                    Melalui PKL, peserta dapat memahami lebih dalam industri atau sektor tempat mereka melakukan magang.
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
                    PKL memungkinkan membangun jaringan profesional dengan para ahli di industri yang diminati. Hal ini membuka peluang untuk mendapatkan informasi dan potensi pekerjaan di masa depan.
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
                    PKL membantu siswa atau mahasiswa memahami pekerjaan yang mereka minati, sejalan dengan ekspektasi, dan menentukan bidang yang paling sesuai bagi mereka.
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
                    PKL juga memungkinkan peserta untuk mengevaluasi diri mereka sendiri dan mengidentifikasi area di mana mereka perlu berkembang lebih lanjut.
                  </p>
                </div>
              </div>
            </div>
 --}}
