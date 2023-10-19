<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #40514E; height:60px">
            <a class="navbar-brand" href="/home">
                <img src="image/logo-rpl.png" width="60" height="60" class="d-inline-block align-top"
                    alt="">
                <p
                    style="color: white; font-size: 15px; margin-right: 10px; text-align: left; display: inline-block; margin-top: 10px;">
                    <!-- Menambahkan margin-top -->
                    SMKN 1 NEGERI JAKARTA <br>
                    Rekayasa Perangkat Lunak (RPL)
                </p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Fitur1' ? 'active' : '' }}" href="/Fitur1"
                            style="color: white; margin-right: 20px; font-size: 15px;">Fitur 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Fitur2' ? 'active' : '' }}" href="/Fitur2"
                            style="color: white; margin-right: 20px; font-size: 15px;">Fitur 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $title === 'Fitur3' ? 'active' : '' }}" href="/Fitur3"
                            style="color: white; margin-right: 20px; font-size: 15px;">Fitur 3</a>
                    </li>
                    <li class="nav-item" style="margin-right: 20px;"> <!-- Menambahkan margin -->
                        <a class="nav-link {{ $title === 'Fitur4' ? 'active' : '' }}" href="/Fitur4"
                            style="color: white; font-size: 15px;">Fitur 4</a>
                    </li>
                    <li class="nav-item">
                        <div class="input-group ml-auto"> <!-- Menggunakan ml-auto untuk jarak ke kanan -->
                            <input class="form-control border-end-0 border rounded-pill" type="search" value="search"
                                id="example-search-input">
                            <span class="input-group-append">
                                <button class="btn bg-transparent border-0" type="button">
                                    <i class="fa fa-search" style="color: white; font-size: 15px;"></i>
                                    <!-- Menyesuaikan ukuran ikon -->
                                </button>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function() {
            dropDownMenu.classList.toggle('open')
            const isOpen = dropDownMenu.classList.contains('open')

            toggleBtnIcon.classList = isOpen ?
                'fa-solid fa-xmark' :
                'fa-solid fa-bars'
        }

        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(event) {
                event.preventDefault();
                var target = this.hash;
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 500);
            });
        });

        // window.addEventListener('scroll', function() {
        //     var navbar = document.querySelector('.navbar');
        //         if (window.scrollY > 50) { // Ganti angka 100 sesuai dengan posisi scroll yang Anda inginkan
        //         navbar.style.top = '0';
        //     } else {
        //     navbar.style.top = '-100px'; // Menyembunyikan navbar di atas layar
        //     }
        // });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <div class="content justify-content-start d-flex">
        @yield('content')
    </div>
