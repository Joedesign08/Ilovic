<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ApexAuto | Toyota & Honda Spare Parts</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <!-- SwiperJS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body class="bg-light text-dark">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container">
      <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
        <i class="bi bi-wrench-adjustable-circle text-warning me-2 fs-3"></i>
        <span>ILO<span class="text-warning">VIC</span></span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link <?=  $pageURL == "/home" ?? "/" ? "active": ""?>" href="/home">Home</a></li>
          <li class="nav-item"><a class="nav-link <?=  $pageURL == "/categories" ? "active": "" ?>" href="/categories">Categories</a></li>
          <li class="nav-item"><a class="nav-link <?= $pageURL == "/products" ? "active": "" ?>" href="/products">Upgrade Kits</a></li>
          <li class="nav-item"><a class="nav-link <?= $pageURL == "/about" ? "active": "" ?>" href="/about">Why Us</a></li>
          <li class="nav-item ms-lg-3">
            <a href="tel:+2348082792432" class="btn btn-warning fw-bold d-flex align-items-center gap-2">
              <i class="bi bi-telephone-fill"></i> Call Expert
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>