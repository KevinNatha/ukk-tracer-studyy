<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Privasi Alumni</title>
    <link rel="stylesheet" href="{{ asset('css/konsentrasi.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            height: 800px;
            display: flex;
            flex-direction: column;
            margin: 0;
        }
    </style>
</head>

<body>

    <nav>
        <div class="profile">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
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
    </nav>

    <div class="container">
        <h1>Daftar Konsentrasi Keahlian</h1>
        <div class="tmbh">
            <a href="{{ route('konsentrasi.create') }}">Tambah Baru</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Program Keahlian</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($konsentrasiKeahlian as $item)
                <tr>
                    <td>{{ $item->id_konsentrasi_keahlian }}</td>
                    <td>{{ $item->id_program_keahlian }}</td>
                    <td>{{ $item->kode_konsentrasi_keahlian }}</td>
                    <td>{{ $item->konsentrasi_keahlian }}</td>
                    <td>
                        <a href="{{ route('konsentrasi.edit', $item->id_konsentrasi_keahlian) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('konsentrasi.destroy', $item->id_konsentrasi_keahlian) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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
