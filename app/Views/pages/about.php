<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <section class="row my-4">
    <div class="col-12 col-md-8">
      <h1 class="header-about">We believe in sustainable decor. We’re passionate about life at home.</h1>
      <p>Our features timeless furniture, with natural fabrics, curved lines, plenty of mirrors and classic design, which can be incorporated into any decor project. The pieces enchant for their sobriety, to last for generations, faithful to the shapes of each period, with a touch of the present</p>
    </div>
    
    
  </section>
    
    <section class="row g-0 ">
    <div class="col-12 col-lg-6">
      <img src="/img/banner.png" alt="Banner" class="img-fluid">
    </div>
    <div class="col-12 col-lg-6 bg-gray d-flex flex-column justify-content-center align-items-center pb-5">
      <div class="w-50 mt-sm-4">
        <h1>About us</h1>
        <p>UserCart is a gift & decorations store based in HCMC, Indonesia. Est since 2019. 
        Our customer service is always prepared to support you 24/7</p>
        <a href="" class="link-offset-3 link-underline-secondary text-dark">Shop Now <i class="bi bi-arrow-right-short"></i></a>
      </div>
    </div>
  </section>
  
</div>
<section class="row g-0 mt-4">
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
<?= $this->endSection() ?>