function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
  
    if (username === "DanaPrime" && password === "password123") {
      alert("Login berhasil!");
    } else {
      alert("Username atau password salah!");
    }
  }