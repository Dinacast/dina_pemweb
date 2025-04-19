<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Love Bread 🍰 - Testimonials</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php'; ?>
<br>

<div class="container">
  <div class="title">Testimonials / Reviews 🌟</div>
  <div class="subtitle">Terima kasih atas kepercayaan dan cinta kalian. Yuk lihat apa kata mereka!</div>

  <div class="reviews">

    <div class="card">
      <img src="./image/leany.jpg" class="avatar" alt="Rina">
      <div class="content">
        <h3>Leany Putri.</h3>
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <p>Kuenya lembut banget dan gak terlalu manis. Adikku suka banget! Bakal order lagi 💕</p>
      </div>
    </div>

    <div class="card">
      <img src="./image/muflih.jpg" alt="Siti N." class="avatar">
      <div class="content">
        <h3>Muflih.</h3>
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <p>Ini kue terenak yang pernah aku coba. Ulang tahun pacarku jadi makin spesial!</p>
      </div>
    </div>

    <div class="card">
      <img src="./image/kapia.jpg" alt="Siti N." class="avatar">
      <div class="content">
        <h3>Sophia A.</h3>
        <div class="stars">⭐⭐⭐⭐⭐</div>
        <p>Toko terfavorite! menunya enak semua nggak ada yang gagal, wajib cobain Strawberry Cake!</p>
      </div>
    </div>

    <?php
    if (isset($_SESSION['reviews'])) {
      foreach ($_SESSION['reviews'] as $review) {
        echo '<div class="card">';
        echo '<img src="' . htmlspecialchars($review["photo"]) . '" class="avatar" alt="User">';
        echo '<div class="content">';
        echo '<h3>' . htmlspecialchars($review["name"]) . '</h3>';
        echo '<div class="stars">' . htmlspecialchars($review["rating"]) . '</div>';
        echo '<p>' . htmlspecialchars($review["comment"]) . '</p>';
        echo '</div></div>';
      }
    }
    ?>
  </div>
</div>

<a href="#reviewForm" class="fab" title="Tulis Ulasan">
  <img src="./image/ulasan.png" alt="Tulis Ulasan" class="fab-icon">
</a>

<div id="reviewForm" class="modal">
  <div class="modal-content">
    <h2>Tulis Ulasan</h2>
    <form action="submit_review.php" method="post" enctype="multipart/form-data">
  <input type="text" name="name" placeholder="Nama Anda" required>
  
  <!-- Ganti input URL dengan upload file -->
  <label>Upload Foto Profil (opsional):</label>
  <input type="file" name="photoFile" accept="image/*">
  
  <select name="rating" required>
    <option value="">Rating</option>
    <option>⭐</option>
    <option>⭐⭐</option>
    <option>⭐⭐⭐</option>
    <option>⭐⭐⭐⭐</option>
    <option>⭐⭐⭐⭐⭐</option>
  </select>
  <textarea name="comment" placeholder="Komentar Anda..." rows="4" required></textarea>
  <div class="form-buttons">
    <button type="submit">Kirim</button>
    <a href="#" class="cancel">Batal</a>
  </div>
</form>
  </div>
</div>

<br> <br>
<?php include 'footer.php'; ?>
</body>
</html>
