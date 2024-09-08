<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <!-- Section 1: Header and Description -->
  <header class="bg-image d-flex align-items-center">
    <div class="row w-50 mx-auto">
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <h1 class="text-secondary-emphasis">Simply Unique <span class="text-white">/</span> Simply Better<span class="text-white">.</span></h1>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
        <p class="bg-secondary p-2 text-dark bg-opacity-10">UserCart is a gift & decorations store based in HCMC, Indonesia. Est since 2019.</p>
      </div>
    </div>
  </header>

  <!-- Section 2: Living Room, Bedroom, Kitchen -->
  <section class="row my-3 gx-3">
    <div class="col-12 col-md-6 d-flex flex-column mb-3">
      <!-- Living Room -->
      <article class="position-relative">
        <div class="d-flex flex-column justify-content-center align-items-center overlay">
          <h2 class="text-white">Living Room</h2>
          <a href="" class="link-offset-3 link-underline-secondary text-white">Shop Now <i class="bi bi-arrow-right-short"></i></a>
        </div>
        <img src="/img/livingroom.png" class="img-fluid" alt="Living Room">
      </article>
    </div>

    <div class="col-12 col-md-6">
      <div class="row gy-4">
        <!-- Bedroom -->
        <article class="col-12">
          <div class="position-relative">
            <div class="d-flex flex-column justify-content-center align-items-center overlay">
              <h2 class="text-white">Bedroom</h2>
              <a href="" class="link-offset-3 link-underline-secondary text-white">Shop Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
            <img src="/img/bedroom.png" class="img-fluid" alt="Bedroom">
          </div>
        </article>

        <!-- Kitchen -->
        <article class="col-12">
          <div class="position-relative">
            <div class="d-flex flex-column justify-content-center align-items-center overlay">
              <h2 class="text-white">Kitchen</h2>
              <a href="" class="link-offset-3 link-underline-secondary text-white">Shop Now <i class="bi bi-arrow-right-short"></i></a>
            </div>
            <img src="/img/kitchen.png" class="img-fluid" alt="Kitchen">
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- Section 3: New Arrivals -->
  <section class="row my-3">
    <div class="col-12">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>New <br> Arrivals</h2>
        <a href="" class="link-offset-3 link-underline-secondary text-dark">More Products <i class="bi bi-arrow-right-short"></i></a>
      </div>
    </div>

    <!-- Scrollable product cards -->
    <div class="col">
      <div class="scroll-container">
        <div class="d-flex">
          <!-- Reusable Product Card -->
          <article class="card me-3" style="min-width: 262px;">
            <div class="bg-card-image d-flex flex-column justify-content-evenly align-items-center p-2">
              <span class="align-self-start px-2 bg-white text-dark rounded">NEW</span>
              <span class="badge-discount align-self-start px-2 bg-success text-white rounded">-50%</span>
              <img src="/img/sofa.png" class="card-img-top" alt="Product 1">
              <a href="#" class="btn btn-dark w-100">Add to Cart</a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Loveseat sofa</h5>
              <p class="card-text">$19.99</p>
            </div>
          </article>

          <!-- Repeat similar card -->
          <!-- Add other product cards as needed -->
        </div>
      </div>
    </div>
  </section>

  <!-- Section 4: Features -->
  <section class="row g-3 my-3">
    <div class="col-6 col-lg-3">
      <div class="grid-item d-flex flex-column justify-content-center align-items-center">
        <i class="bi bi-truck icon-large"></i>
        <p class="fw-bold fs-5 mb-1">Free Shipping</p>
        <p>Order above $200</p>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="grid-item d-flex flex-column justify-content-center align-items-center">
        <i class="bi bi-wallet icon-large"></i>
        <p class="fw-bold fs-5 mb-1">Money-back</p>
        <p>30 days guarantee</p>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="grid-item d-flex flex-column justify-content-center align-items-center">
        <i class="bi bi-key icon-large"></i>
        <p class="fw-bold fs-5 mb-1">Secure Payments</p>
        <p>Secured by Stripe</p>
      </div>
    </div>
    <div class="col-6 col-lg-3">
      <div class="grid-item d-flex flex-column justify-content-center align-items-center">
        <i class="bi bi-telephone icon-large"></i>
        <p class="fw-bold fs-5 mb-1">24/7 Support</p>
        <p>Phone and Email support</p>
      </div>
    </div>
  </section>

  <!-- Section 5: Promotional Banner -->
  <section class="row g-0">
    <div class="col-12 col-lg-6 my-3">
      <img src="/img/banner.png" alt="Banner" class="img-fluid">
    </div>
    <div class="col-12 col-lg-6 bg-gray d-flex flex-column justify-content-center align-items-center my-3">
      <div class="w-50 mt-sm-4">
        <p class="text-primary">SALE UP TO 35% OFF</p>
        <h1>HUNDREDS of New lower prices!</h1>
        <p>It’s more affordable than ever to give every room in your home a stylish makeover</p>
        <a href="" class="link-offset-3 link-underline-secondary text-dark">Shop Now <i class="bi bi-arrow-right-short"></i></a>
      </div>
    </div>
  </section>

  <!-- Section 6: Newsletter Signup -->
  <section class="row justify-content-center bg-newslatter text-center mt-3">
    <div class="col-md-5">
      <h1>Join Our Newsletter</h1>
      <p>Sign up for deals, new products, and promotions</p>
      <form>
        <div class="input-group">
          <span class="input-group-text">
            <i class="bi bi-envelope"></i>
          </span>
          <input type="email" class="form-control" placeholder="Email address" aria-label="Email">
          <button class="btn btn-outline-secondary btn-sm" type="button">Signup</button>
        </div>
      </form>
    </div>
  </section>
</div>

<?= $this->endSection(); ?>