<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Menu - Love Bread & Cake</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body>
<?php include 'navbar.php'; ?>
<section class="best-seller-section py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4 section-title">Best Seller</h2>
    <div class="row text-center">

    <?php
$bestSellers = [
  ['img' => 'blackforest.png', 'name' => 'Black Forest', 'price' => 25000],
  ['img' => 'redvelvetslice.png', 'name' => 'Red Velvet Slice', 'price' => 22000],
  ['img' => 'brownies.png', 'name' => 'Choco Cheese Brownies', 'price' => 20000]
];

foreach ($bestSellers as $cake): 
  $id = md5($cake['name']);
?>
  <div class="col-12 col-md-4 mb-4 fade-in">
  <div class="card cake-card h-100 border-warning">
    <img src="image/cakes/<?= $cake['img'] ?>" class="card-img-top" alt="<?= $cake['name'] ?>">
    <div class="card-body p-2">
      <h6 class="card-title text-warning mb-1"><?= $cake['name'] ?></h6>
      <p class="text-muted small mb-2">Rp <?= number_format($cake['price'], 0, ',', '.') ?></p>
      <div class="btn-group btn-group-sm" role="group">
        <button class="btn btn-outline-secondary" onclick="updateQty('<?= $cake['name'] ?>', -1)">-</button>
        <button class="btn btn-outline-secondary disabled" id="qty-<?= $id ?>">0</button>
        <button class="btn btn-outline-secondary" onclick="updateQty('<?= $cake['name'] ?>', 1)">+</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>


    </div>
  </div>
</section>

<section class="menu-section py-5">
  <div class="container">
    <h2 class="text-center mb-4 section-title">Whole Cake's</h2>
    <div class="row text-center">

      <?php
      $cakes = [
        ['img' => 'vanila.png', 'name' => 'Vanilla Berry', 'price' => 60000],
        ['img' => 'strawberry.png', 'name' => 'Strawberry Cake', 'price' => 60000],
        ['img' => 'fruit.png', 'name' => 'Fruity Mix Signature', 'price' => 35000],
        ['img' => 'blackforest.png', 'name' => 'Black Forest', 'price' => 25000],
        ['img' => 'redvelvetslice.png', 'name' => 'Red Velvet Slice', 'price' => 22000],
        ['img' => 'choco.png', 'name' => 'Chocolate Tiramisu', 'price' => 33000],
        ['img' => 'milk.png', 'name' => 'Fresh Milk Cake', 'price' => 28000],
        ['img' => 'brownies.png', 'name' => 'Choco Cheese Brownies', 'price' => 20000]
      ];
      
      foreach ($cakes as $cake): 
        $id = md5($cake['name']);
      ?>
        <div class="col-12 col-md-4 mb-4" data-aos="fade-up">
  <div class="card cake-card h-100 border-warning">
    <img src="image/cakes/<?= $cake['img'] ?>" class="card-img-top" alt="<?= $cake['name'] ?>">
    <div class="card-body p-2">
      <h6 class="card-title text-warning mb-1"><?= $cake['name'] ?></h6>
      <p class="text-muted small mb-2">Rp <?= number_format($cake['price'], 0, ',', '.') ?></p>
      <div class="btn-group btn-group-sm" role="group">
        <button class="btn btn-outline-secondary" onclick="updateQty('<?= $cake['name'] ?>', -1)">-</button>
        <button class="btn btn-outline-secondary disabled" id="qty-<?= $id ?>">0</button>
        <button class="btn btn-outline-secondary" onclick="updateQty('<?= $cake['name'] ?>', 1)">+</button>
      </div>
    </div>
  </div>
</div>
      <?php endforeach; ?>      

    </div>
  </div>
</section>

<section class="menu-section py-5">
  <div class="container">
    <h2 class="text-center mb-4 section-title">Various Bread</h2>
    <div class="row text-center">

    <?php
$breads = [
  ['img' => 'croissant.png', 'name' => 'Butter Croissant', 'price' => 12000],
  ['img' => 'baguette.png', 'name' => 'Classic Baguette', 'price' => 15000],
  ['img' => 'sourdough.png', 'name' => 'Sourdough Bread', 'price' => 18000],
  ['img' => 'brioche.png', 'name' => 'Sweet Brioche', 'price' => 16000]
];

foreach ($breads as $bread): 
  $id = md5($bread['name']);
?>
<div class="col-12 col-md-4 mb-4" data-aos="fade-up">
<div class="card cake-card h-100 border-warning">
      <img src="image/breads/<?= $bread['img'] ?>" class="card-img-top" alt="<?= $bread['name'] ?>">
      <div class="card-body p-2 text-center">
        <h6 class="card-title small mb-1"><?= $bread['name'] ?></h6>
        <p class="text-muted small mb-2">Rp <?= number_format($bread['price'], 0, ',', '.') ?></p>
        <div class="btn-group btn-group-sm" role="group">
          <button class="btn btn-outline-secondary" onclick="updateQty('<?= $bread['name'] ?>', -1)">-</button>
          <button class="btn btn-outline-secondary disabled" id="qty-<?= $id ?>">0</button>
          <button class="btn btn-outline-secondary" onclick="updateQty('<?= $bread['name'] ?>', 1)">+</button>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>


    </div>
  </div>
</section>

<!-- Tombol Keranjang -->
<div class="container py-5">
  <h2 class="mb-4 text-center">Keranjang Belanja</h2>
  <div id="cart-items" class="mb-4"></div>
  <form action="checkout.php" method="get" onsubmit="return prepareCheckout()">
    <input type="hidden" name="cartData" id="cartData">
    <div class="text-center">
      <button type="submit" class="btn cart-btn btn-success">Checkout</button>
    </div>
  </form>
</div>


<!-- JavaScript -->
<script>
  const cart = {};

  function updateQty(name, change) {
    if (!cart[name]) cart[name] = 0;
    cart[name] += change;
    if (cart[name] < 0) cart[name] = 0;

    const qtyId = 'qty-' + md5(name);
    document.getElementById(qtyId).innerText = cart[name];

    showCart();
  }

  function showCart() {
    const cartContainer = document.getElementById('cart-items');
    cartContainer.innerHTML = '';

    const items = Object.entries(cart).filter(([_, qty]) => qty > 0);

    if (items.length === 0) {
      cartContainer.innerHTML = '<p class="text-muted text-center">Keranjang masih kosong.</p>';
      return;
    }

    const list = document.createElement('ul');
    list.className = 'list-group';

    items.forEach(([name, qty]) => {
      const item = document.createElement('li');
      item.className = 'list-group-item d-flex justify-content-between align-items-center';
      item.innerText = name;
      const badge = document.createElement('span');
      badge.className = 'badge bg-primary rounded-pill';
      badge.innerText = qty;
      item.appendChild(badge);
      list.appendChild(item);
    });

    cartContainer.appendChild(list);
  }

  function checkout() {
    const items = Object.entries(cart).filter(([_, qty]) => qty > 0);
    if (items.length === 0) {
      alert("Keranjang kamu masih kosong!");
      return;
    }

    alert("Terimakasih sudah order! pesanan kamu sedang diproses!");
  }

  function md5(str) {
    return CryptoJS.MD5(str).toString();
  }

  function prepareCheckout() {
    const data = JSON.stringify(cart);
    document.getElementById("cartData").value = encodeURIComponent(data);
    return true;
  }
</script>

<!-- CryptoJS untuk md5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
<script>
  AOS.init({
    duration: 1200,
    easing: 'ease-in-out',
  });
</script>


<?php include 'footer.php'; ?>

</body>
</html>