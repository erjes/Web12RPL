  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
      <a class="navbar-brand" href="/home">
          <img src="{{ asset('img/logorpl.png') }}" width="70" height="70" class="d-inline-block align-top"
              alt="">
          <p
              style="color: black; font-size: 20px; margin-right: 10px; text-align: left; display: inline-block; margin-top: 10px;">
              <!-- Menambahkan margin-top -->
              Rekayasa Perangkat <br>
              Lunak 2021/2024
          </p>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
          aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link {{ $title === 'Daftar Pengembang' ? 'active' : '' }}" href=""
                          style="color: black; margin-right: 20px; font-size: 20px;">Daftar Pengembang</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $title === 'Mapel dan Guru' ? 'active' : '' }}" href=""
                          style="color: black; margin-right: 20px; font-size: 20px;">Mapel dan Guru</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $title === 'PKL' ? 'active' : '' }}" href=""
                          style="color: black; margin-right: 20px; font-size: 20px;">PKL</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $title === 'Prestasi' ? 'active' : '' }}" href=""
                          style="color: black; margin-right: 20px; font-size: 20px;">Prestasi</a>
                  </li>
          </ul>
      </div>
  </nav>
