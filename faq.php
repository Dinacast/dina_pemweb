<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>FAQ - Love Bread</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <div class="container py-5">
    <h2 class="faq-title">Pertanyaan yang Sering Diajukan (FAQ)</h2>

    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
            Apa saja produk yang tersedia di Love Bread?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Kami menyediakan berbagai macam roti, cake, kue kering, dan pastry segar yang dibuat setiap hari dari bahan-bahan pilihan.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
            Apakah bisa pre-order untuk acara khusus?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Tentu! Kami menerima pre-order untuk ulang tahun, arisan, meeting, dan acara lainnya. Hubungi kami minimal H-2 sebelum hari pengambilan.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
            Apakah bisa pesan online?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya! Kamu bisa pilih produk lewat halaman katalog kami, lalu lanjut ke halaman checkout untuk kirim pesananmu.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
            Di mana lokasi toko Love Bread?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Love Bread berlokasi di Jalan Manis No. 7, Surabaya. Kami buka setiap hari pukul 07.00 - 20.00 WIB.
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="footer mt-auto py-4">
  <div class="container text-center">
    <p class="mb-1">&copy; 2025 Love Bread 🍰. by dina_castt.</p>
    <p class="social-icons">
      <a href="https://www.instagram.com/dina_castt?igsh=YWxuMGw3Y3dxamV1">Instagram</a> ·
      <a href="dinacahyantiii05@gmail.com">Email</a> ·
      <a href="#">Twitter</a>
    </p>
  </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
