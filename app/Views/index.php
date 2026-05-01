<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan</title>
  <meta name="keywords" content="perpustakaan, buku, fapus">
  <meta name="description" content="Fasilitas Perpustakaan Digital">
  <meta name="author" content="">

  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('images/fevicon.png'); ?>" type="image/png" />

  <!-- Bootstrap 5 (SATU SUMBER SAJA - lokal) -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css2/bootstrap.min.css'); ?>">

  <!-- Font Awesome (lokal) -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?>">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,800;1,400&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">

  <!-- mCustomScrollbar -->
  <link rel="stylesheet" href="<?= base_url('css2/jquery.mCustomScrollbar.min.css'); ?>">

  <!-- Custom Style Halaman Depan -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('css2/style.css'); ?>">

  <!-- Responsive -->
  <link rel="stylesheet" href="<?= base_url('css2/responsive.css'); ?>">

  <style>
    /* ===== OVERRIDE: Halaman Depan (bukan admin) ===== */
    body {
      background-color: #ffffff;
      color: #ffffff;
      font-family: 'Poppins', sans-serif;
    }

    /* Hapus sidebar dari css2/style.css karena ini bukan halaman admin */
    .sidebar { display: none !important; }
    .content { margin-left: 0 !important; }

    /* Header / Navbar */
    .header_section {
      background-color: #1a8a42;
      padding: 10px 0;
      border-bottom: 2px solid #1a8a42;
    }

    .navbar-brand img {
      height: 50px;
    }

    /* Banner */
    .banner_section {
      padding: 80px 0 60px;
    }

    .banner_taital {
      font-size: 42px;
      font-weight: 800;
      color: #000000;
      line-height: 1.3;
    }

    .btn_main {
      display: flex;
      gap: 15px;
      margin-top: 25px;
    }

    .started_text a {
      display: inline-block;
      padding: 10px 30px;
      background-color: #1a8a42;
      color: #ffffff;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: 0.3s;
    }

    .started_text a:hover {
      background-color: #1a8a42;
      color: #fff;
    }

    .banner_img img {
      max-width: 100%;
      border-radius: 12px;
    }

    /* Alert */
    .alert-danger {
      background-color: rgba(235, 22, 22, 0.15);
      border: 1px solid #EB1616;
      color: #ff6b6b;
      border-radius: 8px;
      margin: 20px 15px;
    }

    /* Card Buku */
    .layout-card-custom {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
      padding: 20px 15px;
    }

    .card {
      background-color: #1a1a2e;
      border: 1px solid #2a2a3e;
      border-radius: 12px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      overflow: hidden;
      color: #ffffff;
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 10px 25px rgba(235, 22, 22, 0.3);
    }

    .card-img-top {
      height: 180px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .card-img-top:hover {
      transform: scale(1.05);
    }

    .card-body {
      padding: 10px;
    }

    .card-title {
      font-size: 0.85rem;
      font-weight: 600;
      color: #ffffff;
      margin: 0;
    }

    .list-group-item {
      background-color: #1a1a2e;
      color: #aaaaaa;
      border-color: #2a2a3e;
      font-size: 0.75rem;
      text-align: center;
    }

    /* Modal */
    .modal-content {
      background-color: #1a1a2e;
      color: #ffffff;
      border: 1px solid #2a2a3e;
      border-radius: 12px;
    }

    .modal-header {
      border-bottom: 1px solid #2a2a3e;
    }

    .modal-footer {
      border-top: 1px solid #2a2a3e;
    }

    /* Footer */
    .footer_section {
      background-color: #111111;
      padding: 40px 0;
      margin-top: 60px;
      border-top: 2px solid #EB1616;
    }

    .footer_text {
      color: #EB1616;
      font-size: 18px;
      font-weight: 700;
      margin-bottom: 15px;
    }

    .footer_menu ul {
      list-style: none;
      padding: 0;
    }

    .footer_menu ul li a,
    .dummy_text {
      color: #aaaaaa;
      text-decoration: none;
      font-size: 14px;
    }

    .footer_menu ul li a:hover {
      color: #EB1616;
    }

    .social_icon ul {
      list-style: none;
      padding: 0;
      display: flex;
      gap: 15px;
    }

    .social_icon ul li a {
      color: #aaaaaa;
      font-size: 20px;
      transition: 0.3s;
    }

    .social_icon ul li a:hover {
      color: #EB1616;
    }

    /* Copyright */
    .copyright_section {
      background-color: #0a0a0a;
      padding: 15px 0;
    }

    .copyright_text {
      text-align: center;
      color: #666666;
      font-size: 13px;
      margin: 0;
    }

    .copyright_text a {
      color: #EB1616;
      text-decoration: none;
    }
  </style>
</head>

<body>

  <!-- ===== HEADER ===== -->
  <div class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">
          <img src="<?= base_url('images/s.png'); ?>" alt="Logo Fapus">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href="<?= base_url('login'); ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?= base_url('register'); ?>">Register</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <!-- header section end -->

  <div class="container-fluid px-0">

    <!-- ===== BANNER ===== -->
    <div class="banner_section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <div class="banner_taital_main">
              <h1 class="banner_taital">Selamat Datang<br>di <span style="color:#0a0a0a;">Perpus</span></h1>
              <p style="color:#aaaaaa; margin-top:15px;">Temukan ribuan koleksi buku pilihan kami untuk menambah wawasanmu.</p>
              <div class="btn_main">
                <div class="started_text"><a href="<?= base_url('login'); ?>">Login</a></div>
                <div class="started_text"><a href="<?= base_url('register'); ?>" style="background-color:#1a8a42; border:1px solid #1a8a42;">Register</a></div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 mt-4 mt-sm-0">
            <div class="banner_img text-center">
              <img src="<?= base_url('images/a.png'); ?>" alt="Banner Perpustakaan">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->

    <!-- ===== INFO ALERT ===== -->
    <div class="container">
      <div class="alert alert-danger text-center" role="alert">
        <strong>Jika Anda Ingin Mencari Buku, Diharuskan Login Terlebih Dahulu</strong>
      </div>
    </div>

    <!-- ===== DAFTAR BUKU ===== -->
    <div class="layout-card-custom">
      <?php if (!empty($buku)) : ?>
        <?php foreach ($buku as $item) : ?>
          <div class="card" style="width: 160px;">
            <a data-bs-toggle="modal" data-bs-target="#modalBuku<?= $item['id_buku']; ?>" style="cursor:pointer;">
              <img src="<?= base_url('imgDB/' . $item['cover']); ?>" class="card-img-top" alt="Cover Buku" onerror="this.src='<?= base_url('images/a.png'); ?>'">
            </a>
            <div class="card-body">
              <h6 class="card-title"><?= esc($item['judul']); ?></h6>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?= esc($item['kategori']); ?></li>
            </ul>
          </div>

          <!-- Modal Detail Buku -->
          <div class="modal fade" id="modalBuku<?= $item['id_buku']; ?>" tabindex="-1" aria-labelledby="modalLabel<?= $item['id_buku']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel<?= $item['id_buku']; ?>">Detail Buku</h5>
                  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4 text-center mb-3">
                      <img src="<?= base_url('imgDB/' . $item['cover']); ?>" class="img-fluid rounded" alt="Cover" style="max-height:250px; object-fit:cover;" onerror="this.src='<?= base_url('images/a.png'); ?>'">
                    </div>
                    <div class="col-md-8">
                      <table class="table table-borderless" style="color:#ffffff;">
                        <tr><td><strong>Judul</strong></td><td>: <?= esc($item['judul']); ?></td></tr>
                        <tr><td><strong>Kategori</strong></td><td>: <?= esc($item['kategori']); ?></td></tr>
                        <tr><td><strong>Pengarang</strong></td><td>: <?= esc($item['pengarang']); ?></td></tr>
                        <tr><td><strong>Penerbit</strong></td><td>: <?= esc($item['penerbit']); ?></td></tr>
                        <tr><td><strong>Tahun Terbit</strong></td><td>: <?= esc($item['thn_terbit']); ?></td></tr>
                        <tr><td><strong>Jml. Halaman</strong></td><td>: <?= esc($item['jml_halaman']); ?></td></tr>
                        <tr><td><strong>Deskripsi</strong></td><td>: <?= esc($item['deskripsi']); ?></td></tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <a href="<?= base_url('login'); ?>" class="btn btn-success">Pinjam</a>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
        <div class="text-center w-100 py-5">
          <p style="color:#aaaaaa;">Data buku tidak ditemukan.</p>
        </div>
      <?php endif; ?>
    </div>
    <!-- daftar buku end -->

  </div>

  <!-- ===== FOOTER ===== -->
  <div class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4">
          <h3 class="footer_text">Alamat</h3>
          <div class="footer_menu">
            <ul>
              <p class="dummy_text">Jl. Swadaya Rt.02/03 No. 13 Tapos, Kota Depok</p>
              <li>
                <a href="https://www.google.com/maps/@-6.3974567,106.8825406,3a" target="_blank">
                  <i class="fas fa-map-marker-alt me-1"></i> Lihat Maps
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4">
          <h3 class="footer_text">Media Sosial</h3>
          <div class="social_icon">
            <ul>
              <li><a href="https://github.com/Fatih2704" target="_blank"><i class="fab fa-github"></i></a></li>
              <li><a href="https://api.whatsapp.com/send/?phone=%2B6285692569477" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
              <li><a href="https://www.instagram.com/mfh_fatt/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <h3 class="footer_text">Telepon</h3>
          <p class="dummy_text">+6285692569477</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== COPYRIGHT ===== -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">2024 All Rights Reserved. Design by <a href="#">perpus.com</a></p>
    </div>
  </div>

  <!-- Bootstrap 5 JS (SATU SUMBER - lokal) -->
  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
  <script src="<?= base_url('js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>
