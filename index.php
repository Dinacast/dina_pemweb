<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Love Bread</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 text-md-start text-center mb-4">
        <h2 class="tagline">Enjoy with</h2>
        <h1 class="display-5"><span class="highlight">Bread</span> and <span class="highlight">Cake</span></h1>
        <h3 class="mb-4">Choose Your Favorite</h3>
        <p class="description">Di setiap lapis rasa, tersembunyi manisnya kenangan yang lembut dan menghangatkan. Biarkan gigitan pertama membawamu kembali ke momen-momen bahagia yang tak pernah pudar.</p>
        
        <!-- Menu Items -->
        <div class="menu-preview row g-3 mb-4">
          <div class="col-4 text-center">
            <img src="./image/cakes/choco.png" alt="Tiramisu" class="img-fluid rounded" style="height: 100px;">
            <p class="mt-2 mb-1 fw-semibold">Tiramisu Cake</p>
            <p class="text-muted">Rp 33.000</p>
          </div>
          <div class="col-4 text-center">
            <img src="./image/cakes/strawberry.png" alt="Cake Strawberry" class="img-fluid rounded" style="height: 100px;">
            <p class="mt-2 mb-1 fw-semibold">Strawberry Cake</p>
            <p class="text-muted">Rp 60.000</p>
          </div>
          <div class="col-4 text-center">
            <img src="./image/breads/croissant.png" alt="Croissant" class="img-fluid rounded" style="height: 100px;">
            <p class="mt-2 mb-1 fw-semibold">Croissant</p>
            <p class="text-muted">Rp 12.000</p>
          </div>
        </div>

        <a href="menu.php" class="btn btn-order-now">Order Now</a>
      </div>
      <div class="col-md-6 text-center">
  <img src="./image/cakee.png" alt="Cake" class="img-fluid cake-hover-img" style="max-height: 350px;">
</div>
    </div>
  </div>
</section>


<?php include 'footer.php'; ?>

<script>
  document.querySelectorAll('.menu-preview img').forEach(img => {
    img.addEventListener('click', () => {
      img.classList.add('clicked');
      setTimeout(() => {
        img.classList.remove('clicked');
      }, 150); // durasi efek klik
    });
  });
</script>

</body>
</html>
