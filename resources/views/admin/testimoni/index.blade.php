<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Testimoni</title>
    <link rel="stylesheet" href="{{ asset('css/tahun.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nav_admin.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            height: 800px;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        h2 {
            text-align: center;
            color: #ffffff;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .table th, .table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #4CAF50;
            color: white;
        }

        .table td {
            background-color: #f9f9f9;
        }

        .btn-danger {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn-danger:hover {
            background-color: #d32f2f;
        }

        @media (max-width: 768px) {
            .table {
                font-size: 14px;
            }
            .btn-danger {
                padding: 4px 8px;
            }
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
        <h2>Data Testimoni</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Alumni</th>
                    <th>Testimoni</th>
                    <th>Tanggal Testimoni</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonis as $testimoni)
                <tr id="row-{{ $testimoni->id_testimoni }}">
                    <td>{{ $testimoni->id_testimoni }}</td>
                    <td>
                        @if ($testimoni->alumni)
                            {{ $testimoni->alumni->nama_depan }} {{ $testimoni->alumni->nama_belakang }}
                        @else
                            <span style="color: red;">Data Alumni Tidak Tersedia</span>
                        @endif
                    </td>
                    
                    <td>{{ $testimoni->testimoni }}</td>
                    <td>{{ $testimoni->tgl_testimoni }}</td>
                    <td>
                        <button type="button" class="btn btn-danger" onclick="hapusTestimoni({{ $testimoni->id_testimoni }})">Hapus</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="{{ asset('js/admin.js') }}"></script>

    <script>
        function hapusTestimoni(id) {
            if (confirm("Apakah Anda yakin ingin menghapus testimoni ini?")) {
                fetch("{{ url('/testimoni') }}/" + id, {
                    method: "DELETE",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert("Testimoni berhasil dihapus.");
                        document.getElementById("row-" + id).remove();
                    }
                });
            }
        }
    </script>

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
