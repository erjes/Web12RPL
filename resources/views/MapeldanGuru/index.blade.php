@extends('template')
@section('konten')
    <div class="btn-toolbar mb-3" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group me-3" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio1">Kejuruan</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btnradio2">Non-kejuruan</label>
        </div>

        <div class="input-group">
            <div class="input-group-text" id="btnGroupAddon">&#x1F50E;</div>
            <input type="text" class="form-control" placeholder="Cari guru di sini" aria-label="Input group example"
                aria-describedby="btnGroupAddon">
        </div>
    </div>

    <p>
        Pada page sebelumnya sudah dijelaskan mengenai apa itu Rekayasa Perangkat Lunak. Selanjutnya, disini akan kami
        tampilkan apa saja pelajaran yang dipelajari oleh siswa/i jurusan Rekayasa Perangkat Lunak dan siapa saja guru
        pengajarnya.
    </p>
    <br>

    <div id="tampilanawal" style="display: block;">
        <div class="container text-center shadow p-3 mb-5 bg-white rounded" style="background-color: white">
            <div class="row">
                <div class="col-sm-9">Guru</div>
                <div class="col-sm-1">X</div>
                <div class="col-sm-1">XI</div>
                <div class="col-sm-1">XII</div>
            </div>
        </div>
    </div>

    <div id="tampilanawal1" style="display: none;">
        <div class="container text-center shadow p-3 mb-5 bg-white rounded" style="background-color: white">
            <div class="row">
                <div class="col-sm-9">Guru Kejuruan</div>
                <div class="col-sm-1">X</div>
                <div class="col-sm-1">XI</div>
                <div class="col-sm-1">XII</div>
            </div>
        </div>
        <p>
            Materi pembelajaran dibagi menjadi dua jenis yaitu, pelajaran Produktif dan pelajaran Normatif Adaptif. Berikut
            tampilan pelajaran Produktif atau bisa disebut sebagai pelajaran Kejuruan.
        </p>
    </div>

    <div id="tampilanawal2" style="display: none;">
        <div class="container text-center shadow p-3 mb-5 bg-white rounded" style="background-color: white">
            <div class="row">
                <div class="col-sm-9">Guru Non-Kejuruan</div>
                <div class="col-sm-1">X</div>
                <div class="col-sm-1">XI</div>
                <div class="col-sm-1">XII</div>
            </div>
        </div>
        <p>
            Materi pembelajaran dibagi menjadi dua jenis yaitu, pelajaran Produktif dan pelajaran Normatif Adaptif. Berikut
            tampilan pelajaran Normatif Adaptif atau bisa disebut sebagai pelajaran Non-Kejuruan.
        </p>
    </div>

    <div id="tampilan1" style="display: block;">
        <div class="container mt-5">
            <h3 class="fw-bold">Kejuruan Kelas X</h3><br>
            <div class="row">
                @foreach ($kejuruan1 as $guru)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm rounded custom-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $guru['gambar'] }}" class="card-img-right" height="200" width="150"
                                        alt="Card image cap">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="fw-bold" style="margin: 0;">{{ $guru['nama'] }}</h4>
                                        <h6 class="fw-light" style="margin: 0 10px 0 0;">{{ $guru['NIP'] }}</h6>
                                        <h7 class="text-decoration-underline" style="display: inline-block;">{{ $guru['mapel'] }}</h7>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item" style="border: 1px solid #ccc; border-radius: 5px; margin: 10px 0;">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Quotes
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">{{ $guru['quotes'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="tampilan2" style="display: block;">
        <div class="container mt-5">
            <h3 class="fw-bold">Non-Kejuruan Kelas X</h3><br>
            <div class="row">
                @foreach ($nonkejuruan1 as $guru)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm rounded custom-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $guru['gambar'] }}" class="card-img-right" height="200" width="150"
                                        alt="Card image cap">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="fw-bold" style="margin: 0;">{{ $guru['nama'] }}</h4>
                                        <h6 class="fw-light" style="margin: 0 10px 0 0;">{{ $guru['NIP'] }}</h6>
                                        <h7 class="text-decoration-underline" style="display: inline-block;">{{ $guru['mapel'] }}</h7>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item" style="border: 1px solid #ccc; border-radius: 5px; margin: 10px 0;">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Quotes
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">{{ $guru['quotes'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="tampilan3" style="display: block;">
        <div class="container mt-5">
            <h3 class="fw-bold">Kejuruan Kelas XI</h3><br>
            <div class="row">
                @foreach ($kejuruan2 as $guru)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm rounded custom-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $guru['gambar'] }}" class="card-img-right" height="200" width="150"
                                        alt="Card image cap">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="fw-bold" style="margin: 0;">{{ $guru['nama'] }}</h4>
                                        <h6 class="fw-light" style="margin: 0 10px 0 0;">{{ $guru['NIP'] }}</h6>
                                        <h7 class="text-decoration-underline" style="display: inline-block;">{{ $guru['mapel'] }}</h7>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item" style="border: 1px solid #ccc; border-radius: 5px; margin: 10px 0;">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Quotes
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">{{ $guru['quotes'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="tampilan4" style="display: block;">

        <div class="container mt-5">
            <h3 class="fw-bold">Non-Kejuruan Kelas XI</h3><br>
            <div class="row">
                @foreach ($nonkejuruan2 as $guru)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm rounded custom-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $guru['gambar'] }}" class="card-img-right" height="200" width="150"
                                        alt="Card image cap">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="fw-bold" style="margin: 0;">{{ $guru['nama'] }}</h4>
                                        <h6 class="fw-light" style="margin: 0 10px 0 0;">{{ $guru['NIP'] }}</h6>
                                        <h7 class="text-decoration-underline" style="display: inline-block;">{{ $guru['mapel'] }}</h7>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item" style="border: 1px solid #ccc; border-radius: 5px; margin: 10px 0;">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Quotes
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">{{ $guru['quotes'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="tampilan5" style="display: block;">

        <div class="container mt-5">
            <h3 class="fw-bold">Kejuruan Kelas XII</h3><br>
            <div class="row">
                @foreach ($kejuruan3 as $guru)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm rounded custom-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $guru['gambar'] }}" class="card-img-right" height="200" width="150"
                                        alt="Card image cap">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="fw-bold" style="margin: 0;">{{ $guru['nama'] }}</h4>
                                        <h6 class="fw-light" style="margin: 0 10px 0 0;">{{ $guru['NIP'] }}</h6>
                                        <h7 class="text-decoration-underline" style="display: inline-block;">{{ $guru['mapel'] }}</h7>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item" style="border: 1px solid #ccc; border-radius: 5px; margin: 10px 0;">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Quotes
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">{{ $guru['quotes'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="tampilan6" style="display: block;">
        <div class="container mt-5">
            <h3 class="fw-bold">Non-Kejuruan Kelas XII</h3><br>
            <div class="row">
                @foreach ($nonkejuruan3 as $guru)
                    <div class="col-md-6 mb-4">
                        <div class="card shadow-sm rounded custom-card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $guru['gambar'] }}" class="card-img-right" height="200" width="150"
                                        alt="Card image cap">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h4 class="fw-bold" style="margin: 0;">{{ $guru['nama'] }}</h4>
                                        <h6 class="fw-light" style="margin: 0 10px 0 0;">{{ $guru['NIP'] }}</h6>
                                        <h7 class="text-decoration-underline" style="display: inline-block;">{{ $guru['mapel'] }}</h7>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item" style="border: 1px solid #ccc; border-radius: 5px; margin: 10px 0;">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                        aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Quotes
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                    aria-labelledby="flush-headingOne"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">{{ $guru['quotes'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        const btnradio1 = document.getElementById('btnradio1');
        const btnradio2 = document.getElementById('btnradio2');
        const tampilan1 = document.getElementById('tampilan1');
        const tampilan2 = document.getElementById('tampilan2');
        const tampilanawal = document.getElementById('tampilanawal');

        btnradio1.addEventListener('change', function() {
            if (btnradio1.checked) {
                tampilanawal.style.display = 'none';
                tampilanawal1.style.display = 'block';
                tampilanawal2.style.display = 'none';
                tampilan1.style.display = 'block';
                tampilan2.style.display = 'none';
                tampilan3.style.display = 'block';
                tampilan4.style.display = 'none';
                tampilan5.style.display = 'block';
                tampilan6.style.display = 'none';
            }
        });

        btnradio2.addEventListener('change', function() {
            if (btnradio2.checked) {
                tampilanawal.style.display = 'none';
                tampilanawal1.style.display = 'none';
                tampilanawal2.style.display = 'block';
                tampilan1.style.display = 'none';
                tampilan2.style.display = 'block';
                tampilan3.style.display = 'none';
                tampilan4.style.display = 'block';
                tampilan5.style.display = 'none';
                tampilan6.style.display = 'block';
            }
        });
    </script>
@endsection
