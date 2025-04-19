let cart = JSON.parse(localStorage.getItem('cart')) || [];

function updateQty(name, change) {
  const index = cart.findIndex(item => item.name === name);
  if (index !== -1) {
    cart[index].qty += change;
    if (cart[index].qty <= 0) {
      cart.splice(index, 1);
    }
  } else if (change > 0) {
    cart.push({ name, qty: 1 });
  }

  localStorage.setItem('cart', JSON.stringify(cart));
  updateQtyButton(name);
  showCart();
}

function updateQtyButton(name) {
  const item = cart.find(c => c.name === name);
  const el = document.getElementById('qty-' + md5(name));
  if (el) el.textContent = item ? item.qty : 0;
}

function showCart() {
  const cartItems = document.getElementById('cart-items');
  if (!cartItems) return;

  cartItems.innerHTML = '';
  if (cart.length === 0) {
    cartItems.innerHTML = '<p class="text-muted">Keranjang kosong</p>';
    return;
  }

  cart.forEach((item, index) => {
    cartItems.innerHTML += `
      <div class="d-flex justify-content-between align-items-center mb-2">
        <div><strong>${item.name}</strong> x ${item.qty}</div>
        <div>
          <button class="btn btn-sm btn-outline-secondary me-1" onclick="updateQty('${item.name}', -1)">-</button>
          <button class="btn btn-sm btn-outline-secondary" onclick="updateQty('${item.name}', 1)">+</button>
        </div>
      </div>
    `;
  });
}

function clearCart() {
  cart = [];
  localStorage.removeItem('cart');
}

// Untuk md5 di tombol (bisa kamu ambil dari CDN kalau belum ada)
function md5(string) {
  return CryptoJS.MD5(string).toString();
}
