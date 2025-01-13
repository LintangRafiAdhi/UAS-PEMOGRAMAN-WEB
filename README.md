# UAS-PEMOGRAMAN-WEB

**NIM**: 312310697  
**Nama**: Lintang Rafi Adhi  
**Kelas**: TI.23.A6  
**Matkul**: Pemrograman Web   

<H1>index.php
</H1>

**CODE**

```
<?php
// Redirect to home.php after a short delay
header('Refresh: 5; URL=home.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Keindahan Alam Indonesia</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            background-image: url('https://th.bing.com/th/id/R.8551a611911209bc312ffee25450d3c5?rik=SmXa38Rfb19WCA&riu=http%3a%2f%2fs1.picswalls.com%2fwallpapers%2f2014%2f08%2f08%2findonesia-high-definition_020529563_164.jpg&ehk=D%2b8%2ffZOABxvhpHoTbStGuX8vbUxO8pKfZrKVlbF5g84%3d&risl=&pid=ImgRaw&r=0');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }
        
        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.6); /* Semi-transparent background */
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 80%;
            max-width: 600px;
        }

        .btn-custom {
            background-color: #10FF74;
            color: #fff;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #00CB29;
            transform: scale(1.05);
        }

        .header-text {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .sub-header-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="header-text">Selamat datang di Keindahan Alam Indonesia</h1>
        <p class="sub-header-text">Nikmati pesona alam Indonesia yang luar biasa. Anda akan segera diarahkan ke halaman utama...</p>
        <a href="home.php" class="btn btn-custom">Masuk ke Halaman Utama</a>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

**TAMPILAN**

![tampilan index](https://github.com/user-attachments/assets/7e4974cd-b964-4fb4-8723-d65b8eb800a9)


<h1>HOME.PHP</h1>

**CODE**

```
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
```

**TAMPILAN**

![tampilan home](https://github.com/user-attachments/assets/c70fb3a1-3384-4ac5-bf2b-f2323bc61444)

<h1>ABOUT.PHP</h1>

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Keindahan Alam Indonesia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            background-size: cover;
            background-position: center;
            transition: background-image 1s ease-in-out;
        }

        header {
            background-color: rgba(16, 255, 116, 0.8);
            color: #fff;
            padding: 50px 0;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 3rem;
            font-weight: 700;
        }

        nav {
            background-color: #000;
            color: #fff;
            padding: 15px 0;
            text-align: center;
            font-size: 1.1rem;
        }

        nav a {
            color: #fff;
            margin: 0 15px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .mission-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .mission-description {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #333;
        }

        .footer {
            background-color: #000;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <h1>Keindahan Alam Indonesia</h1>
    </header>

    <!-- Navigation Bar -->
    <nav>
        <a href="home.php">Home</a> | 
        <a href="about.php">About</a> | 
        <a href="datatables.php">Destinasi</a> | 
        <a href="contact.php">Contact</a>
    </nav>

    <!-- Main Content Section -->
    <main>
        <div class="mission">
            <h2 class="mission-title">Misi Kami</h2>
            <p class="mission-description">
                Kami hadir untuk memperkenalkan keindahan alam Indonesia yang luar biasa. Melalui platform ini, kami ingin menginspirasi wisatawan lokal maupun mancanegara untuk mengeksplorasi berbagai destinasi wisata alam yang tak terlupakan. 
                Dengan menampilkan keindahan alam yang kaya, kami berharap dapat memberikan gambaran yang lebih mendalam tentang keberagaman alam Indonesia, mulai dari pantai eksotis, gunung megah, hutan tropis yang mempesona, hingga danau yang menawan.
            </p>
            <p class="mission-description">
                Selain itu, kami juga bertujuan untuk meningkatkan kesadaran tentang pentingnya menjaga kelestarian alam Indonesia, melalui wisata yang bertanggung jawab dan ramah lingkungan. Kami percaya bahwa dengan memberikan informasi yang tepat, lebih banyak orang akan menghargai dan berusaha menjaga warisan alam yang ada.
            </p>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; 2025 Keindahan Alam Indonesia. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Array of background images
        const images = [
            'https://content.r9cdn.net/rimg/dimg/21/db/cc5387f2-city-9522-16645034865.jpg?width=1750&height=1000&xhint=2650&yhint=2278&crop=true',
            'https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/danau-toba-2.jpg',
            'https://thumbs.dreamstime.com/b/keindahan-gunung-bromo-yang-terletak-di-wilayah-kabupaten-promolinggo-dan-pasuruan-foto-diambil-dari-pananjakan-agustus-dd-141371433.jpg',
            'https://th.bing.com/th/id/R.8551a611911209bc312ffee25450d3c5?rik=SmXa38Rfb19WCA&riu=http%3a%2f%2fs1.picswalls.com%2fwallpapers%2f2014%2f08%2f08%2findonesia-high-definition_020529563_164.jpg&ehk=D%2b8%2ffZOABxvhpHoTbStGuX8vbUxO8pKfZrKVlbF5g84%3d&risl=&pid=ImgRaw&r=0'
        ];

        let currentIndex = 0;

        function changeBackgroundImage() {
            // Set the background image to the next one in the array
            document.body.style.backgroundImage = `url(${images[currentIndex]})`;

            // Increment the index, and reset it if it reaches the end of the array
            currentIndex = (currentIndex + 1) % images.length;
        }

        // Change the background image every 5 seconds
        setInterval(changeBackgroundImage, 5000);
        
        // Initial background change on page load
        changeBackgroundImage();
    </script>
</body>
</html>
```

