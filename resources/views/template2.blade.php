{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPL 2024 SMKN 1 Jakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        /* Add custom CSS here */
        .navbar-custom {
            background-color: #007BFF;
        }

        .navbar-custom .navbar-brand {
            color: #fff;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: #fff;
        }

        .footer-custom {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('picture/logorpl.jpeg') }}" alt="Logo">
            </a>
            <a class="navbar-brand" href="#">RPL 2024 SMKN 1 Jakarta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Apa itu RPL?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PKL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mata Pelajaran dan Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Daftar Pengembang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container">
        <br>
        <!-- Your content here -->
    </main>

    <!-- Footer -->
    <footer class="footer-custom">
        <div class="container">
            &copy; 2023 RPL 2024 SMKN 1 Jakarta
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html> --}}




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
        text-transform: uppercase;
        }

        #footer {
            background-color:  rgba(64, 64, 64, 0.193);
            color: #000000;
            text-align: center;
            padding: 8px 0;
                position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
        }

        #navbar {
            background-color: rgba(64, 64, 64, 0.193);
            box-shadow: 4px 6px 12px rgba(0,0,0,0.4)
        }

        #navbar .nav-item .nav-link.active {
        border-radius: 0;
        background: linear-gradient(145deg, #239f88, #ff9d9d);
        box-shadow:  4px 4px 8px #40514E,
                -4px -4px 8px #40514E;
        }
        #navbar .dropdown-menu a:hover {
        color: #454545
        }
        #navbar .nav-item {
        margin : auto 4px;
        }
        #navbar a {
        color: #ffffff;
        padding-left:12px;
        padding-right:12px;
        }
        #navbar .dropdown-menu {
        background : #545454
        }
        a.navbar-brand {
        color: #454545
        }

        #navbar form.d-flex {
            margin-left: 10px;
        }

        #navbar form.d-flex .form-control {
            width: 100%;
        }


    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-custom" id="navbar">
        <div class="container">
            <a class="navbar-brand" href='#'>
                <img src="{{ asset('picture/logorpl.jpeg') }}" alt="Logo" width="50" height="50">
            </a>
            <a class="navbar-brand" href="{{ url('apaiturpl') }}">RPL 2024 SMKN 1 Jakarta</a>
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
                        <a class="nav-link" href="{{ url('pkl') }}">PKL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('mapeldanguru') }}">Mata Pelajaran dan Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('daftarpengembang') }}">Daftar Pengembang</a>
                    </li>
                </ul>
                <form class="d-flex" action="#">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="container">
        <br>
    </main>

    <footer  id="footer">
        <div class="container">
            &copy; 2023 RPL 2024 SMKN 1 Jakarta
        </div>
    </footer>

    <!-- Add your JavaScript and Bootstrap JS script links here -->
</body>

