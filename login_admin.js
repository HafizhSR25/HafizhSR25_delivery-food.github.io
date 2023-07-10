// Mendapatkan elemen formulir login
var loginForm = document.getElementById('login-form');

// Menangani acara submit formulir login
loginForm.addEventListener('submit', function(event) {
  event.preventDefault(); // Mencegah formulir untuk melakukan submit default

  // Mendapatkan nilai input username dan password
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  // Lakukan validasi sederhana
  if (username === 'admin' && password === 'admin123') {
    // Jika kredensial benar, arahkan ke halaman admin
    window.location.href = 'grafik_admin.php';
  } else {
    // Jika kredensial salah, tampilkan pesan error
    var errorElement = document.getElementById('error-message');
    errorElement.innerText = 'Username atau password salah.';
  }
});