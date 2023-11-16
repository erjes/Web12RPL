@extends('Template.header')
@section('body')

    <link rel="stylesheet" type="text/css" href="{{ asset('prestasicss/style.css') }}">
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <title>Prestasi</title>
<body>
    <div class="container">
      <div class="rusak-1">
      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Alfado Davie Luis Sheva</h2>
          <a class="popup-btn">View More</a>
          <img src="{{ asset('FotoSiswaPrestasi/pado.png') }}" class="prestasi-img-1" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/pado.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Alfado Davie Luis Sheva</h2>
              <p>
                Hallo semuanya perkenalkan nama saya <b>"Alfado Davie Luis Sheva"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Pengurus OSIS SMPN 263 (M.J 2018-2019 & 2019-2020) <br>
                 2. Lulus test vierra
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Ararya Gentala Putra</h2>
          <a class="popup-btn">View More</a>
          <img src="{{ asset('FotoSiswaPrestasi/arya.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/arya.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Ararya Gentala Putra</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Ararya Gentala Putra"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                Detail: <br>
                1. Juara 2 taekwondo 2020
                2. Lulus tes Toeic nilai 900+
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Bintang Firdaus</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/bintang.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/bintang.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Bintang Firdaus</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Bintang Firdaus"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                Detail : <br>
                1. Juara 3, Lomba Regu Prestasi Tingkat Kota Madya <br>
                2. Juara 1, Gelar Kreativitas Penggalang Kwartir Daerah DKI Jakarta <br>
                3. Panitia Raimuna Ranting 2022 <br>
                4. Ketua Panitia Perkemahan Penerimaan Tamu Ambalan Tahun 2022 <br>
                5. Peserta Raimuna Nasional XII Tahun 2023 <br>
                6. Ketua Ekstrakulikuler Pramuka SMK Negeri 1 Jakarta Tahun 2023/2024 <br>
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Cahaya Bunga</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/caca.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/caca.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Cahaya Bunga</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Cahaya Bunga"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
              Detail: <br>
              1. Lomba paskibra juara 2 umum dari 42 peserta <br>
              2. Lomba Tari juara harapan 5
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Corisa Trimasa Cholya S</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/cori.png') }}" class="prestasi-img-3" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/cori.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Corisa Trimasa Cholya S</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Corisa Trimasa Cholya S"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Juara 1 lomba fotografi dipofest 2020
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">David Ananta Pramudya Gultom</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/david.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/david.png') }}" alt="">
            </div>
            <div class="info">
              <h2>David Ananta Pramudya Gultom</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"David Ananta Pramudya Gultom"</b> berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                1. Ketua osis dan ketua Ekstrakulikuler
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Dede Kurniawan</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/dede.png') }}" class="prestasi-img-3" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/dede.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Dede Kurniawan</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Dede Kurniawan"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                   Detail: <br>
                1.Lulus tes viera <br>
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Dhaifina Tri Mulyani</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/dafina.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/dafina.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Dhaifina Tri Mulyani</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Dhaifina Tri Mulyani"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
              Detail: <br>
              1.-<br>
            </div>
          </div>
        </div>
      </div>
      <div class="haikal">
      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Haikal Ramadhan</h2>
          <a class="popup-btn"> View More </a>
          <img src="{{ asset('FotoSiswaPrestasi/haikal.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/haikal.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Haikal Ramadhan</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Haikal Ramadhan"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Juara 3 futsal (Tingkat RW)
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Karina Margaretha Sumianto</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/karina.png') }}" class="prestasi-img-4" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img-1">
              <img src="{{ asset('FotoSiswaPrestasi/karina.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Karina Margaretha Sumianto</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Karina Margaretha Sumianto"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Pengurus OSIS
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Maolinda Sekarwati</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/maulin.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/maulin.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Maoilinda Sekarwati</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Maoilinda Sekarwati"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
               Detail: <br>
                 1. Lomba Pramuka Juara 3
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Mohamad Alfi</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/alfi.png') }}" class="prestasi-img-1" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/alfi.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Muhammad Alfi</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Muhammad Alfi"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Lulus teks viera
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Muhammad Ikhwan Fadillah</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/ikhwan.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/ikhwan.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Muhammad Ikhwan Fadillah</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Muhammad Ikhwan Fadillah"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Lulus tes viera
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Muhammad Tiflanil Azhar Rudin</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/udin.png') }}"" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/udin.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Muhammad Tiflanil Azhar Rudin</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Muhammad Tiflanil Azhar Rudin"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                1. Juara 1 LKS IT SOFTWARE JP1 <br>
                2. Lulus tes viera
            </div>
          </div>
        </div>
      </div>
      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Muhammad Vicky Satrio</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/vicky.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/vicky.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Muhammad Vicky Satrio</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Muhammad Vicky Satrio"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Juara 2 Lomba e-sport ML se DKI
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Nayla Shakila Al-Jabbar</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/nayla.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/nayla.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Nayla Shakila Al-Jabbar</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Nayla Shakila Al-Jabbar"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Tampil di pulau 1000 pembukaan pantai di pulau 1k <br>
                 2. Wakil ketua OSIS periode 2023/2024 <br>
                 3. Pengurus OSIS 2022-2024 <br>
            </div>
          </div>
        </div>
      </div>
      <div class="indri">
      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Novita Indri Lestari</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/novi.png') }}" class="prestasi-img-5" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/novi.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Novita Indri Lestari</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Novita Indri Lestari"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
               Detail: <br>
                 1.Juara 2 basket Fsl2n <br>
                 2.Juara 1 voli Fsl2n <br>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Radja Mahesa Waluya</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/radja.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/radja.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Radja Mahesa Waluya</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Radja Mahesa Waluya"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Pengurus OSIS <br>
                 2. Ketua eskul SIOT <br>
                 3. Peserta LKS <br>
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Rasya Oetama Putra</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/tama.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/tama.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Rasya Oetama Putra</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Rasya Oetama Putra"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. juara 2 LKs <br>
                 2. juara 1 TIK nasional <br>
                 3. juara 2 TIK nasional <br>
                 4. juara jambore <br>
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Salman Ramadhan Alfaridzi </h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/salman.png') }}" class="prestasi-img-6" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/salman.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Salman Ramadhan Alfaridzi</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Salman Ramadhan Alfaridzi"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                Detail: <br>
                 1. Juara 2 pencak silat kota <br>
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Salsabila Laylatul Maswah</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/sabil.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/sabil.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Salsabila Laylatul Maswah</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Salsabila Laylatul Maswah"</b> berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Juara 2 PMR tingkatkan DKI (11) <br>
                 2. Juara 1 Olimpiade kewarganegaraan (kls 10) <br>
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Talitha Yumna Akbariani</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/lita.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/lita.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Talitha Yumna Akbariani</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Talitha Yumna Akbariani"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Pengurus OSIS periode 2022-2024 (Sie.  Budi pekerti dan Humas)
            </div>
          </div>
        </div>
      </div>

      <div class="prestasi">
        <div class="prestasi-card">
          <h2 class="name">Muhammad Alfa Rizi</h2>
          <a class="popup-btn">  View More  </a>
          <img src="{{ asset('FotoSiswaPrestasi/rizi.png') }}" class="prestasi-img-2" alt="">
        </div>
        <div class="popup-view">
          <div class="popup-card">
            <a><i class="fas fa-times close-btn"></i></a>
            <div class="prestasi-img">
              <img src="{{ asset('FotoSiswaPrestasi/rizi.png') }}" alt="">
            </div>
            <div class="info">
              <h2>Muhammad Alfa Rizi</h2>
              <p>Hallo semuanya perkenalkan nama saya <b>"Muhammad Alfa Rizi"</b> dan berikut ini merupakan detail prestasi yang saya miliki semasa saya bersekolah
                <br>
                 Detail: <br>
                 1. Juara 1 Futsal (Tingkat RW)<br>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    //javascript for quick view button
    var popup = function(popupClick){
      popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
      popupBtn.addEventListener("click", () => {
        popup(i);
      });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
      closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
          popupView.classList.remove('active');
        });
      });
    });
    </script>
@endsection
