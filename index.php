

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POLIKLINIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-info">
    <nav class="navbar bg-body-tertiary">
</nav>
<div class="container-fluid">
    <a class="navbar-brand" href="index.php"> <img src="1.jpg" alt="" width="45" height="35">Aplikasi Poliklinik</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="?page=pasien/index">pasien</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="?page=dokter/index">dokter</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="?page=rekam_medis/index">rekam_medis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LogOut</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<?php
include "isi.php";
?>
</div>
</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>