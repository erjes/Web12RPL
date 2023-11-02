@extends('NewLayouts.header')
@section('body')
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Welcome to SMK Negeri 1 Jakarta <br> <span>Rekayasa Perangkat Lunak</span> 2021/2024</h1>
        </div>
    </div>
    <!-- akhir Jumbotron -->

    <!-- container -->
    <div class="container" style="margin-top: -150px;">

        <!-- info panel -->
        <div class="row justify-content-center">
            <div class="col-12 info-panel">

                <section id="slider">
                    <input type="radio" name="slider" id="s1" checked>
                    <input type="radio" name="slider" id="s2">
                    <input type="radio" name="slider" id="s3">
                    <input type="radio" name="slider" id="s4">
                    <input type="radio" name="slider" id="s5">
                    <input type="radio" name="slider" id="s6">

                    <label for="s1" id="slide1"><img src="img/1.png" alt=""></label>
                    <label for="s2" id="slide2"><img src="img/2.png" alt=""></label>
                    <label for="s3" id="slide3"><img src="img/3.png" alt=""></label>
                    <label for="s4" id="slide4"><img src="img/4.png" alt=""></label>
                    <label for="s5" id="slide5"><img src="img/5.png" alt=""></label>
                    <label for="s6" id="slide6"><img src="img/5.png" alt=""></label>
                </section>
            </div>
        </div>
        <!-- akhir info panel -->


        <!-- Workingspace -->
        <div class="row workingspace">
            <div class="col-lg-12">
                <br>
                <br>
                <h2 style="text-align:center; font-size: 30px; font-weight:bolder; color:#3D6CB9;">Tentang Rekayasa
                    Perangkat Lunak</h2>
                <br>
                <br>
            </div>
            <div class="col-lg-6">
                <img src="img/grafis1.png" alt="Working Space" class="img-fluid">
                <p style="text-align:right; font-size: 10; color: black;">
                    <strong>R</strong>ekayasa Perangkat Lunak (RPL) <br>
                    merupakan salah satu cabang dalam bidang ilmu <br>
                    komputer yang fokus pada pengembangan, <br>
                    perancangan, dan pembuatan perangkat lunak<br>
                    (software). Jurusan ini membekali siswa dan siswi<br>
                    dengan keterampilan dan pengetahuan yang<br>
                    diperlukan untuk mengembangkan berbagai jenis<br>
                    perangkat lunak, mulai dari aplikasi desktop,<br>
                    aplikasi web, hingga aplikasi mobile.
                </p>
            </div>
            <div class="col-lg-5">
                <p style="font-size: 10; color: black;">
                    <strong>J</strong>urusan ini diatur dalam Keputusan Kepala <br>
                    Badan Standar, Kurikulum, Dan Asesmen <br>
                    Pendidikan Kementerian Pendidikan, Kebudayaan, Riset, Dan Teknologi Nomor 024/HKR/2022 <br>
                    Tentang Konsentrasi Keahlian SMK MAK Pada Kurikulum Merdeka. Rekayasa Perangkat Lunak, <br>
                    masuk dalam bidang keahlian Teknologi Informasi, dengan program keahlian <br>
                    pengembangan perangkat lunak dan gim, <br>
                    dengan konsentrasi keahlian Rekayasa Perangkat Lunak, dan masa belajar 3 Tahun.
                </p>
                <br>
                <br>
                <img src="img/grafis2.png" alt="Working Space" class="img-fluid">
            </div>
        </div>

        <!-- akhir Workingspace -->
    </div>
    <!-- akhir container -->



    {{-- script agar slidder otomatis gerak --}}

    <script>
        // Mengatur variabel untuk indeks slide saat ini
        let currentSlide = 1;

        // Mengatur interval untuk mengganti slide secara otomatis setiap beberapa detik
        setInterval(function() {
            // Mengatur indeks slide berikutnya
            currentSlide++;
            if (currentSlide > 6) {
                currentSlide = 1;
            }

            // Mengganti slide yang ditampilkan
            document.getElementById(`s${currentSlide}`).checked = true;
        }, 3000); // Ganti slide setiap 5 detik (5000 ms)
    </script>

    <script>
        const workingspace = document.querySelector('.workingspace');

        function showWorkingspace() {
            const rect = workingspace.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            if (rect.top <= windowHeight * 0.75) {
                workingspace.classList.add('visible');
            } else {
                workingspace.classList.remove('visible'); // Hilangkan animasi saat elemen keluar dari tampilan
            }
        }

        // Panggil fungsi saat halaman dimuat dan saat discroll
        window.addEventListener('load', showWorkingspace);
        window.addEventListener('scroll', showWorkingspace);
    </script>
@endsection
