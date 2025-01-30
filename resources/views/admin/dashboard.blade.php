<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/user.png') }}" alt="user">
            </div>
            <div class="Username">
                {{ Auth::user()->name }}
            </div>
        </div>
        <div class="menu">
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.dashboard') }}';">Home</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.alumni.index') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.TracerKuliah.index') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('admin.TracerKerja.index') }}';">Tracer Kerja</button>
            </div>
        </div>
        <!-- Gantilah bagian ini untuk tombol logout -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit" class="logout-btn">
                Logout
            </button>
        </form>
    </nav>

    <div class="top-content">
        <div class="info">
            <h2>Selamat Datang Admin...</h2>
            <h3>Di Tracer Study</h3>
        </div>
        <div class="info-profil">
            <h3>Kelola Data</h3>
            <div class="admin-actions">
                <button onclick="window.location='{{ route('sekolah.index') }}';">Kelola Sekolah</button>
                <button onclick="window.location='{{ route('program.index') }}';">Kelola Program Keahlian</button>
                <button onclick="window.location='{{ route('konsentrasi.index') }}';">Kelola Konsentrasi Keahlian</button>
                <button onclick="window.location='{{ route('bidang.index') }}';">Kelola Bidang Keahlian</button>
                <button onclick="window.location='{{ route('status-alumni.index') }}';">Kelola Status Alumni</button>
                <button onclick="window.location='{{ route('tahun-lulus.index') }}';">Kelola Tahun Lulus</button>
                <button onclick="window.location='{{ route('testimoni.index') }}';">Testimoni</button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/admin.js') }}"></script>

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
