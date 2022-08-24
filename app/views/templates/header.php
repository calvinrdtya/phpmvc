<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title><?= $data['judul'] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  </head>
<body>

      <nav class="navbar navbar-expand-lg navbar-light" style="background: #E0FFFF">
        <div class="container">
          <a class="navbar-brand" href="<?= BASEURL; ?>">MVC Calvien</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-item nav-link active" style="font-size: 15px" href="<?= BASEURL; ?>">Home</a>
              <a class="nav-item nav-link" style="font-size: 15px" href="<?= BASEURL; ?>/guru">Guru</a>
              <a class="nav-item nav-link" style="font-size: 15px" href="<?= BASEURL; ?>/siswa">Siswa</a>
              <a class="nav-item nav-link" style="font-size: 15px" href="<?= BASEURL; ?>/about">About Me</a>
              <a class="nav-item nav-link" style="font-size: 15px" href="<?= BASEURL; ?>/blog">Blog</a>
            </div>
          </div>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary">Search</button>
      </form> -->
  </div>
</nav>