<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <!-- Toggler for mobile view, moved to the left -->
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">UserCart</a>

        <!-- Navigation links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/pages/about'); ?>">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>

        <!-- Additional actions, aligned to the right with d-flex for inline display -->
        <ul class="navbar-nav ms-auto d-flex flex-row justify-content-end align-items-center ">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#"><i class="bi bi-person-circle"></i></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#"><i class="bi bi-cart"></i></a>
          </li>
        </ul>
      </div>
    </nav>

  </header>

  <?= $this->renderSection('content'); ?>

  <footer class="bg-dark text-light">
    <div class="container py-4">
      <div class="footer-top">
        <div class="d-flex justify-content-between align-items-center flex-column flex-md-row text-center text-md-start">
          <!-- Brand Information -->
          <div class="d-flex flex-column mb-3">
            <h5 class="text-uppercase">UserCart</h5>
            <p>Gift & Decoration Store</p>
          </div>

          <!-- Navigation Links -->
          <ul class="d-flex flex-column flex-md-row mb-3">
            <li class="mx-2"><a href="#" class="text-light">Home</a></li>
            <li class="mx-2"><a href="#" class="text-light">Shop</a></li>
            <li class="mx-2"><a href="#" class="text-light">About</a></li>
            <li class="mx-2"><a href="#" class="text-light">Contact</a></li>
          </ul>
        </div>

        <hr>

        <div class="d-flex justify-content-between flex-column-reverse flex-md-row align-items-center text-center text-md-start">
          <!-- Copyright Information -->
          <p class="mb-3 mb-md-0">Copyright &copy; 2024 UserCart. All rights reserved.</p>

          <!-- Footer Links -->
          <ul class="d-flex flex-column flex-md-row mb-3 mb-md-0">
            <li class="mx-2"><a href="#" class="text-light">Privacy Policy</a></li>
            <li class="mx-2"><a href="#" class="text-light">Terms of Use</a></li>
          </ul>

          <!-- Social Media Links -->
          <div class="d-flex mb-2">
            <a href="#" class="text-light mx-2" aria-label="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="text-light mx-2" aria-label="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="text-light mx-2" aria-label="YouTube">
              <i class="bi bi-youtube"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>