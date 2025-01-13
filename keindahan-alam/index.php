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
