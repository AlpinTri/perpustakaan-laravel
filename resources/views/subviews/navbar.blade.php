<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand " href="#">Perpustakaan IIL</a>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <div class="d-flex">
          <img src="{{ asset('img/user.png') }}" alt="" style="width: 50px; height: 50px;">
          <div class="ms-2">
            <h5 class="m-0">Tukang Bubur Naek Haji</h5>
            <div class="m-0">Administrator</div>
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <hr>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <hr>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Master
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/anggota">Data Anggota</a></li>
              <li><a class="dropdown-item" href="/buku">Data Buku</a></li>
              <li><a class="dropdown-item" href="/petugas">Data Petugas</a></li>
            </ul>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link active" href="#">Laporan</a>
          </li>
          <hr>
        </ul>
      </div>
    </div>
  </div>
</nav>