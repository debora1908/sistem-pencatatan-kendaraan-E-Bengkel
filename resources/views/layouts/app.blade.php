<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Bengkel System | Management Kendaraan</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --bg-canvas: #f8fafc;
            --deep-slate: #0f172a;
            --electric-cyan: #06b6d4;
            --soft-white: #ffffff;
            --text-main: #334155;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg-canvas);
            color: var(--text-main);
            overflow-x: hidden;
        }

        /* Navbar Design */
        .custom-nav {
            background: var(--deep-slate);
            padding: 1.2rem 0;
            border-bottom: 4px solid var(--electric-cyan);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 800;
            font-size: 1.5rem;
            letter-spacing: -0.5px;
            color: var(--soft-white) !important;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: 0.3s;
        }

        .navbar-brand i {
            color: var(--electric-cyan);
            filter: drop-shadow(0 0 8px rgba(6, 182, 212, 0.5));
        }

        .navbar-brand:hover {
            transform: translateY(-1px);
        }

        .nav-link {
            color: rgba(255, 255, 255, 0.7) !important;
            font-weight: 600;
            padding: 0.6rem 1.2rem !important;
            border-radius: 10px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover, .nav-link.active {
            color: var(--electric-cyan) !important;
            background: rgba(255, 255, 255, 0.05);
        }

        /* Hero Container */
        .content-area {
            padding: 3rem 0;
            min-height: 80vh;
        }

        /* Tombol Custom (Bukan warna Bootstrap Standar) */
        .btn-premium {
            background: var(--electric-cyan);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s;
            text-decoration: none;
        }

        .btn-premium:hover {
            background: #0891b2;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px -5px rgba(6, 182, 212, 0.4);
        }

        /* Card Master Layout */
        .card-exclusive {
            background: var(--soft-white);
            border: none;
            border-radius: 24px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -2px rgba(0, 0, 0, 0.05);
            padding: 2rem;
        }

        /* Footer */
        .footer-minimal {
            background: white;
            padding: 2rem 0;
            border-top: 1px solid #e2e8f0;
            margin-top: 4rem;
        }

        /* Animasi Masuk */
        @keyframes slideIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .animate-view {
            animation: slideIn 0.8s ease-out;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg custom-nav sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                E-BENGKEL <span style="color: var(--electric-cyan)">PRO</span>
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
                <i class="fa-solid fa-bars-staggered text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fa-solid fa-table-list me-2"></i>Daftar Antrean
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container content-area animate-view">
        @yield('content')
    </main>

    <footer class="footer-minimal text-center">
        <div class="container">
            <p class="mb-0 text-muted small fw-semibold">
                &copy; 2026 E-Bengkel Management System. Perbaikan Kendaraan Profesional.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>