<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPL 2024 SMKN 1 Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, sans-serif;
            background-color: #FAFAF6; /* Set your desired background color */
        }

        .navbar-custom {
            background: transparent; /* Transparent navbar background */
            border: none;
            color: #040D12; /* Text color */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .navbar-custom .navbar-brand {
            color: #040D12; /* Navbar brand color */
        }

        .navbar-custom .navbar-toggler-icon {
            color: #fff; /* Navbar toggler icon color */
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #040D12; /* Navbar link text color */
            margin: 0 10px;
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            background: #2f88fc51; /* Hover color for links */
            color: #000; /* Text color on hover */
        }

        .navbar-custom .navbar-nav .nav-link.active {
            background: #40514E; /* Active menu item background color */
        }

        .container {
            padding: 20px; /* Add space around the content */
        }

        .footer-custom {
            background: transparent; /* Transparent footer background */
            border: none;
            color: #040D12; /* Text color in the footer */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .search-bar {
            position: relative;
        }

        .search-bar input[type="text"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 30px;
            background-color: #f8f9fa;
            outline: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .search-bar button {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
        }
    </style>
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-custom navbar-expand-lg" id="navbar-primary">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('picture/logorpl.png') }}" alt="Logo" width="50" height="50">
                </a>
                <a class="navbar-brand" href="#">RPL 2024 SMKN 1 Jakarta</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('apaiturpl') }}">Apa itu RPL?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('prestasi') }}">Prestasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('pkl') }}">Praktik Kerja Lapangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('mapeldanguru') }}">Mata Pelajaran dan Guru</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('daftarpengembang') }}">Daftar Pengembang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container">
        @yield('konten')
    </main>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="container">
            &copy; 2023 RPL 2024 SMKN 1 Jakarta
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
