<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman welcome</title>
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/user.png') }}" alt="user">
            </div>
            <div class="login">
                <button onclick="window.location='{{ route('login') }}';">Login</button>
            </div>
        </div>
    </nav>
    <div class="top-content">
        <div class="info">
            <h2>Selamat Datang di tracer study</h2>
            <h3>silahkan login...</h3>

        </div>
        <div class="info-profil">
            <div class="tabel-profil">
                <div class="profil">
                    <img src="{{ asset('images/profil.png' )}}" alt="profil">
                </div>
                <div class="profil-item">
                    <p>Nama :</p>
                </div>
                <div class="profil-item">
                    <p>Email :</p>
                </div>
                <div class="profil-item">
                    <p>Jurusan :</p>
                </div>
                <div class="profil-item">
                    <p>Tahun lulus :</p>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/welcome.js') }}"></script>
    <footer class="footer">
        <div class="footer-content">
            <p>Copyright © 2025-kevin. Hak Cipta. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" class="social-icon-1">
                    <img src="{{ asset('images/tk.png') }}" alt="Logo">
                </a>
                <a href="#" class="social-icon">
                    <img src="{{ asset('images/ig.jfif') }}" alt="Logo">
                </a>
            </div>
        </div>
    </footer>
</body>

</html>
