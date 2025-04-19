<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Order Tracking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <h2 class="mb-4 text-center">Lacak Pesanan</h2>

    <form id="trackingForm" onsubmit="trackOrder(event)">
      <div class="mb-3">
        <label for="orderId" class="form-label">Nomor Pesanan</label>
        <input type="text" class="form-control" id="orderId" required placeholder="Masukkan nomor pesanan...">
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary">Cek Status</button>
      </div>
    </form>

    <div id="result" class="mt-4 text-center fw-bold"></div>
  </div>

  <script>
    // Data contoh (nanti bisa diganti dengan database sungguhan)
    const orders = {
      "ORD001": "Sedang diproses",
      "ORD002": "Dalam pengiriman",
      "ORD003": "Selesai",
      "ORD004": "Dibatalkan"
    };

    function trackOrder(event) {
      event.preventDefault();

      const orderId = document.getElementById("orderId").value.trim().toUpperCase();
      const result = document.getElementById("result");

      if (orders[orderId]) {
        result.textContent = `Status Pesanan: ${orders[orderId]}`;
        result.className = "mt-4 text-center fw-bold text-success";
      } else {
        result.textContent = "Nomor pesanan tidak ditemukan.";
        result.className = "mt-4 text-center fw-bold text-danger";
      }
    }
  </script>

<?php include 'footer.php'; ?>

</body>
</html>
