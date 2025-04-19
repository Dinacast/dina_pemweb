<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout & Tracking</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <h2 class="mb-4 text-center">Form Pemesanan</h2>

  <form id="orderForm" onsubmit="submitOrder(event)">
    <div class="mb-3">
      <label for="name" class="form-label">Nama Pemesan</label>
      <input type="text" class="form-control" id="name" required>
    </div>

    <div class="mb-3">
      <label for="address" class="form-label">Alamat</label>
      <textarea class="form-control" id="address" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Nomor Telepon</label>
      <input type="tel" class="form-control" id="phone" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Produk Dipesan</label>
      <ul id="product-list" class="list-group">
        <li class="list-group-item">Tidak ada produk dipilih.</li>
      </ul>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-primary">Kirim Pesanan</button>
    </div>
  </form>

  <div id="message" class="text-center mt-4 fw-bold text-success" style="display: none;">
    Terimakasih sudah order! Pesanan kamu sedang diproses.
  </div>

  <div class="mt-5">
    <h4 class="text-center mb-4">Data Pemesanan</h4>
    <table class="table table-bordered table-striped" id="orderTable" style="display: none;">
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Nama Pemesan</th>
          <th>Alamat</th>
          <th>No Telepon</th>
          <th>Produk Dipesan</th>
        </tr>
      </thead>
      <tbody id="orderTableBody">
      </tbody>
    </table>
  </div>

  <hr class="my-5">

  <h2 class="mb-4 text-center">Lacak Pesanan</h2>
  <form id="trackingForm" onsubmit="trackOrder(event)">
    <div class="mb-3">
      <label for="orderId" class="form-label">Nomor Pesanan (Order ID)</label>
      <input type="text" class="form-control" id="orderId" required placeholder="Masukkan nomor pesanan...">
    </div>
    <div class="text-center">
      <button type="submit" class="btn btn-success">Cek Status</button>
    </div>
  </form>

  <div id="result" class="mt-4 text-center fw-bold"></div>

</div>

<script>
  const params = new URLSearchParams(window.location.search);
  const cartData = params.get("cartData");
  let orderedProducts = "";
  let orders = {}; // Penyimpanan order sementara di memory

  if (cartData) {
    try {
      const decoded = decodeURIComponent(cartData);
      const cart = JSON.parse(decoded);
      const list = document.getElementById("product-list");
      list.innerHTML = "";

      const items = Object.entries(cart).filter(([_, qty]) => qty > 0);
      if (items.length === 0) {
        list.innerHTML = "<li class='list-group-item'>Tidak ada produk dipilih.</li>";
      } else {
        items.forEach(([name, qty]) => {
          const li = document.createElement("li");
          li.className = "list-group-item d-flex justify-content-between";
          li.innerHTML = `${name} <span class="badge bg-secondary">${qty}</span>`;
          list.appendChild(li);
        });
        orderedProducts = items.map(([name, qty]) => `${name} (${qty})`).join(", ");
      }
    } catch (e) {
      console.error("Gagal parsing cartData", e);
    }
  }

  function generateOrderId() {
    const now = Date.now();
    return 'ORD' + now.toString().slice(-6); // Misal: ORD123456
  }

  function submitOrder(event) {
    event.preventDefault();

    const name = document.getElementById("name").value;
    const address = document.getElementById("address").value;
    const phone = document.getElementById("phone").value;

    const orderId = generateOrderId();
    orders[orderId] = "Sedang diproses";

    const tbody = document.getElementById("orderTableBody");
    const table = document.getElementById("orderTable");

    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${orderId}</td>
      <td>${name}</td>
      <td>${address}</td>
      <td>${phone}</td>
      <td>${orderedProducts || "Tidak ada produk"}</td>
    `;
    tbody.appendChild(row);

    table.style.display = "table";
    document.getElementById("message").innerHTML = `Terimakasih sudah order! <br> Nomor Pesanan kamu: <strong>${orderId}</strong>.`;
    document.getElementById("message").style.display = "block";

    document.getElementById("orderForm").reset();
    document.getElementById("product-list").innerHTML = "<li class='list-group-item'>Tidak ada produk dipilih.</li>";
  }

  function trackOrder(event) {
    event.preventDefault();

    const orderId = document.getElementById("orderId").value.trim().toUpperCase();
    const result = document.getElementById("result");

    if (orders[orderId]) {
      result.textContent = `Status Pesanan (${orderId}): ${orders[orderId]}`;
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