**TAMPILAN**
![tampilan about](https://github.com/user-attachments/assets/d7ae0615-4c43-407e-96fb-210f911760fe)


<H1>CRUD sederhana dengan menggunakan tambahan Bootstrap 5 </H1>

```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keindahan Alam Indonesia</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
<div class="container my-5">
    <h2 class="mb-4">Keindahan Alam Indonesia</h2>

    <!-- Add Item Modal -->
    <div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addItemModalLabel">Tambah Lokasi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addItemForm">
                        <div class="mb-3">
                            <label for="locationName" class="form-label">Nama Lokasi</label>
                            <input type="text" class="form-control" id="locationName" required>
                        </div>
                        <div class="mb-3">
                            <label for="locationDescription" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="locationDescription" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Table and Add Button -->
    <div class="mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addItemModal">Tambah Lokasi</button>
    </div>
    <table id="crudTable" class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nama Lokasi</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Raja Ampat</td>
            <td>Destinasi wisata alam yang terkenal dengan keindahan alam bawah laut dan pemandangan pulau-pulau kecil yang eksotis.</td>
            <td>
                <button class="btn btn-warning btn-sm edit">Edit</button>
                <button class="btn btn-danger btn-sm delete">Hapus</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bromo</td>
            <td>Gunung Bromo terkenal dengan pemandangan matahari terbit yang menakjubkan dan lanskap yang unik.</td>
            <td>
                <button class="btn btn-warning btn-sm edit">Edit</button>
                <button class="btn btn-danger btn-sm delete">Hapus</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Danau Toba</td>
            <td>Danau vulkanik terbesar di Indonesia dengan pemandangan yang memukau dan budaya Batak yang kaya.</td>
            <td>
                <button class="btn btn-warning btn-sm edit">Edit</button>
                <button class="btn btn-danger btn-sm delete">Hapus</button>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        const table = $('#crudTable').DataTable();

        // Add item
        $('#addItemForm').on('submit', function (e) {
            e.preventDefault();
            const name = $('#locationName').val();
            const description = $('#locationDescription').val();

            const newRow = table.row.add([
                table.rows().count() + 1,
                name,
                description,
                `<button class="btn btn-warning btn-sm edit">Edit</button>
                 <button class="btn btn-danger btn-sm delete">Hapus</button>`
            ]).draw().node();

            // Close modal and reset form
            $('#addItemModal').modal('hide');
            $('#addItemForm')[0].reset();
        });

        // Delete item
        $('#crudTable tbody').on('click', '.delete', function () {
            table.row($(this).parents('tr')).remove().draw();
        });

        // Edit item
        $('#crudTable tbody').on('click', '.edit', function () {
            const row = table.row($(this).parents('tr'));
            const data = row.data();

            const newName = prompt("Edit Nama Lokasi", data[1]);
            const newDescription = prompt("Edit Deskripsi", data[2]);

            if (newName && newDescrip
```


**TAMPILAN**

![tampilan datatables](https://github.com/user-attachments/assets/229c4e83-e426-419f-a9ae-6890bb7cd6f4)


<H1>CONTACT.PHP</H1>

**CODE**

```
<?php include 'includes/header.php'; ?>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <form>
                        <h1 class="text-center mb-4">Hubungi Kami</h1>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" required placeholder="Masukkan nama Anda">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" required placeholder="Masukkan email Anda">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" required placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional: Add Google Maps or contact info section -->
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-4">
            <h3>Alamat</h3>
            <p>Bekasi, Indonesia</p>
        </div>
        <div class="col-md-4">
            <h3>Telepon</h3>
            <p>+62 821-2573-3076</p>
        </div>
        <div class="col-md-4">
            <h3>Email</h3>
            <p>lintangrafi870@gmail.com</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    /* Set background image for the contact page */
    body {
        background-image: url('https://t-2.tstatic.net/tribunnewswiki/foto/bank/images/danau-toba-2.jpg');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        color: #fff;
    }

    /* Center align the form in the middle of the page */
    .container {
        position: relative;
        z-index: 1;
        margin-top: 50px;
    }

    .card {
        background-color: rgba(0, 0, 0, 0.7); /* Dark background for the form */
        color: #fff;
        border-radius: 10px;
    }

    .card-body {
        padding: 30px;
    }

    h1 {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .form-label {
        font-size: 1.2rem;
    }

    .form-control {
        font-size: 1rem;
        padding: 12px;
        border-radius: 10px;
    }

    .btn-primary {
        background-color: rgb(10, 255, 116);
        border: none;
        padding: 12px;
        font-size: 1.1rem;
        border-radius: 10px;
    }

    .btn-primary:hover {
        background-color: rgb(0, 203, 41);
    }

    /* Info section */
    .container.my-5 {
        background: rgba(0, 0, 0, 0.7);
        padding: 20px;
        border-radius: 10px;
    }

    .container.my-5 h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
    }

    .container.my-5 p {
        font-size: 1rem;
        line-height: 1.5;
    }
</style>

```

**TAMPILAN**
![tampilan contact](https://github.com/user-attachments/assets/0f20a458-b914-4d7c-8975-8ddb56876d4d)


