<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/alumni.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_alumni.css') }}">
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
                <button onclick="window.location='{{ route('alumni.dashboard') }}';">Home</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.Dataalumni.index') }}';">Data Alumni</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('tracerstudy.create') }}';">Tracer Study</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.tracerkuliah.create') }}';">Tracer Kuliah</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('alumni.tracerkerja.create') }}';">Tracer Kerja</button>
            </div>
            <div class="menu-item">
                <button onclick="window.location='{{ route('testimoni.create') }}';">Testimoni</button>
            </div>
        </div>
        <div class="menu_dropdown">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="logout-btn">
                    <img src="{{ asset('icons/logout.png') }}" alt="Logout Icon">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <div class="top-content">
        <div class="info">
            <h2>Selamat Datang, Alumni</h2>
            <h3>Terimakasih telah bergabung</h3>
            <h3>di sistem Tracer Study</h3>
            <h3><span> Mohon Lengkapi Data Diri Anda </span></h3>
            <h3>untuk mendukung pengembangan</h3>
            <h3>Alumni di masa depan</h3>
        </div>
        <!-- Profile Information -->
        <div class="profile-info">
            <img src="{{ asset('images/profil.png') }}" alt="Profile Picture" class="profile-img">
            <div class="profile-details">
                <p><strong>Nama:</strong> {{ $alumnis->nama_depan ?? 'Data alumni tidak ditemukan.' }} {{ $alumnis->nama_belakang ?? '' }}</p>
                <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
                <p><strong>Jurusan:</strong> {{ $alumnis->konsentrasiKeahlian->konsentrasi_keahlian ?? 'Jurusan tidak ditemukan.' }}</p>
                <p><strong>Tahun Lulus:</strong> {{ $alumnis->tahunLulus->tahun_lulus ?? 'Tahun Lulus tidak ditemukan.' }}</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/alumni.js') }}"></script>

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
