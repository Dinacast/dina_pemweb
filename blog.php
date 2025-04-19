<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Love Bread 🍰 - Blog</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>

<br>
<div class="container">
  <div class="title">Blog / Tips ✏️</div>
  <div class="subtitle">Artikel ringan tentang dunia baking, tips memilih kue ulang tahun, cara merawat kue, dan lainnya.</div>

  <!-- Artikel 1 -->
  <div class="article" data-aos="fade-up" data-aos-duration="1000">
    <h2>5 Tips Memilih Kue Ulang Tahun yang Tepat</h2>
    <p>
      Merayakan ulang tahun tidak lengkap tanpa kue! Tapi memilih kue ulang tahun yang pas bisa jadi membingungkan. Dalam artikel ini, kami berbagi 5 tips memilih kue ulang tahun terbaik — dari rasa, desain, ukuran, hingga penyimpanan.
    </p>
  </div>

  <!-- Artikel 2 -->
  <div class="article" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <h2>Cara Menyimpan Kue Agar Tetap Segar</h2>
    <p>
      Kue bisa cepat mengering jika tidak disimpan dengan benar. Pelajari cara menyimpan kue dengan baik agar tetap lembut dan lezat walau sudah beberapa hari.
    </p>
  </div>

  <!-- Artikel 3 -->
  <div class="article" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
    <h2>Jenis Buttercream: Mana yang Cocok untuk Kue Ulang Tahun?</h2>
    <p>
      Ada banyak jenis buttercream: Swiss, American, hingga Italian meringue. Yuk, kenali perbedaannya dan temukan yang paling cocok untuk kue ulang tahunmu.
    </p>
  </div>
</div>

<?php include 'footer.php'; ?>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200,
    easing: 'ease-in-out',
    once: true 
  });
</script>

</body>
</html>
