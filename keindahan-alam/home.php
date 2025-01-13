<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Keindahan Alam Indonesia</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: rgb(10, 255, 116);
            --secondary-color: rgb(0, 203, 41);
            --text-color: #f3f4ed;
            --gradient-overlay: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.8));
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            background-image: url('https://come2indonesia.com/wp-content/uploads/2020/09/Bromo_Photos02_come2indonesia_Indonesia.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: var(--text-color);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-overlay);
            z-index: 1;
        }

        .hero .text-center {
            z-index: 2;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.5rem;
            margin-top: 20px;
        }

        nav {
            background: var(--primary-color);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: var(--text-color) !important;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .destination-card {
            overflow: hidden;
            border: none;
        }

        .destination-card img {
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .destination-card img:hover {
            transform: scale(1.1);
            box-shadow: 0 10px 20px rgba(5, 241, 119, 0.3);
        }

        .footer {
            background: var(--gradient-overlay);
            color: var(--text-color);
            padding: 20px 0;
            text-align: center;
        }

        .footer .social-icons a {
            color: var(--text-color);
            margin: 0 10px;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .footer .social-icons a:hover {
            color: var(--primary-color);
        }

        .scroll-btn {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2rem;
            color: var(--text-color);
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 50%;
            transition: background 0.3s;
        }

        .scroll-btn:hover {
            background: var(--primary-color);
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <div class="text-center">
            <h1>Keindahan Alam Indonesia</h1>
            <p>Menjelajahi Keindahan Alam Nusantara yang Tak Tertandingi</p>
            <!-- Tombol Gulir ke Bawah -->
            <button class="btn btn-light btn-lg mt-3 scroll-btn" onclick="scrollToContent()">Gulir ke Bawah</button>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Keindahan Indonesia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datatables.php">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <div id="content" class="container my-5">
        <h2 class="text-center mb-4">Destinasi Populer</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card destination-card">
                    <img src="https://blog.tripcetera.com/id/wp-content/uploads/2020/03/leebudihart_76864081_2484833498431751_3194446755026370817_n.jpg" class="card-img-top" alt="Pantai Eksotis">
                    <div class="card-body">
                        <h5 class="card-title">Pantai Eksotis</h5>
                        <p class="card-text">Nikmati keindahan pantai berpasir putih dan air biru yang jernih.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card destination-card">
                    <img src="https://24travel.id/wp-content/uploads/2023/08/gunung-bromo-terletak-di-1.jpeg" class="card-img-top" alt="Gunung Megah">
                    <div class="card-body">
                        <h5 class="card-title">Gunung Megah</h5>
                        <p class="card-text">Pendakian seru dengan pemandangan alam yang memukau.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card destination-card">
                    <img src="https://setkab.go.id/wp-content/uploads/2016/08/danau-toba-dari-balige-1.jpg" class="card-img-top" alt="Hutan Tropis">
                    <div class="card-body">
                        <h5 class="card-title">Danau Toba</h5>
                        <p class="card-text">Eksplorasi Danau dengan keanekaragaman hayati yang luar biasa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Keindahan Alam Indonesia. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="v"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript untuk Scroll -->
    <script>
        function scrollToContent() {
            document.getElementById('content').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
